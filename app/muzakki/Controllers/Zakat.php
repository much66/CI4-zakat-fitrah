<?php

namespace App\Controllers;

use App\Models\ZakatModel;

class Zakat extends BaseController
{
    protected $zakatModel;

    public function __construct()
    {
        $this->zakatModel = new ZakatModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $muzakki = $this->zakatModel->search($keyword);
        } else {
            $muzakki = $this->zakatModel;
        }
        // $zakat = $this->zakatModel->findAll();
        $currentPage = $this->request->getVar('page_warga') ? $this->request->getVar('page_warga') : 1;

        $data = [
            'title' => 'Daftar Muzakki',
            'zakat' => $muzakki->paginate(6, 'warga'),
            'pager' => $this->zakatModel->pager,
            'currentPage' => $currentPage

        ];


        return view('zakat/index', $data);
    }


    public function detail($id)
    {
        $data = [
            'title' => 'Detail Muzakki',
            'zakat' => $this->zakatModel->getZakat($id)

        ];

        if (empty($data['zakat'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Muzakki ' . $id . 'tidak ditemukan.');
        }

        return view('zakat/detail', $data);
    }

    public function create()
    {
        session();

        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('zakat/create', $data);
    }

    public function save()
    {

        if (!$this->validate(
            [
                'nama_muzakki' => 'required',
                'jumlah_tanggungan' => 'required',
            ]
        )) {

            // $validation = \Config\Services::validation();
            // return redirect()->to('/zakat/create')->withInput()->with('validation', $validation);
            return redirect()->to('/zakat/create')->withInput();
        }

        // dd($this->request->getVar());
        // Ambil Gam
        // generate nama sampul random


        $this->zakatModel->save([
            'nama_muzakki' => $this->request->getVar('nama_muzakki'),
            'jumlah_tanggungan' => $this->request->getVar('jumlah_tanggungan'),
            'keterangan' => $this->request->getVar('keterangan'),
        ]);

        session()->setFlashdata('pesan', 'Muzakki berhasil ditambah');

        return redirect()->to('/zakat');
    }

    public function delete($id)
    {
        // cari gambar berdasarkan id
        $zakat = $this->zakatModel->find($id);

        // hapus gambar
        $this->zakatModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/zakat');
    }

    public function edit($id)
    {
        session();

        $data = [
            'title' => 'Edit Data',
            'validation' => \Config\Services::validation(),
            'zakat' => $this->zakatModel->getZakat($id)
        ];
        return view('zakat/edit', $data);
    }

    public function update($id)
    {

        $zakatLama = $this->zakatModel->getZakat($this->request->getVar('id'));
        if ($zakatLama['nama_muzakki'] == $this->request->getVar('nama_muzakki')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[muzakki.nama_muzakki]';
        }

        if (!$this->validate(
            [
                'nama_muzakki' => [
                    'rules' => $rule_nama
                ],
                'jumlah_tanggungan' => 'required',
            ]
        )) {


            return redirect()->to('/zakat/edit/' . $this->request->getVar('id'))->withInput();
        }


        $this->zakatModel->save([
            'id' => $id,
            'nama_muzakki' => $this->request->getVar('nama_muzakki'),
            'jumlah_tanggungan' => $this->request->getVar('jumlah_tanggungan'),
            'keterangan' => $this->request->getVar('keterangan'),
        ]);

        session()->setFlashdata('pesan', 'Muzakki berhasil diubah');

        return redirect()->to('/zakat');
    }
}
