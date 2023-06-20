<?php

namespace App\Controllers;

use App\Models\PengumpulanModel;


class Pengumpulan extends BaseController
{
    protected $pengumpulanModel;
    public function __construct()
    {
        $this->pengumpulanModel = new PengumpulanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Laporan | Pengumpulan Zakat',
            'total_beras' => $this->pengumpulanModel->getTotalBeras(),
            'total_uang' => $this->pengumpulanModel->getTotalUang(),
            'total_jiwa' => $this->pengumpulanModel->total_jiwa(),
            'total_muzakki' => $this->pengumpulanModel->total_muzakki(),
        ];
        return view('lap_pengumpulan/index', $data);
    }
}
