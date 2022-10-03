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
            "data_kabkota" => [
                [
                    "kotakab" => "KABUPATEN BARITO KUALA",
                    'data_tinggi' => $this->grafikModel->tinggiBatola(),
                    'data_menengah' => $this->grafikModel->menengahBatola(),
                    'data_rendah' => $this->grafikModel->rendahBatola(),
                ],
                [
                    "kotakab" => "KABUPATEN HULU SUNGAI UTARA",
                    'data_tinggi' => $this->grafikModel->tinggiHsu(),
                    'data_menengah' => $this->grafikModel->menengahHsu(),
                    'data_rendah' => $this->grafikModel->rendahHsu(),
                ],
                [
                    "kotakab" => "KABUPATEN TANAH BUMBU",
                    'data_tinggi' => $this->grafikModel->tinggiTanbu(),
                    'data_menengah' => $this->grafikModel->menengahTanbu(),
                    'data_rendah' => $this->grafikModel->rendahTanbu(),
                ]
            ],
        ];
        return view('/admin/home', $data);
    }

    public function tabel()
    {
        $data = [
            'title' => 'Tabel Kemiskinan',
            'total_data' => $this->grafikModel->totalData(),
            'data_tinggi' => $this->grafikModel->dataTinggi(),
            'data_menengah' => $this->grafikModel->dataMenengah(),
            'data_rendah' => $this->grafikModel->dataRendah(),
            'data_kabkota' => [
                [
                    "kotakab" => "KABUPATEN BARITO KUALA",
                    'data_tinggi' => $this->grafikModel->tinggiBatola(),
                    'data_menengah' => $this->grafikModel->menengahBatola(),
                    'data_rendah' => $this->grafikModel->rendahBatola(),
                ],
                [
                    "kotakab" => "KABUPATEN HULU SUNGAI UTARA",
                    'data_tinggi' => $this->grafikModel->tinggiHsu(),
                    'data_menengah' => $this->grafikModel->menengahHsu(),
                    'data_rendah' => $this->grafikModel->rendahHsu(),
                ],
                [
                    "kotakab" => "KABUPATEN TANAH BUMBU",
                    'data_tinggi' => $this->grafikModel->tinggiTanbu(),
                    'data_menengah' => $this->grafikModel->menengahTanbu(),
                    'data_rendah' => $this->grafikModel->rendahTanbu(),
                ]
            ]

        ];
        return view('/admin/tabel', $data);
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
