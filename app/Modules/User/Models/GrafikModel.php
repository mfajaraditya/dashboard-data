<?php

namespace App\Modules\User\Models;

use CodeIgniter\Model;

class GrafikModel extends Model
{
     protected $table = 'uti_daya_listrik';
     protected $primaryKey = 'daya_listrik_id';
     protected $allowedFields = 'daya_listrik_nama';

     public function getGrafik()
     {
          return $this->findAll();
     }
}
