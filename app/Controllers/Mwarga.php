<?php

namespace App\Controllers;

use App\Models\MwargaModel;
use App\Models\BayarModel;
use App\Models\KategoriModel;


class Mwarga extends BaseController
{
    protected $mwargaModel;
    protected $bayarModel;
    protected $kategoriModel;

    public function __construct()
    {
        $this->mwargaModel = new MwargaModel();
        $this->bayarModel = new BayarModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        // dd($this->mwargaModel);
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $muzakki = $this->mwargaModel->search($keyword);
        } else {
            $muzakki = $this->mwargaModel->getMwarga();
        }
        // $mwarga = $this->mwargaModel->findAll();
        $currentPage = $this->request->getVar('page_warga') ? $this->request->getVar('page_warga') : 1;

        $data = [
            'title' => 'Daftar Mustahik Warga',
            'mwarga' => $muzakki->paginate(6, 'warga'),
            'pager' => $this->mwargaModel->pager,
            'currentPage' => $currentPage,
            'totalberas' => $this->mwargaModel->getTotalBeras(),
        ];


        return view('mwarga/index', $data);
    }


    public function belum()
    {
        // dd($this->mwargaModel);
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $muzakki = $this->mwargaModel->search1($keyword);
        } else {
            $muzakki = $this->mwargaModel->getBelum();
        }
        // $mwarga = $this->mwargaModel->findAll();
        $currentPage = $this->request->getVar('page_warga') ? $this->request->getVar('page_warga') : 1;

        $data = [
            'title' => 'Daftar Mustahik Warga',
            'mwarga' => $muzakki->paginate(6, 'warga'),
            'pager' => $this->mwargaModel->pager,
            'currentPage' => $currentPage

        ];

        return view('mwarga/belum', $data);
    }

    public function create()
    {
        session();

        $data = [
            'title' => 'Tambah Data',
            'nama' => $this->mwargaModel->getNama(),
            'validation' => \Config\Services::validation()
        ];
        return view('mwarga/create', $data);
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

        $mampu = $this->kategoriModel->jumlah_hak('mampu'); //
        $miskin = $this->kategoriModel->jumlah_hak('miskin'); //

        if ($this->request->getVar('kategori') == 'Mampu') {
            $hak_beras = $mampu;
        } else {
            $hak_beras = $miskin;
        }

        // dd($this->request->getVar());
        // Ambil Gam
        // generate nama sampul random
        $this->mwargaModel->where('nama', $this->request->getVar('nama'))->set([
            'hak_beras' => $hak_beras,
        ])->update();

        session()->setFlashdata('pesan', 'Distribusi Berhasil!!!');

        return redirect()->to('/mwarga');
    }

    public function delete($id)
    {
        // cari gambar berdasarkan id

        // hapus gambar
        $isi = [
            'hak_beras' => 0,
        ];

        $this->mwargaModel->where('id', $id)->set($isi)->update();
        session()->setFlashdata('pesan', 'Penghapusan distribusi berhasil!!!');
        return redirect()->to('/mwarga');
    }

    public function edit($id)
    {
        session();

        $data = [
            'title' => 'Edit Data',
            'validation' => \Config\Services::validation(),
            'mwarga' => $this->mwargaModel->getZakat($id)[0],
            'nama' => $this->mwargaModel->getNama(),
        ];

        return view('mwarga/edit', $data);
    }

    public function update()
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

        $mampu = $this->kategoriModel->jumlah_hak('mampu'); //
        $miskin = $this->kategoriModel->jumlah_hak('miskin'); //

        if ($this->request->getVar('kategori') == 'Mampu') {
            $hak_beras = $mampu;
        } else {
            $hak_beras = $miskin;
        }

        $this->mwargaModel->where('id', $this->request->getVar('id'))->set([
            'nama' => $this->request->getVar('nama'),
            'kategori' => $this->request->getVar('kategori'),
            'hak_beras' => $hak_beras,
        ])->update();

        session()->setFlashdata('pesan', 'Mustahik Warga berhasil diubah');

        return redirect()->to('/mwarga');
    }
}
