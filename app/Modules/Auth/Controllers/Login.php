<?php

namespace App\Modules\Auth\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
     public function index(){
          $data = array(
               'title' => 'Login'
          );
          return view('App\Modules\Auth\Views\Login', $data);
     } 
}