<?php

namespace App\Modules\User\Controllers;

use App\Controllers\BaseController;
use App\Modules\User\Models\GrafikModel;

class Tabel extends BaseController
{
     public function __construct()
     {
          $this->grafikModel = new GrafikModel();
     }

     public function index()
     {
          $data = [
               'title' => 'Dashboard Kemiskinan',
               'revenue' => $this->grafikModel->getGrafik()
          ];
          return view('App\Modules\User\Views\Tabel', $data);
     }
}
