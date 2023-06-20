<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class WargaSeeder extends Seeder
{
    public function run()
    {
        // for ($i = 0; $i < 60; $i++) {
        //     $data = [
        //         'hak' => "",
        //     ];

        //     $this->db->table('mustahik_warga')->where('id', 1)->update($data);
        // }
        // $data = [
        //     [
        //         'nama' => 'Fedro Rizky',
        //         'alamat'    => 'Jl. Bunderan',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama' => 'Delta putik',
        //         'alamat'    => 'Singaraja',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama' => 'Solihin',
        //         'alamat'    => 'Jl. Pangandaran',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ]
        // ];
        // $faker = \Faker\Factory::create('id_ID');
        // for ($i = 0; $i < 5; $i++) {

        //     $nama = $faker->name();

        //     $data1 = [
        //         'nama' => $nama,
        //         'kategori' => "Fisabilillah",
        //     ];
        //     $this->db->table('mustahik_lainnya')->insert($data1);
        // }
        // $data = [
        //     'nama_muzakki' => $faker->name(),
        //     'jumlah_tanggungan' => $faker->randomDigitNotNull(),
        //     'keterangan' => 'Belum Bayar'
        // ];
        //     $this->db->table('muzakki')->insert($data);
        // }
        // Simple Queries
        // $this->db->query('INSERT INTO warga (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
    }
}
