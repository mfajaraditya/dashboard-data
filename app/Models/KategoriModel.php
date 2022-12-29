<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
  protected $table = 'kategori_fasilitas';
  protected $primaryKey = 'id_kategori';
  protected $allowedFields = ['nama_kategori'];
}
