<?php

namespace App\Modules\User\Models;

use CodeIgniter\Model;

class GrafikModel extends Model
{
     protected $table = 'data_penduduk';
     protected $primaryKey = 'penduduk_id';
     protected $allowedFields = ['jam_kerja', 'penduduk_nama'];

     public function getGrafik()
     {    
          return $this->findAll(20);
     }

     public function totalData()
     {
          return $this->countAll();
     }
}
