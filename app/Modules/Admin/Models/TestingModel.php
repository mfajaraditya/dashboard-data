<?php

namespace App\Modules\Admin\Models;

use CodeIgniter\Model;

class TestingModel extends Model
{
     protected $table = 'testing';
     protected $primaryKey = 'id';
     protected $allowedFields = ['nama', 'umur', 'jam_kerja'];

     public function getTabel()
     {
          return $this->findAll();
     }
}
