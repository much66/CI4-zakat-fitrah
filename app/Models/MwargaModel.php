<?php

namespace App\Models;

use CodeIgniter\Model;

class MwargaModel extends Model
{
        protected $table = 'mustahik_warga';
        protected $useTimeStamps = true;
        protected $allowedFields = ['id', 'nama', 'kategori', 'hak_beras', 'hak_uang'];

        public function search($keyword)
        {
                return $this->where('hak_beras !=', 0)->like('nama', $keyword)->orLike('kategori', $keyword);
        }
        public function search1($keyword)
        {
                return $this->where('hak_beras', 0)->like('nama', $keyword)->orLike('kategori', $keyword);
        }

        public function getBelum()
        {
                return $this->where('hak_beras', 0);
        }
        public function getNama()
        {
                return $this->where('hak_beras', 0)->findAll();
        }
        public function getMwarga()
        {
                return $this->where('hak_beras !=', 0);
        }

        public function getZakat($id = false)
        {
                if ($id == false) {
                        return $this->where('hak_beras !=', 0)->findAll();
                }
                return $this->where(['id' => $id])->where('hak_beras !=', 0)->findAll();
        }
        public function total_sudah_distribusi()
        {
                return $this->where('hak_beras !=', 0)->countAllResults();
        }
        public function tmwarga($kategori = false)
        {
                if ($kategori == false) {
                        return $this->countAllResults();
                }
                return $this->where('kategori', $kategori)->countAllResults();
        }

        public function getTotalBeras()
        {
                $query = $this->selectSum('hak_beras', 'total_beras')
                        ->get();

                $row = $query->getRow();

                return $row->total_beras;
        }
        public function totalmustahik($kategori)
        {
                return $this->where('kategori', $kategori)->count();
        }
}
