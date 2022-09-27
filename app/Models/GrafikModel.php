<?php

namespace App\Models;

use CodeIgniter\Model;

class GrafikModel extends Model
{
     protected $table = 'data_penduduk';
     protected $primaryKey = 'penduduk_id';
     protected $allowedFields = ['penduduk_nama', 'jam_kerja'];

     public function getGrafik()
     {
          return $this->findAll(15);
     }
}
