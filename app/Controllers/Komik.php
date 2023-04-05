<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        $komik = $this->komikModel->getKomik();

        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];

        // Koneksi database tanpa model
        /*
        $db = \Config\Database::connect();
        $komik = $db->query("SELECT * FROM `tb_komik`");
        // dd($komik);
        foreach ($komik->getResultArray() as $row) {
            d($row);
        }
        */

        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        if (empty($data['komik'])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('komik/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Komik',
            'validation' => \Config\Services::validation()
        ];

        // d($data['validation']);

        return view('komik/create', $data);
    }

    public function store()
    {
        $rules = [
            'judul' => 'required|is_unique[tb_komik.judul]|min_length[5]',
            'penulis' => 'required',
            'penerbit' => 'required',
        ];

        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Form Tambah Data Komik',
                'validation' => \Config\Services::validation()
            ];

            return view('komik/create', $data);
        } else {
            $slug = url_title($this->request->getVar('judul'), '-', true);
            $this->komikModel->save([
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'penulis' => $this->request->getVar('penulis'),
                'penerbit' => $this->request->getVar('penerbit'),
                'sampul' => $this->request->getVar('sampul'),
            ]);

            session()->setFlashdata('messa ge', 'Data Berhasil Ditambahkan.');
            return redirect()->to('/komik');
        }
    }

    public function delete($id)
    {
        $this->komikModel->delete($id);
        session()->setFlashdata('message', 'Data Berhasil Dihapuskan.');
        return redirect()->to('/komik');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Komik',
            'validation' => \Config\Services::validation(),
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('komik/edit', $data);
    }

    public function update($id)
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul'),
        ]);

        session()->setFlashdata('messa ge', 'Data Berhasil Diubahkan.');
        return redirect()->to('/komik');
    }
}
