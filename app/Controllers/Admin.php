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
               'total' => $this->tabelModel->getTabel(),
               'total_data' => $this->tabelModel->totalData()
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
          return view('admin/tabel', $data);
     }

     public function update($id)
     {
          $data = [
               'edit' => $this->tabelModel->find($id),
               'title' => 'Edit Data'
          ];
          return view('/admin/update', $data);
     }

     public function delete($id)
     {
          $this->tabelModel->delete($id);
          return redirect()->back();
     }

     public function edit($id)
     {
          $this->tabelModel->save([
               'id' => $id,
               'nama' => $this->request->getVar('nama'),
               'umur' => $this->request->getVar('umur'),
               'jam_kerja' => $this->request->getVar('jam_kerja'),
          ]);
          return redirect()->to('admin/tabel');
     }
}
