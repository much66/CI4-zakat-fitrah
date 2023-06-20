<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'muzakki';
    protected $useTimeStamps = true;
    public function search($keyword)
    {
        return $this->table('muzakki')->like('nama_muzakki', $keyword)->orLike('jumlah_tanggungan', $keyword);
    }
    public function tmuzakki()
    {
        return $this->countAllResults();
    }
}
