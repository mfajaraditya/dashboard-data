<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GrafikModel;
use App\Models\TabelModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->grafikModel = new GrafikModel();
        $this->tabelModel = new TabelModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Kemiskinan',
            'total' => $this->grafikModel->getGrafik(),
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
        return view('/user/home', $data);
    }

    public function tabel()
    {
        $data = [
            'title' => 'Dashboard Kemiskinan',
            'total' => $this->tabelModel->getTabel(),
            'total_data' => $this->tabelModel->totalData()
        ];
        return view('/user/tabel', $data);
    }
}
