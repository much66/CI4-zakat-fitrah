<?php

namespace App\Controllers;

use App\Models\kategoriModel;
use App\Models\mwargaModel;
use App\Models\mlainnyaModel;
use App\Models\bayarModel;

class kategori extends BaseController
{
    protected $kategoriModel;
    protected $mlainnyaModel;
    protected $mwargaModel;
    protected $bayarModel;

    public function __construct()
    {
        $this->kategoriModel = new kategoriModel();
        $this->mlainnyaModel = new mlainnyaModel();
        $this->mwargaModel = new mwargaModel();
        $this->bayarModel = new bayarModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $kategori = $this->kategoriModel->search($keyword);
        } else {
            $kategori = $this->kategoriModel;
        }
        // $kategori = $this->kategoriModel->findAll();
        $currentPage = $this->request->getVar('page_warga') ? $this->request->getVar('page_warga') : 1;

        $data = [
            'title' => 'Daftar Muzakki',
            'kategori' => $kategori->paginate(8, 'warga'),
            'pager' => $this->kategoriModel->pager,
            'currentPage' => $currentPage

        ];


        return view('kategori/index', $data);
    }


    public function detail($id)
    {
        $data = [
            'title' => 'Detail Muzakki',
            'kategori' => $this->kategoriModel->getkategori($id)

        ];

        if (empty($data['kategori'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Muzakki ' . $id . 'tidak ditemukan.');
        }

        return view('kategori/detail', $data);
    }

    public function create()
    {
        session();

        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('kategori/create', $data);
    }

    public function save()
    {
        if (!$this->validate(
            [
                'nama_kategori' => 'required',
                'jumlah_hak_beras' => 'required',
            ]
        )) {

            // $validation = \Config\Services::validation();
            // return redirect()->to('/kategori/create')->withInput()->with('validation', $validation);
            return redirect()->to('/kategori/create')->withInput();
        }


        $tberas = $this->bayarModel->getTotalBeras();
        $tuang = $this->bayarModel->getTotalUang();

        $total = $tberas + (($tuang - 200000) / 12500);

        $amilin = $this->mlainnyaModel->tmlainnya('Amilin');
        $mualaf = $this->mlainnyaModel->tmlainnya('Mualaf');
        $fisabilillah = $this->mlainnyaModel->tmlainnya('Fisabilillah');
        $ibnu_sabil = $this->mlainnyaModel->tmlainnya('Ibnu Sabil');
        $mampu = $this->mwargaModel->tmwarga('Mampu');
        $miskin = $this->mwargaModel->tmwarga('Miskin');
        $fakir = $this->mwargaModel->tmwarga('Fakir');

        $beras = $this->request->getVar('jumlah_hak_beras') / 100;

        if ($this->request->getVar('nama_kategori') == 'Amilin') {
            $hak_beras = ($beras * $total) / $amilin;
        } else if ($this->request->getVar('nama_kategori') == 'Mualaf') {
            $hak_beras = ($beras * $total / $mualaf);
        } else if ($this->request->getVar('nama_kategori') == 'Fisabilillah') {
            $hak_beras = ($beras * $total / $fisabilillah);
        } else if ($this->request->getVar('nama_kategori') == 'Mampu') {
            $hak_beras = ($beras * $total) / $mampu;
        } else if ($this->request->getVar('nama_kategori') == 'Ibnu Sabil') {
            $hak_beras = ($beras * $total / $ibnu_sabil);
        } else {
            $hak_beras = ($beras * $total / ($miskin + $fakir));
        }



        // dd($this->request->getVar());
        // Ambil Gam
        // generate nama sampul random
        $this->kategoriModel->save([
            'nama_kategori' => $this->request->getVar('nama_kategori'),
            'jumlah_hak' => $hak_beras,
        ]);

        session()->setFlashdata('pesan', 'Kategori berhasil ditambah');

        return redirect()->to('/kategori');
    }

    public function delete($id)
    {
        // hapus gambar
        $this->kategoriModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/kategori');
    }

    public function edit($id)
    {
        session();

        $data = [
            'title' => 'Edit Data',
            'validation' => \Config\Services::validation(),
            'kategori' => $this->kategoriModel->getkategori($id)
        ];
        return view('kategori/edit', $data);
    }

    public function update($id)
    {

        if (!$this->validate(
            [
                'nama_kategori' => 'required',
                'jumlah_hak_beras' => 'required',
            ]
        )) {


            return redirect()->to('/kategori/edit/' . $this->request->getVar('id'))->withInput();
        }


        $tberas = $this->bayarModel->getTotalBeras();
        $tuang = $this->bayarModel->getTotalUang();

        $total = $tberas + (($tuang - 200000) / 12500);

        $amilin = $this->mlainnyaModel->tmlainnya('Amilin');
        $mualaf = $this->mlainnyaModel->tmlainnya('Mualaf');
        $fisabilillah = $this->mlainnyaModel->tmlainnya('Fisabilillah');
        $ibnu_sabil = $this->mlainnyaModel->tmlainnya('Ibnu Sabil');
        $mampu = $this->mwargaModel->tmwarga('Mampu');
        $miskin = $this->mwargaModel->tmwarga('Miskin');
        $fakir = $this->mwargaModel->tmwarga('Fakir');

        $beras = $this->request->getVar('jumlah_hak_beras') / 100;

        if ($this->request->getVar('nama_kategori') == 'Amilin') {
            $hak_beras = ($beras * $total) / $amilin;
        } else if ($this->request->getVar('nama_kategori') == 'Mualaf') {
            $hak_beras = ($beras * $total / $mualaf);
        } else if ($this->request->getVar('nama_kategori') == 'Fisabilillah') {
            $hak_beras = ($beras * $total / $fisabilillah);
        } else if ($this->request->getVar('nama_kategori') == 'Mampu') {
            $hak_beras = ($beras * $total) / $mampu;
        } else if ($this->request->getVar('nama_kategori') == 'Ibnu Sabil') {
            $hak_beras = ($beras * $total / $ibnu_sabil);
        } else {
            $hak_beras = ($beras * $total / ($miskin + $fakir));
        }

        // dd($this->request->getVar());
        // Ambil Gam
        // generate nama sampul random
        $this->kategoriModel->where('id', $this->request->getVar('id'))->set([
            'jumlah_hak' => $hak_beras,
        ])->update();

        session()->setFlashdata('pesan', 'Data Kategori berhasil diubah');

        return redirect()->to('/kategori');
    }
}
