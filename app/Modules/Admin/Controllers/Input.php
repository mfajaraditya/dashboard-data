<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;

class Input extends BaseController
{
     public function index(){
          $data = [
               'title' => 'Input Page'
          ];
          return view('App\Modules\Admin\Views\Dashboard', $data);
     }
}