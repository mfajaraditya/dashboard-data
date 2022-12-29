<?php

namespace App\Models;

use CodeIgniter\Model;

class FasilitasModel extends Model
{
  protected $table = 'fasilitas';
  protected $primaryKey = 'id_fasilitas';
  protected $allowedFields = ['nama_fasilitas', 'nilai', 'id_kategori'];
}
