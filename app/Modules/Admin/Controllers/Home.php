<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
     public function index()
     {
          $data = [
               'title' => 'Dashboard Admin'
          ];
          return view('App\Modules\Admin\Views\Dashboard', $data);
     }
}
