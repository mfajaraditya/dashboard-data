<?php

namespace App\Models;

use CodeIgniter\Model;

class GrafikModel extends Model
{
     protected $table = 'kluster';
     protected $primaryKey = 'idbdt';
     protected $allowedFields = ['nama_kab', 'kd_kab', 'persen', 'kluster'];

     public function getGrafik()
     {
          return $this->findAll(15);
     }

     public function totalData()
     {
          return $this->countAll();
     }
}
