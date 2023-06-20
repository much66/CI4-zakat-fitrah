<?php

namespace App\Controllers;

use App\Models\BayarModel;
use App\Models\ZakatModel;


class Bayar extends BaseController
{
    protected $BayarModel;
    protected $ZakatModel;

    public function __construct()
    {
        $this->BayarModel = new BayarModel();
        $this->ZakatModel = new ZakatModel();
    }

    public function index()
    {

        // $bayar = $this->BayarModel->findAll();

        $data = [
            'title' => 'Daftar Mustahik Warga',
            'bayar' => $this->ZakatModel->getNama()
        ];
        return view('bayar/index', $data);
    }

    public function data()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $muzakki = $this->BayarModel->search($keyword);
        } else {
            $muzakki = $this->BayarModel;
        }
        // $bayar = $this->BayarModel->findAll();
        $currentPage = $this->request->getVar('page_warga') ? $this->request->getVar('page_warga') : 1;

        $data = [
            'title' => 'Daftar Mustahik Warga',
            'bayar' => $muzakki->paginate(6, 'warga'),
            'pager' => $this->BayarModel->pager,
            'currentPage' => $currentPage,
            'totalBeras' => $this->BayarModel->getTotalBeras(),
            'totalUang' => $this->BayarModel->getTotalUang(),
        ];


        return view('bayar/data', $data);
    }


    public function detail($id)
    {
        $data = [
            'title' => 'Detail Muzakki',
            'bayar' => $this->BayarModel->getZakat($id)

        ];

        if (empty($data['bayar'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Muzakki ' . $id . 'tidak ditemukan.');
        }

        return view('bayar/detail', $data);
    }

    public function create()
    {
        session();

        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('bayar/create', $data);
    }

    public function save()
    {
        if (!$this->validate(
            [
                'nama' => 'required',
                'jenis_bayar' => 'required',
            ]
        )) {

            // $validation = \Config\Services::validation();
            // return redirect()->to('/bayar/create')->withInput()->with('validation', $validation);
            return redirect()->to('/bayar')->withInput();
        }

        // dd($this->request->getVar());
        // Ambil Gam
        // generate nama sampul random
        if ($this->request->getPost()) {
            $selectedValue = $this->request->getVar('nama'); // Getting the selected value from the form
            $decodedValue = json_decode($selectedValue, true); // Decoding the JSON string to retrieve the values
            $nama = $decodedValue['value1']; // Retrieving value1
            $jml = $decodedValue['value2']; // Retrieving value2
            // $value1 now contains the value of "value1" from the selected option
            // $value2 now contains the value of "value2" from the selected option
            // Do what you need with these values
        }

        if ($this->request->getVar('jenis_bayar')  == 'beras') {
            $beras = 2.5 * $jml;
            $uang = "-";
        } else if ($this->request->getVar('jenis_bayar') == 'uang') {
            $beras = "-";
            $uang = 12500 * 2.5 * $jml;
        }



        $this->BayarModel->save([
            'nama_KK' => $nama,
            'jumlah_tanggungan' => $jml,
            'jenis_bayar' => $this->request->getVar('jenis_bayar'),
            'jumlah_tanggunganyangdibayar' => $jml,
            'bayar_beras' => $beras,
            'bayar_uang' => $uang,
        ]);

        // $this->ZakatModel->save([
        //     'id' => $id,
        //     'keterangan' => 'Sudah Bayar',
        // ]);

        $isi = [
            'nama_muzakki' => $nama,
            'jumlah_tanggungan' => $jml,
            'keterangan' => "Sudah Bayar",
        ];

        $this->ZakatModel->table('muzakki')->where('nama_muzakki', $nama)->set($isi)->update();

        session()->setFlashdata('pesan', 'Pembayaran Berhasil!!!');

        return redirect()->to('/bayar/index');
    }

    public function delete($id, $nama)
    {
        // cari gambar berdasarkan id
        $isi = [
            'keterangan' => "Belum Bayar",
        ];

        $this->ZakatModel->table('muzakki')->where('nama_muzakki', $nama)->set($isi)->update();
        // hapus gambar
        $this->BayarModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/bayar/data');
    }

    public function edit($id)
    {
        session();

        $data = [
            'title' => 'Edit Data',
            'validation' => \Config\Services::validation(),
            'bayar' => $this->BayarModel->getZakat($id)
        ];
        return view('bayar/edit', $data);
    }

    public function update($id)
    {

        if (!$this->validate(
            [
                'nama' => 'required',
                'jenis_bayar' => 'required',
            ]
        )) {

            // $validation = \Config\Services::validation();
            // return redirect()->to('/bayar/create')->withInput()->with('validation', $validation);
            return redirect()->to('/bayar')->withInput();
        }

        // dd($this->request->getVar());
        // Ambil Gam
        // generate nama sampul random
        if ($this->request->getVar('jenis_bayar')  == 'beras') {
            $beras = 2.5 * $this->request->getVar('jumlah_tanggungan');
            $uang = "-";
        } else if ($this->request->getVar('jenis_bayar') == 'uang') {
            $beras = "-";
            $uang = 12500 * $this->request->getVar('jumlah_tanggungan');
        }


        $this->BayarModel->save([
            'id' => $id,
            'nama_KK' => $this->request->getVar('nama'),
            'jumlah_tanggungan' => $this->request->getVar('jumlah_tanggungan'),
            'jenis_bayar' => $this->request->getVar('jenis_bayar'),
            'jumlah_tanggunganyangdibayar' => $this->request->getVar('jumlah_tanggungan'),
            'bayar_beras' => $beras,
            'bayar_uang' => $uang,
        ]);

        session()->setFlashdata('pesan', 'Pembayaran Berhasil Diupdate!!!');

        return redirect()->to('/bayar/data');
    }
}
