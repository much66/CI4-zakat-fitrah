<?php

namespace App\Models;

use CodeIgniter\Model;

class DistribusiModel extends Model
{
    protected $table = 'mustahik_warga';
    protected $useTimeStamps = true;
    public function getMustahik($mustahik)
    {
        return $this->where('kategori', $mustahik)->where('hak_beras !=', 0)->countAllResults();
    }

    public function getJumlahKg($jumlah)
    {
        $query = $this->where('kategori', $jumlah)->selectSum('hak_beras', 'total_beras')
            ->get();

        $row = $query->getRow();

        return $row->total_beras;
    }
}

class DistribusiModel1 extends Model
{
    protected $table = 'mustahik_lainnya';
    protected $useTimeStamps = true;
    public function getMustahik($mustahik)
    {
        return $this->where('kategori', $mustahik)->where('hak_beras !=', 0)->countAllResults();
    }
    public function getJumlahKg($jumlah)
    {
        $query = $this->where('kategori', $jumlah)->selectSum('hak_beras', 'total_beras')
            ->get();

        $row = $query->getRow();

        return $row->total_beras;
    }
}

class DistribusiModel2 extends Model
{
    protected $table = 'kategori_mustahik';
    protected $useTimeStamps = true;
    public function getSatuan($mustahik)
    {
        return $this->where('nama_kategori', $mustahik)->get()->getRow('jumlah_hak');
    }
}
