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
        ];
        return view('/user/home', $data);
    }

    public function tabel(){
        $data = [
            'title' => 'Dashboard Kemiskinan',
            'total' => $this->tabelModel->getTabel(),
            'total_data' => $this->tabelModel->totalData()
       ];
       return view('/user/table', $data);
    }
}
