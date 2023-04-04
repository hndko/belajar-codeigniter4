<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
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
        $data = [
            'title' => 'Form Tambah Data Komik'
        ];

        return view('komik/create', $data);
    }

    public function store()
    {
        if (!$this->validate([
            'judul' => 'required|is_unique[tb_komik.judul]'
        ])) {
            $validation = \Config\Services::validation();
            dd($validation);

            return redirect()->to('/komik/create');
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul'),
        ]);

        session()->setFlashdata('message', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/komik');
    }
}
