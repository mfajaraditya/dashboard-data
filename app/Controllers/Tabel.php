<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TabelModel;

class Tabel extends BaseController
{
     public function __construct()
     {
          $this->tabelModel = new TabelModel();
     }

     public function index()
     {
          $data = [
               'title' => 'Dashboard Kemiskinan',
               'total' => $this->tabelModel->getTabel(),
               'total_data' => $this->tabelModel->totalData()
          ];
          return view('table', $data);
     }
}
