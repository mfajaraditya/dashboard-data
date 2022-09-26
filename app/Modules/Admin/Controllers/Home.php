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

     public function update($penduduk_id)
     {
          $data = [
               'edit' => $this->tabelModel->find($penduduk_id),
               'title' => 'Edit Data'
          ];
          return view('App\Modules\Admin\Views\EditData', $data);
     }

     public function delete($penduduk_id)
     {
          $this->tabelModel->delete($penduduk_id);
          return view('App\Modules\Admin\Views\Dashboard');
     }
}
