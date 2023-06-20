<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\KategoriModel;
use App\Models\MlainnyaModel;
use App\Models\MwargaModel;
use App\Models\BayarModel;

class Pages extends BaseController
{
    protected $homeModel;
    protected $mwargaModel;
    protected $kategoriModel;
    protected $mlainnyaModel;
    protected $bayarModel;

    public function __construct()
    {
        $this->homeModel = new HomeModel();
        $this->mwargaModel = new MwargaModel();
        $this->mlainnyaModel = new MlainnyaModel();
        $this->kategoriModel = new KategoriModel();
        $this->bayarModel = new BayarModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Home Page',
            'tmuzakki' => $this->homeModel->tmuzakki(),
            'tmwarga' => $this->mwargaModel->tmwarga(),
            'tmlainnya' => $this->mlainnyaModel->tmlainnya(),
            'tkategori' => $this->kategoriModel->tkategori(),
            'totalBeras' => $this->bayarModel->getTotalBeras(),
            'totalUang' => $this->bayarModel->getTotalUang(),
            'total_sudah' => $this->mwargaModel->total_sudah_distribusi() + $this->mlainnyaModel->total_sudah_distribusi(),
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'Home | About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Pamijahan',
                    'kota' => 'Tasikmalaya'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
