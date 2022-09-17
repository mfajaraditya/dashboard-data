<?php

namespace App\Modules\User\Models;

use CodeIgniter\Model;

class GrafikModel extends Model
{
     protected $table = 'testing';
     protected $primaryKey = 'id';
     protected $allowedFields = ['revenue', 'profit', 'cost', 'labelaxis'];

     public function getGrafik()
     {
          return $this->findAll();
     }
}
