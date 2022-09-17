<?php

namespace App\Modules\Auth\Controllers;

use App\Controllers\BaseController;

class Signup extends BaseController
{
     public function index(){
          $data = array(
               'title' => 'Signup'
          );
          return view('App\Modules\Auth\Views\Signup', $data);
     } 
}