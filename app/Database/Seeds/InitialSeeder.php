<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitialSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('kategori_fasilitas')->insertBatch([
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

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => 'Listrik',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
            [
                'nama_fasilitas' => 'Gas > 3 kg',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
            [
                'nama_fasilitas' => 'Gas 3 kg',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
            [
                'nama_fasilitas' => 'Gas Kota/Biogas',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
            [
                'nama_fasilitas' => 'Minyak tanah',
                'nilai' => 80,
                'id_kategori' => 1,
            ],
            [
                'nama_fasilitas' => 'Briket',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
            [
                'nama_fasilitas' => 'Arang',
                'nilai' => 95,
                'id_kategori' => 1,
            ],
            [
                'nama_fasilitas' => 'Kayu Bakar',
                'nilai' => 90,
                'id_kategori' => 1,
            ],
            [
                'nama_fasilitas' => 'Tidak memasak di rumah',
                'nilai' => 0,
                'id_kategori' => 1,
            ],
        ]);

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => '450 watt',
                'nilai' => 70,
                'id_kategori' => 2,
            ],
            [
                'nama_fasilitas' => '900 watt',
                'nilai' => 50,
                'id_kategori' => 2,
            ],
            [
                'nama_fasilitas' => '1.300 watt',
                'nilai' => 0,
                'id_kategori' => 2,
            ],
            [
                'nama_fasilitas' => '2.200 watt',
                'nilai' => 0,
                'id_kategori' => 2,
            ],
            [
                'nama_fasilitas' => '> 2.200 watt',
                'nilai' => 0,
                'id_kategori' => 2,
            ],
            [
                'nama_fasilitas' => 'Tanpa meteran',
                'nilai' => 0,
                'id_kategori' => 2,
            ],
        ]);

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => 'Sendiri',
                'nilai' => 0,
                'id_kategori' => 3,
            ],
            [
                'nama_fasilitas' => 'Bersama',
                'nilai' => 90,
                'id_kategori' => 3,
            ],
            [
                'nama_fasilitas' => 'Umum',
                'nilai' => 90,
                'id_kategori' => 3,
            ],
            [
                'nama_fasilitas' => 'Tidak ada',
                'nilai' => 100,
                'id_kategori' => 3,
            ],
        ]);

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => 'Beton/genteng beton',
                'nilai' => 0,
                'id_kategori' => 4,
            ],
            [
                'nama_fasilitas' => 'Genteng keramik',
                'nilai' => 0,
                'id_kategori' => 4,
            ],
            [
                'nama_fasilitas' => 'Genteng metal',
                'nilai' => 0,
                'id_kategori' => 4,
            ],
            [
                'nama_fasilitas' => 'Genteng tanah liat',
                'nilai' => 30,
                'id_kategori' => 4,
            ],
            [
                'nama_fasilitas' => 'Asbes',
                'nilai' => 40,
                'id_kategori' => 4,
            ],
            [
                'nama_fasilitas' => 'Seng',
                'nilai' => 50,
                'id_kategori' => 4,
            ],
            [
                'nama_fasilitas' => 'Sirap',
                'nilai' => 60,
                'id_kategori' => 4,
            ],
            [
                'nama_fasilitas' => 'Bambu',
                'nilai' => 70,
                'id_kategori' => 4,
            ],
            [
                'nama_fasilitas' => 'Jerami/ijuk/daun-daunan/rumbia',
                'nilai' => 80,
                'id_kategori' => 4,
            ],
            [
                'nama_fasilitas' => 'Lainnya',
                'nilai' => 0,
                'id_kategori' => 4,
            ],
        ]);

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => 'Tembok',
                'nilai' => 0,
                'id_kategori' => 5,
            ],
            [
                'nama_fasilitas' => 'Plesteran anyaman bambu/kawat',
                'nilai' => 40,
                'id_kategori' => 5,
            ],
            [
                'nama_fasilitas' => 'Kayu',
                'nilai' => 30,
                'id_kategori' => 5,
            ],
            [
                'nama_fasilitas' => 'Anyaman bambu',
                'nilai' => 60,
                'id_kategori' => 5,
            ],
            [
                'nama_fasilitas' => 'Batang kayu',
                'nilai' => 90,
                'id_kategori' => 5,
            ],
            [
                'nama_fasilitas' => 'Bambu',
                'nilai' => 70,
                'id_kategori' => 5,
            ],
            [
                'nama_fasilitas' => 'Lainnya',
                'nilai' => 0,
                'id_kategori' => 5,
            ],
        ]);

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => 'Leher angsa',
                'nilai' => 0,
                'id_kategori' => 6,
            ],
            [
                'nama_fasilitas' => 'Plengsengan',
                'nilai' => 0,
                'id_kategori' => 6,
            ],
            [
                'nama_fasilitas' => 'Cemplung/cubluk',
                'nilai' => 80,
                'id_kategori' => 6,
            ],
            [
                'nama_fasilitas' => 'Tidak pakai',
                'nilai' => 100,
                'id_kategori' => 6,
            ],
        ]);

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => 'Marmer/granit',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
            [
                'nama_fasilitas' => 'Keramik',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
            [
                'nama_fasilitas' => 'Parket/vinil/permadani',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
            [
                'nama_fasilitas' => 'Ubin/tegel/teraso',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
            [
                'nama_fasilitas' => 'Kayu/papan kualitas tinggi',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
            [
                'nama_fasilitas' => 'Semen/batu merah',
                'nilai' => 40,
                'id_kategori' => 7,
            ],
            [
                'nama_fasilitas' => 'Bambu',
                'nilai' => 90,
                'id_kategori' => 7,
            ],
            [
                'nama_fasilitas' => 'Kayu/papan kualitas rendah',
                'nilai' => 80,
                'id_kategori' => 7,
            ],
            [
                'nama_fasilitas' => 'Tanah',
                'nilai' => 100,
                'id_kategori' => 7,
            ],
            [
                'nama_fasilitas' => 'Lainnya',
                'nilai' => 0,
                'id_kategori' => 7,
            ],
        ]);

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => 'Bagus/kualitas tinggi',
                'nilai' => 0,
                'id_kategori' => 8,
            ],
            [
                'nama_fasilitas' => 'Jelek/kualitas rendah',
                'nilai' => 90,
                'id_kategori' => 8,
            ],
        ]);

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => 'Air kemasan bermerk',
                'nilai' => 0,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Air isi ulang',
                'nilai' => 0,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Ledeng meteran',
                'nilai' => 0,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Ledeng eceran',
                'nilai' => 60,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Sumur bor/pompa',
                'nilai' => 70,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Sumur terlindungi',
                'nilai' => 80,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Sumur tak terlindungi',
                'nilai' => 80,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Mata air terlindungi',
                'nilai' => 85,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Mata air tak terlindungi',
                'nilai' => 95,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Air sungai/waduk/danau',
                'nilai' => 95,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Air hujan',
                'nilai' => 95,
                'id_kategori' => 9,
            ],
            [
                'nama_fasilitas' => 'Lainnya',
                'nilai' => 0,
                'id_kategori' => 9,
            ],
        ]);

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => 'Listrik PLN',
                'nilai' => 0,
                'id_kategori' => 10,
            ],
            [
                'nama_fasilitas' => 'Listrik non PLN',
                'nilai' => 100,
                'id_kategori' => 9,
            ],
        ]);

        $this->db->table('fasilitas')->insertBatch([
            [
                'nama_fasilitas' => 'Listrik PLN',
                'nilai' => 0,
                'id_kategori' => 10,
            ],
            [
                'nama_fasilitas' => 'Listrik non PLN',
                'nilai' => 100,
                'id_kategori' => 9,
            ],
        ]);

        $this->db->table('kabupaten')->insertBatch([
            [
                'id_kabupaten' => '001',
                'nama_kabupaten' => 'KABUPATEN TANAH LAUT',
            ],
            [
                'id_kabupaten' => '002',
                'nama_kabupaten' => 'KABUPATEN KOTA BARU',
            ],
            [
                'id_kabupaten' => '003',
                'nama_kabupaten' => 'KABUPATEN BANJAR',
            ],
            [
                'id_kabupaten' => '004',
                'nama_kabupaten' => 'KABUPATEN BARITO KUALA',
            ],
            [
                'id_kabupaten' => '005',
                'nama_kabupaten' => 'KABUPATEN TAPIN',
            ],
            [
                'id_kabupaten' => '006',
                'nama_kabupaten' => 'KABUPATEN HULU SUNGAI SELATAN',
            ],
            [
                'id_kabupaten' => '007',
                'nama_kabupaten' => 'KABUPATEN HULU SUNGAI TENGAH',
            ],
            [
                'id_kabupaten' => '008',
                'nama_kabupaten' => 'KABUPATEN HULU SUNGAI UTARA',
            ],
            [
                'id_kabupaten' => '009',
                'nama_kabupaten' => 'KABUPATEN TABALONG',
            ],
            [
                'id_kabupaten' => '010',
                'nama_kabupaten' => 'KABUPATEN TANAH BUMBU',
            ],
            [
                'id_kabupaten' => '011',
                'nama_kabupaten' => 'KABUPATEN BALANGAN',
            ],
            [
                'id_kabupaten' => '071',
                'nama_kabupaten' => 'KOTA BANJARMASIN',
            ],
            [
                'id_kabupaten' => '072',
                'nama_kabupaten' => 'KOTA BANJARBARU',
            ],
        ]);
    }
}
