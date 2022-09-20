<?php

namespace App\Modules\Auth\Controllers;

use App\Controllers\BaseController;

use App\Modules\Auth\Models\UserModel;

class Login extends BaseController
{
     // public function __construct()
     // {
     //      $this->userModel = new UserModel();
     // }
     public function index(){
          $data = array(
               'title' => 'Login'
          );
          return view('App\Modules\Auth\Views\Login', $data);
     }

     public function logout(){
          session()->destroy();
          return redirect()->to('/');
     }
}