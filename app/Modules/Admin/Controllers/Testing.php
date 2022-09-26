<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;
use App\Modules\Admin\Models\TestingModel;

class Testing extends BaseController
{
     public function __construct()
     {
          $this->testingModel = new TestingModel();
     }

     public function index()
     {
          $data = [
               'title' => 'Dashboard Admin',
               'tabel' => $this->testingModel->getTabel(),
          ];
          return view('App\Modules\Admin\Views\Testing', $data);
     }

     public function update($id)
     {
          $data = [
               'edit' => $this->testingModel->find($id),
               'title' => 'Edit Data'
          ];
          return view('App\Modules\Admin\Views\EditData', $data);
     }

     public function delete($id)
     {
          $this->testingModel->delete($id);
          return redirect()->to('testing/');
     }
     public function edit($id)
     {
          $this->testingModel->save([
               'id'=> $id,
               'nama' => $this->request->getVar('nama'),
               'umur' => $this->request->getVar('umur'),
               'jam_kerja' => $this->request->getVar('jam_kerja'),
          ]);
          return redirect()->to('testing/');
     }
}
