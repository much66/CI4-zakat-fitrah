<?php

namespace App\Controllers;

use App\Models\WargaModel;

class warga extends BaseController
{
    protected $wargaModel;

    public function __construct()
    {
        $this->wargaModel = new WargaModel();
    }

    public function index()
    {
        // $warga = $this->wargaModel->findAll();
        $currentPage = $this->request->getVar('page_warga') ? $this->request->getVar('page_warga') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $warga = $this->wargaModel->search($keyword);
        } else {
            $warga = $this->wargaModel;
        }
        $data = [
            'title' => 'Daftar Warga',
            // 'warga' => $this->wargaModel->findAll()
            'warga' => $warga->paginate(5, 'warga'),
            'pager' => $this->wargaModel->pager,
            'currentPage' => $currentPage
        ];


        return view('warga/index', $data);
    }
}
