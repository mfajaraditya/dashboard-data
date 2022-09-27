<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TabelModel;
use App\Models\GrafikModel;

class Admin extends BaseController
{
     public function __construct()
     {
          $this->tabelModel = new TabelModel();
          $this->grafikModel = new GrafikModel();
     }
     public function index()
     {
          $data = [
               'title' => 'Dashboard Kemiskinan',
               'total' => $this->grafikModel->getGrafik(),
           ];
           return view('/admin/home', $data);
     }

     public function tabel()
     {
          $data = [
               'title' => 'Dashboard Kemiskinan',
               'total' => $this->tabelModel->getTabel(),
               'total_data' => $this->tabelModel->totalData()
          ];
          return view('/admin/tabel', $data);
     }
}
