<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumpulanModel extends Model
{
    protected $table = 'bayarzakat';
    protected $useTimeStamps = true;
    public function total_muzakki()
    {
        return $this->table('muzakki')->countAllResults();;
    }
    public function total_jiwa()
    {

        $jiwa = $this->table('muzakki')->selectSum('jumlah_tanggunganyangdibayar', 'jml')->get();
        $row = $jiwa->getRow();
        return $row->jml;
    }
    public function getTotalBeras()
    {
        $query = $this->table('bayarzakat')->selectSum('bayar_beras', 'total_beras')
            ->get();

        $row = $query->getRow();

        return $row->total_beras;
    }
    public function getTotalUang()
    {
        $query = $this->table('bayarzakat')->selectSum('bayar_uang', 'total_uang')
            ->get();

        $row = $query->getRow();

        return $row->total_uang;
    }
    public function zakatUang()
    {
        return $this->where('jenis_bayar', 'uang')->countAllResults();
    }
    public function zakatBeras()
    {
        return $this->where('jenis_bayar', 'beras')->countAllResults();
    }
}
