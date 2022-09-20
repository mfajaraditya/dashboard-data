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
                    return redirect()->route('/');
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

          // if(isset($_POST['submit'])){
          //      $username = $this->request->getVar('username');
          //      $password = $this->request->getVar('password');

          //      $model = new UserModel();
          //      $query = $model->cek_login($username);

          //      if($query->getNumRows() > 0){
          //           $row = $query->getRowArray();

          //           $pass = $row["password"];

          //           if(password_verify($password, $pass)){
          //                $session_data = array (
          //                     "sess_username" => $username,
          //                     "is_active" => TRUE
          //                );

          //                session()->set($session_data);

          //                return redirect()->to('App\Modules\Admin\Views\Dashboard');
          //           } else {
          //                session()->setFlashdata('message', 'Username dan Password anda tidak sesuai');
          //           }
          //      } else {
          //           session()->setFlashdata('message', 'Periksa kembali Username dan Password anda!');
          //      }