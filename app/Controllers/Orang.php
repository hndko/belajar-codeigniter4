<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
    protected $orangModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }

    public function index()
    {
        $current_page = $this->request->getVar('page_tb_orang') ? $this->request->getVar('page_tb_orang') : '1';
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->orangModel->search($keyword);
        } else {
            $orang = $this->orangModel;
        }

        $data = [
            'title' => 'Daftar Orang',
            'orang' => $orang->paginate(10, 'tb_orang'),
            'pager' => $this->orangModel->pager,
            'current_page' => $current_page
            // 'orang' => $this->orangModel->findAll()
        ];

        return view('orang/index', $data);
    }
}
