<?php

namespace App\Models;

use CodeIgniter\Model;

class BayarModel extends Model
{
        protected $table = 'bayarzakat';
        protected $useTimeStamps = true;
        protected $allowedFields = ['id', 'nama_KK', 'jumlah_tanggungan', 'jenis_bayar', 'jumlah_tanggunganyangdibayar', 'bayar_beras', 'bayar_uang'];
        public function search($keyword)
        {
                return $this->table('bayarzakat')->like('nama_KK', $keyword)->orLike('jenis_bayar', $keyword)->orLike('jumlah_tanggungan', $keyword);
        }
        public function getTotalBeras()
        {
                $query = $this->selectSum('bayar_beras', 'total_beras')
                        ->get();

                $row = $query->getRow();

                return $row->total_beras;
        }
        public function getTotalUang()
        {
                $query = $this->selectSum('bayar_uang', 'total_uang')
                        ->get();

                $row = $query->getRow();

                return $row->total_uang;
        }
        public function getZakat($id = false)
        {
                if ($id == false) {
                        return $this->findAll();
                }
                return $this->where(['id' => $id])->first();
        }
        public function tmwarga()
        {
                return $this->countAllResults();
        }
}
