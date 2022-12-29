<?php

namespace App\Models;

use CodeIgniter\Model;

class KabupatenModel extends Model
{
  protected $table = 'kabupaten';
  protected $primaryKey = 'id_kabupaten';
  protected $allowedFields = ['nama_kabupaten'];
}
