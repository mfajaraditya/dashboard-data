<?php

namespace App\Models;

use CodeIgniter\Model;

class TabelModel extends Model
{
     protected $table = 'testing';
     protected $primaryKey = 'id';
     protected $allowedFields = ['nama', 'umur', 'jam_kerja'];

     public function getTabel()
     {
          return $this->findAll();
     }

     public function totalData()
     {
          return $this->countAll();
     }
}
