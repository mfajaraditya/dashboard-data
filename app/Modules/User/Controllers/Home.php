<?php

namespace App\Modules\User\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController{
     public function index(){
          return view('App\Modules\User\Views\Grafik');
     } 
}
?>