<?php

namespace App\Modules\Auth\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
     protected $table = 'users';
     protected $primaryKey = 'id';
     protected $allowedFields = ['username', 'password', 'name', 'is_active'];
}
