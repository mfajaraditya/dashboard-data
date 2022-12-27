<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitialSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('kategori_indikator')->insertBatch([
            [
                'id_kategori' => 1,
                'nama_kategori' => 'Bahan Bakar Masak',
            ],
            [
                'id_kategori' => 2,
                'nama_kategori' => 'Daya Listrik',
            ],
            [
                'id_kategori' => 3,
                'nama_kategori' => 'Fasilitas BAB',
            ],
            [
                'id_kategori' => 4,
                'nama_kategori' => 'Jenis Atap',
            ],
            [
                'id_kategori' => 5,
                'nama_kategori' => 'Jenis Dinding',
            ],
            [
                'id_kategori' => 6,
                'nama_kategori' => 'Jenis Kloset',
            ],
            [
                'id_kategori' => 7,
                'nama_kategori' => 'Jenis Lantai',
            ],
            [
                'id_kategori' => 8,
                'nama_kategori' => 'Kondisi Atap',
            ],
            [
                'id_kategori' => 9,
                'nama_kategori' => 'Sumber Air Minum',
            ],
            [
                'id_kategori' => 10,
                'nama_kategori' => 'Sumber Penerangan',
            ],
        ]);

        $this->db->table('')->insertBatch([
            [
                'nama_indikator' => 'Listrik',
                'nilai' => 0,
            ],
            [
                'nama_indikator' => 'Gas > 3kg',
                'nilai' => 0,
            ],
            [
                'nama_indikator' => 'Gas 3kg',
                'nilai' => 0,
            ],
            [
                'nama_indikator' => 'Gas Kota/Biogas',
                'nilai' => 0,
            ],
            [
                'nama_indikator' => 'Minyak Tanah',
                'nilai' => 80,
            ],
            [
                'nama_indikator' => 'Listrik',
                'nilai' => 0,
            ],
            [
                'nama_indikator' => 'Listrik',
                'nilai' => 0,
            ],
            [
                'nama_indikator' => 'Listrik',
                'nilai' => 0,
            ],
        ]);
    }
}
