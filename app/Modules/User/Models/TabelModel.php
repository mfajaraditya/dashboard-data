<?php

namespace App\Modules\User\Models;

use CodeIgniter\Model;

class TabelModel extends Model
{
     protected $table = 'data_penduduk';
     protected $primaryKey = 'penduduk_id';
     protected $allowedFields = ['penduduk_nama', 'jam_kerja'];

     public function getTabel()
     {
          return $this->findAll(50);
     }
}

