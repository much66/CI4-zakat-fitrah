<?php

namespace App\Models;

use CodeIgniter\Model;

class ZakatModel extends Model
{
        protected $table = 'muzakki';
        protected $useTimeStamps = true;
        protected $allowedFields = ['id', 'nama_muzakki', 'jumlah_tanggungan', 'keterangan'];
        public function getNama()
        {
                return $this->table('muzakki')->where('keterangan !=', 'Sudah bayar')->findAll();;
        }
        public function search($keyword)
        {
                return $this->table('muzakki')->like('nama_muzakki', $keyword)->orLike('jumlah_tanggungan', $keyword)->orLike('keterangan', $keyword);
        }
        public function getZakat($id = false)
        {
                if ($id == false) {
                        return $this->findAll();
                }
                return $this->where(['id' => $id])->first();
        }
}
