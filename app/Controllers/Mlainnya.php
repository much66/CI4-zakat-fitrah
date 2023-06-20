<?php

namespace App\Controllers;

use App\Models\MlainnyaModel;
use App\Models\BayarModel;
use App\Models\KategoriModel;

class Mlainnya extends BaseController
{
    protected $mlainnyaModel;
    protected $bayarModel;
    protected $kategoriModel;

    public function __construct()
    {
        $this->mlainnyaModel = new MlainnyaModel();
        $this->bayarModel = new BayarModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $muzakki = $this->mlainnyaModel->search($keyword)->getMlainnya();
        } else {
            $muzakki = $this->mlainnyaModel->getMlainnya();
        }
        // $mlainnya = $this->mlainnyaModel->findAll();
        $currentPage = $this->request->getVar('page_warga') ? $this->request->getVar('page_warga') : 1;

        $data = [
            'title' => 'Daftar Mustahik Warga',
            'mlainnya' => $muzakki->paginate(6, 'warga'),
            'pager' => $this->mlainnyaModel->pager,
            'currentPage' => $currentPage,
            'totalberas' => $this->mlainnyaModel->getTotalBeras(),

        ];


        return view('mlainnya/index', $data);
    }


    public function belum()
    {
        // dd($this->mlainnyaModel);
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $muzakki = $this->mlainnyaModel->search1($keyword);
        } else {
            $muzakki = $this->mlainnyaModel->getBelum();
        }
        // $mlainnya = $this->mlainnyaModel->findAll();
        $currentPage = $this->request->getVar('page_warga') ? $this->request->getVar('page_warga') : 1;

        $data = [
            'title' => 'Daftar Mustahik Warga',
            'mlainnya' => $muzakki->paginate(6, 'warga'),
            'pager' => $this->mlainnyaModel->pager,
            'currentPage' => $currentPage

        ];

        return view('mlainnya/belum', $data);
    }


    public function create()
    {
        session();

        $data = [
            'title' => 'Tambah Data',
            'nama' => $this->mlainnyaModel->getNama(),
            'validation' => \Config\Services::validation()
        ];
        return view('mlainnya/create', $data);
    }

    public function tambah()
    {
        session();

        $data = [
            'title' => 'Tambah Data',
            'nama' => $this->mlainnyaModel->getNama(),
            'validation' => \Config\Services::validation()
        ];
        return view('mlainnya/tambah', $data);
    }

    public function save()
    {

        if (!$this->validate(
            [
                'nama' => 'required',
                'kategori' => 'required',
            ]
        )) {

            // $validation = \Config\Services::validation();
            // return redirect()->to('/mwarga/create')->withInput()->with('validation', $validation);
            return redirect()->to('/mwarga/create')->withInput();
        }

        $amilin = $this->kategoriModel->jumlah_hak('Amilin');
        $mualaf = $this->kategoriModel->jumlah_hak('Mualaf');
        $fisabilillah = $this->kategoriModel->jumlah_hak('Fisabilillah');
        $ibnu_sabil = $this->kategoriModel->jumlah_hak('Ibnu Sabil');

        if ($this->request->getVar('kategori') == 'Amilin') {
            $hak_beras = $amilin;
        } else if ($this->request->getVar('kategori') == 'Mualaf') {
            $hak_beras = $mualaf;
        } else if ($this->request->getVar('kategori') == 'Fisabilillah') {
            $hak_beras = $fisabilillah;
        } else {
            $hak_beras = $ibnu_sabil;
        }


        $this->mlainnyaModel->where('nama', $this->request->getVar('nama'))->set([
            'hak_beras' => $hak_beras,
        ])->update();

        session()->setFlashdata('pesan', 'Distribusi Berhasil!!!');

        return redirect()->to('/mlainnya');
    }

    public function delete($id)
    {
        // cari gambar berdasarkan id

        // hapus gambar
        $isi = [
            'hak_beras' => 0,
        ];

        $this->mlainnyaModel->table('muzakki')->where('id', $id)->set($isi)->update();
        session()->setFlashdata('pesan', 'Penghapusan distribusi berhasil!!!');
        return redirect()->to('/mlainnya');
    }

    public function edit($id)
    {
        session();

        $data = [
            'title' => 'Edit Data',
            'validation' => \Config\Services::validation(),
            'mlainnya' => $this->mlainnyaModel->getZakat($id),
            'nama' => $this->mlainnyaModel->getNama(),
        ];
        return view('mlainnya/edit', $data);
    }

    public function update($id)
    {

        if (!$this->validate(
            [
                'nama' => 'required',
                'kategori' => 'required',
            ]
        )) {

            // $validation = \Config\Services::validation();
            // return redirect()->to('/mwarga/create')->withInput()->with('validation', $validation);
            return redirect()->to('/mwarga/create')->withInput();
        }

        $amilin = $this->kategoriModel->jumlah_hak('Amilin');
        $mualaf = $this->kategoriModel->jumlah_hak('Mualaf');
        $fisabilillah = $this->kategoriModel->jumlah_hak('Fisabilillah');
        $ibnu_sabil = $this->kategoriModel->jumlah_hak('Ibnu Sabil');

        if ($this->request->getVar('kategori') == 'Amilin') {
            $hak_beras = $amilin;
        } else if ($this->request->getVar('kategori') == 'Mualaf') {
            $hak_beras = $mualaf;
        } else if ($this->request->getVar('kategori') == 'Fisabilillah') {
            $hak_beras = $fisabilillah;
        } else {
            $hak_beras = $ibnu_sabil;
        }

        $this->mlainnyaModel->where('id', $this->request->getVar('id'))->set([
            'nama' => $this->request->getVar('nama'),
            'kategori' => $this->request->getVar('kategori'),
            'hak_beras' => $hak_beras,
        ])->update();

        session()->setFlashdata('pesan', 'Mustahik Warga berhasil diubah');

        return redirect()->to('/mlainnya');
    }
}
