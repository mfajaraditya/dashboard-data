<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;
use App\Modules\Admin\Models\TabelModel;

class Home extends BaseController
{
     public function __construct()
     {
          $this->tabelModel = new TabelModel();
     }
     public function index()
     {
          $data = [
               'title' => 'Dashboard Admin',
               'tabel' => $this->tabelModel->getTabel(),
          ];
          return view('App\Modules\Admin\Views\Dashboard', $data);
     }
}
