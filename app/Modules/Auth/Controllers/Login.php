<?php

namespace App\Modules\Auth\Controllers;

use App\Controllers\BaseController;
use App\Modules\Auth\Models\UserModel;

class Login extends BaseController
{
     protected $UserModel;
     public function __construct()
     {
          $this->userModel = new UserModel();
     }
     public function index()
     {
          helper(['form', 'url']);
          $data = array(
               'title' => 'Login'
          );
          return view('App\Modules\Auth\Views\Login', $data);
     }

     public function auth()
     {
          $session = session();
          $username = $this->request->getVar('username');
          $password = $this->request->getVar('password');
          $data = $this->userModel->where('username', $username)->first();

          if ($data) {
               $pass = $data['password'];
               if ($pass == $password) {
                    $ses_data = [
                         'id' => $data['id'],
                         'username' => $data['username'],
                         'password' => $data['password'],
                         'name' => $data['name']
                    ];
                    $session->set($ses_data);
                    return redirect()->to('admin/');
               } else {
                    $session->setFlashdata('msg', 'Password anda tidak sesuai');
                    return redirect()->back();
               }
          } else {
               $session->setFlashdata('msg', 'Username dan Password anda tidak sesuai');
               return redirect()->back();
          }
     }

     public function logout()
     {
          $session = session();
          $session->destroy();
          return redirect()->route('/');
     }
}