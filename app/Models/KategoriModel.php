<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
        protected $table = 'kategori_mustahik';
        protected $useTimeStamps = true;
        protected $allowedFields = ['1', 'nama_kategori', 'jumlah_hak'];
        public function search($keyword)
        {
                return $this->table('kategori_mustahik')->like('nama_kategori', $keyword)->orLike('jumlah_hak_beras', $keyword)->orLike('jumlah_hak_uang');
        }
        public function getKategori($id = false)
        {
                if ($id == false) {
                        return $this->findAll();
                }

                return $this->where(['id' => $id])->first();
        }
        public function jumlah_hak($kategori)
        {
                $query = $this->select('jumlah_hak')->where('nama_kategori', $kategori)->get();
                $result = $query->getRow();
                $jumlah_hak = $result->jumlah_hak;
                return $jumlah_hak;
        }
        public function tkategori()
        {
                return $this->countAllResults();
        }
}
