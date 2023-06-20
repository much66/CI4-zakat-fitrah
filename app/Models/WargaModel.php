<?php

namespace App\Models;

use CodeIgniter\Model;

class WargaModel extends Model
{
    protected $table = 'warga';
    protected $useTimeStamps = true;
    protected $allowedFields = ['nama', 'alamat'];
    public function search($keyword)
    {
        return $this->table('warga')->like('nama', $keyword)->orLike('alamat', $keyword);
    }
}
