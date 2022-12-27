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

        $this->db->table('indikator')->insertBatch([
            [
                'nama_indikator' => 'Listrik',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
            [
                'nama_indikator' => 'Gas > 3 kg',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
            [
                'nama_indikator' => 'Gas 3 kg',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
            [
                'nama_indikator' => 'Gas Kota/Biogas',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
            [
                'nama_indikator' => 'Minyak tanah',
                'nilai' => 80,
                'id_kategori' => 1,
            ],
            [
                'nama_indikator' => 'Briket',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
            [
                'nama_indikator' => 'Arang',
                'nilai' => 95,
                'id_kategori' => 1,
            ],
            [
                'nama_indikator' => 'Kayu Bakar',
                'nilai' => 90,
                'id_kategori' => 1,
            ],
            [
                'nama_indikator' => 'Tidak memasak di rumah',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
        ]);

        $this->db->table('indikator')->insertBatch([
            [
                'nama_indikator' => '450 watt',
                'nilai' => 70,
                'id_kategori' => 2,
            ],
            [
                'nama_indikator' => '900 watt',
                'nilai' => 50,
                'id_kategori' => 2,
            ],
            [
                'nama_indikator' => '1.300 watt',
                'nilai' => 0,
                'id_kategori' => 2,
            ],
            [
                'nama_indikator' => '2.200 watt',
                'nilai' => 0,
                'id_kategori' => 2,
            ],
            [
                'nama_indikator' => '> 2.200 watt',
                'nilai' => 0,
                'id_kategori' => 2,
            ],
            [
                'nama_indikator' => 'Tanpa meteran',
                'nilai' => 0,
                'id_kategori' => 2,
            ],
        ]);

        $this->db->table('indikator')->insertBatch([
            [
                'nama_indikator' => 'Sendiri',
                'nilai' => 0,
                'id_kategori' => 3,
            ],
            [
                'nama_indikator' => 'Bersama',
                'nilai' => 90,
                'id_kategori' => 3,
            ],
            [
                'nama_indikator' => 'Umum',
                'nilai' => 90,
                'id_kategori' => 3,
            ],
            [
                'nama_indikator' => 'Tidak ada',
                'nilai' => 100,
                'id_kategori' => 3,
            ],
        ]);

        $this->db->table('indikator')->insertBatch([
            [
                'nama_indikator' => 'Beton/genteng beton',
                'nilai' => 0,
                'id_kategori' => 4,
            ],
            [
                'nama_indikator' => 'Genteng keramik',
                'nilai' => 0,
                'id_kategori' => 4,
            ],
            [
                'nama_indikator' => 'Genteng metal',
                'nilai' => 0,
                'id_kategori' => 4,
            ],
            [
                'nama_indikator' => 'Genteng tanah liat',
                'nilai' => 30,
                'id_kategori' => 4,
            ],
            [
                'nama_indikator' => 'Asbes',
                'nilai' => 40,
                'id_kategori' => 4,
            ],
            [
                'nama_indikator' => 'Seng',
                'nilai' => 50,
                'id_kategori' => 4,
            ],
            [
                'nama_indikator' => 'Sirap',
                'nilai' => 60,
                'id_kategori' => 4,
            ],
            [
                'nama_indikator' => 'Bambu',
                'nilai' => 70,
                'id_kategori' => 4,
            ],
            [
                'nama_indikator' => 'Jerami/ijuk/daun-daunan/rumbia',
                'nilai' => 80,
                'id_kategori' => 4,
            ],
            [
                'nama_indikator' => 'Lainnya',
                'nilai' => 0,
                'id_kategori' => 4,
            ],
        ]);

        $this->db->table('indikator')->insertBatch([
            [
                'nama_indikator' => 'Tembok',
                'nilai' => 0,
                'id_kategori' => 5,
            ],
            [
                'nama_indikator' => 'Plesteran anyaman bambu/kawat',
                'nilai' => 40,
                'id_kategori' => 5,
            ],
            [
                'nama_indikator' => 'Kayu',
                'nilai' => 30,
                'id_kategori' => 5,
            ],
            [
                'nama_indikator' => 'Anyaman bambu',
                'nilai' => 60,
                'id_kategori' => 5,
            ],
            [
                'nama_indikator' => 'Batang kayu',
                'nilai' => 90,
                'id_kategori' => 5,
            ],
            [
                'nama_indikator' => 'Bambu',
                'nilai' => 70,
                'id_kategori' => 5,
            ],
            [
                'nama_indikator' => 'Lainnya',
                'nilai' => 0,
                'id_kategori' => 5,
            ],
        ]);

        $this->db->table('indikator')->insertBatch([
            [
                'nama_indikator' => 'Leher angsa',
                'nilai' => 0,
                'id_kategori' => 6,
            ],
            [
                'nama_indikator' => 'Plengsengan',
                'nilai' => 0,
                'id_kategori' => 6,
            ],
            [
                'nama_indikator' => 'Cemplung/cubluk',
                'nilai' => 80,
                'id_kategori' => 6,
            ],
            [
                'nama_indikator' => 'Tidak pakai',
                'nilai' => 100,
                'id_kategori' => 6,
            ],
        ]);

        $this->db->table('indikator')->insertBatch([
            [
                'nama_indikator' => 'Marmer/granit',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
            [
                'nama_indikator' => 'Keramik',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
            [
                'nama_indikator' => 'Parket/vinil/permadani',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
            [
                'nama_indikator' => 'Ubin/tegel/teraso',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
            [
                'nama_indikator' => 'Kayu/papan kualitas tinggi',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
            [
                'nama_indikator' => 'Semen/batu merah',
                'nilai' => 40,
                'id_kategori' => 7,
            ],
            [
                'nama_indikator' => 'Bambu',
                'nilai' => 90,
                'id_kategori' => 7,
            ],
            [
                'nama_indikator' => 'Kayu/papan kualitas rendah',
                'nilai' => 80,
                'id_kategori' => 7,
            ],
            [
                'nama_indikator' => 'Tanah',
                'nilai' => 100,
                'id_kategori' => 7,
            ],
            [
                'nama_indikator' => 'Lainnya',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
        ]);
    }
}
