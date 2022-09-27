<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GrafikModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->grafikModel = new GrafikModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Kemiskinan',
            'total' => $this->grafikModel->getGrafik(),
        ];
        return view('/user/home', $data);
    }
}
