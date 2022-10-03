<?php

namespace App\Models;

use CodeIgniter\Model;

class GrafikModel extends Model
{
     protected $table = 'kluster_utama';
     protected $primaryKey = 'idbdt';
     protected $allowedFields = ['nama_kab', 'total_nilai', 'kluster'];
     
     public function getGrafik()
     {
          return $this->findAll(5);
     }

     public function totalData()
     {
          return $this->countAll();
     }

     public function dataTinggi()
     {
          $builder = $this->db->table('kluster_tinggi');
          $builder->like('kluster', 'Tinggi');
          $query = $builder->countAllResults();
          return $query;
     }

     public function dataMenengah()
     {
          $builder = $this->db->table('kluster_menengah');
          $builder->like('kluster', 'Menengah');
          $query = $builder->countAllResults();
          return $query;
     }

     public function dataRendah()
     {
          $builder = $this->db->table('kluster_rendah');
          $builder->like('kluster', 'Rendah');
          $query = $builder->countAllResults();
          return $query;
     }

     public function tinggiBatola()
     {
          $builder = $this->db->table('kluster_tinggi');
          $builder->like('kluster', 'Tinggi');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }

     public function menengahBatola()
     {
          $builder = $this->db->table('kluster_menengah');
          $builder->like('kluster', 'Menengah');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }

     public function rendahBatola()
     {
          $builder = $this->db->table('kluster_rendah');
          $builder->like('kluster', 'Rendah');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }

     public function tinggiHsu()
     {
          $builder = $this->db->table('kluster_tinggi');
          $builder->like('kluster', 'Tinggi');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }

     public function menengahHsu()
     {
          $builder = $this->db->table('kluster_menengah');
          $builder->like('kluster', 'Menengah');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }

     public function rendahHsu()
     {
          $builder = $this->db->table('kluster_rendah');
          $builder->like('kluster', 'Rendah');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }

     public function tinggiTanbu()
     {
          $builder = $this->db->table('kluster_tinggi');
          $builder->like('kluster', 'Tinggi');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }

     public function menengahTanbu()
     {
          $builder = $this->db->table('kluster_menengah');
          $builder->like('kluster', 'Menengah');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }

     public function rendahTanbu()
     {
          $builder = $this->db->table('kluster_rendah');
          $builder->like('kluster', 'Rendah');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
}
