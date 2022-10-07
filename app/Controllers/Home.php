<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ChartModel;
use App\Models\GrafikModel;
use App\Models\TabelModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->grafikModel = new GrafikModel();
        $this->tabelModel = new TabelModel();
        $this->chartModel = new ChartModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Kemiskinan',
            "data_kabkota" => [
                [
                    "kabkota" => "KABUPATEN BARITO KUALA",
                    'data_tinggi' => $this->grafikModel->tinggiBatola(),
                    'data_menengah' => $this->grafikModel->menengahBatola(),
                    'data_rendah' => $this->grafikModel->rendahBatola(),
                ],
                [
                    "kabkota" => "KABUPATEN HULU SUNGAI UTARA",
                    'data_tinggi' => $this->grafikModel->tinggiHsu(),
                    'data_menengah' => $this->grafikModel->menengahHsu(),
                    'data_rendah' => $this->grafikModel->rendahHsu(),
                ],
                [
                    "kabkota" => "KABUPATEN TANAH BUMBU",
                    'data_tinggi' => $this->grafikModel->tinggiTanbu(),
                    'data_menengah' => $this->grafikModel->menengahTanbu(),
                    'data_rendah' => $this->grafikModel->rendahTanbu(),
                ]
            ],
        ];
        return view('/user/home', $data);
    }

    public function jenisLantai()
    {
        $data = [
            'title' => 'Data Jenis Lantai',
            'total_data' => $this->chartModel->totaldataLantai(),
            'lantai0' => $this->chartModel->jenis_lantai_batola1(),
            'lantai1' => $this->chartModel->jenis_lantai_batola1(),
            'lantai2' => $this->chartModel->jenis_lantai_batola2(),
            'lantai3' => $this->chartModel->jenis_lantai_batola3(),
            'lantai4' => $this->chartModel->jenis_lantai_batola4(),
            'lantai5' => $this->chartModel->jenis_lantai_batola5(),
            'lantai6' => $this->chartModel->jenis_lantai_batola6(),
            'lantai7' => $this->chartModel->jenis_lantai_batola7(),
            'lantai8' => $this->chartModel->jenis_lantai_batola8(),
            'lantai9' => $this->chartModel->jenis_lantai_batola9(),
            'lantai10' => $this->chartModel->jenis_lantai_batola10(),
            'data_kabkota' => [
                [
                    'kabkota' => "KABUPATEN BARITO KUALA",
                    'data_lantai1' => $this->chartModel->jenis_lantai_batola1(),
                    'data_lantai2' => $this->chartModel->jenis_lantai_batola2(),
                    'data_lantai3' => $this->chartModel->jenis_lantai_batola3(),
                    'data_lantai4' => $this->chartModel->jenis_lantai_batola4(),
                    'data_lantai5' => $this->chartModel->jenis_lantai_batola5(),
                    'data_lantai6' => $this->chartModel->jenis_lantai_batola6(),
                    'data_lantai7' => $this->chartModel->jenis_lantai_batola7(),
                    'data_lantai8' => $this->chartModel->jenis_lantai_batola8(),
                    'data_lantai9' => $this->chartModel->jenis_lantai_batola9(),
                    'data_lantai10' => $this->chartModel->jenis_lantai_batola10(),
                ],
                [
                    'kabkota' => "KABUPATEN HULU SUNGAI UTARA",
                    'data_lantai1' => $this->chartModel->jenis_lantai_hsu1(),
                    'data_lantai2' => $this->chartModel->jenis_lantai_hsu2(),
                    'data_lantai3' => $this->chartModel->jenis_lantai_hsu3(),
                    'data_lantai4' => $this->chartModel->jenis_lantai_hsu4(),
                    'data_lantai5' => $this->chartModel->jenis_lantai_hsu5(),
                    'data_lantai6' => $this->chartModel->jenis_lantai_hsu6(),
                    'data_lantai7' => $this->chartModel->jenis_lantai_hsu7(),
                    'data_lantai8' => $this->chartModel->jenis_lantai_hsu8(),
                    'data_lantai9' => $this->chartModel->jenis_lantai_hsu9(),
                    'data_lantai10' => $this->chartModel->jenis_lantai_hsu10(),
                ],
                [
                    'kabkota' => "KABUPATEN TANAH BUMBU",
                    'data_lantai1' => $this->chartModel->jenis_lantai_tanbu1(),
                    'data_lantai2' => $this->chartModel->jenis_lantai_tanbu2(),
                    'data_lantai3' => $this->chartModel->jenis_lantai_tanbu3(),
                    'data_lantai4' => $this->chartModel->jenis_lantai_tanbu4(),
                    'data_lantai5' => $this->chartModel->jenis_lantai_tanbu5(),
                    'data_lantai6' => $this->chartModel->jenis_lantai_tanbu6(),
                    'data_lantai7' => $this->chartModel->jenis_lantai_tanbu7(),
                    'data_lantai8' => $this->chartModel->jenis_lantai_tanbu8(),
                    'data_lantai9' => $this->chartModel->jenis_lantai_tanbu9(),
                    'data_lantai10' => $this->chartModel->jenis_lantai_tanbu10(),
                ]
            ],
        ];
        return view('/user/indikator/jenis_lantai', $data);
    }

    public function jenisDinding()
    {
        $data = [
            'title' => 'Data Jenis Dinding',
            'total_data' => $this->chartModel->totaldataDinding(),
            'dinding0' => $this->chartModel->dinding0(),
            'dinding1' => $this->chartModel->dinding1(),
            'dinding2' => $this->chartModel->dinding2(),
            'dinding3' => $this->chartModel->dinding3(),
            'dinding4' => $this->chartModel->dinding4(),
            'dinding5' => $this->chartModel->dinding5(),
            'dinding6' => $this->chartModel->dinding6(),
            'dinding7' => $this->chartModel->dinding7(),
            'data_kabkota' => [
                [
                    'kabkota' => 'KABUPATEN BARITO KUALA',
                    'indikator' => [
                        'Tidak Diketahui','Tembok','Plesteran anyaman bambu/kawat','Kayu','Anyaman bambu','Batang Kayu','Bambu','Lainnya',
                    ],
                    // 'indikator0' => 'Tidak Diketahui',
                    // 'indikator1' => 'Tembok',
                    // 'indikator2' => 'Plesteran anyaman bambu/kawat',
                    // 'indikator3' => 'Kayu',
                    // 'indikator4' => 'Anyaman bambu',
                    // 'indikator5' => 'Batang Kayu',
                    // 'indikator6' => 'Bambu',
                    // 'indikator7' => 'Lainnya',
                    'data_dinding0' => $this->chartModel->jenis_dinding_batola0(),
                    'data_dinding1' => $this->chartModel->jenis_dinding_batola1(),
                    'data_dinding2' => $this->chartModel->jenis_dinding_batola2(),
                    'data_dinding3' => $this->chartModel->jenis_dinding_batola3(),
                    'data_dinding4' => $this->chartModel->jenis_dinding_batola4(),
                    'data_dinding5' => $this->chartModel->jenis_dinding_batola5(),
                    'data_dinding6' => $this->chartModel->jenis_dinding_batola6(),
                    'data_dinding7' => $this->chartModel->jenis_dinding_batola7(),
                ],
                [
                    'kabkota' => 'KABUPATEN HULU SUNGAI UTARA',
                    'data_dinding0' => $this->chartModel->jenis_dinding_hsu0(),
                    'data_dinding1' => $this->chartModel->jenis_dinding_hsu1(),
                    'data_dinding2' => $this->chartModel->jenis_dinding_hsu2(),
                    'data_dinding3' => $this->chartModel->jenis_dinding_hsu3(),
                    'data_dinding4' => $this->chartModel->jenis_dinding_hsu4(),
                    'data_dinding5' => $this->chartModel->jenis_dinding_hsu5(),
                    'data_dinding6' => $this->chartModel->jenis_dinding_hsu6(),
                    'data_dinding7' => $this->chartModel->jenis_dinding_hsu7(),
                ],
                [
                    'kabkota' => 'KABUPATEN TANAH BUMBU',
                    'data_dinding0' => $this->chartModel->jenis_dinding_tanbu0(),
                    'data_dinding1' => $this->chartModel->jenis_dinding_tanbu1(),
                    'data_dinding2' => $this->chartModel->jenis_dinding_tanbu2(),
                    'data_dinding3' => $this->chartModel->jenis_dinding_tanbu3(),
                    'data_dinding4' => $this->chartModel->jenis_dinding_tanbu4(),
                    'data_dinding5' => $this->chartModel->jenis_dinding_tanbu5(),
                    'data_dinding6' => $this->chartModel->jenis_dinding_tanbu6(),
                    'data_dinding7' => $this->chartModel->jenis_dinding_tanbu7(),
                ]
            ],
        ];
        return view('/user/indikator/jenis_dinding', $data);
    }

    public function fasilitasBab()
    {
        $data = [
            'title' => 'Data Fasilitas BAB',
            'total_data' => $this->chartModel->totalfasilitasBab(),
            'fasilitas1' => $this->chartModel->fasilitasBab1(),
            'fasilitas2' => $this->chartModel->fasilitasBab2(),
            'fasilitas3' => $this->chartModel->fasilitasBab3(),
            'fasilitas4' => $this->chartModel->fasilitasBab4(),
            'data_kabkota' => [
                [
                    'kabkota' => 'KABUPATEN BARITO KUALA',
                    'fasilitas_bab1' =>$this->chartModel->fasilitas_bab_batola1(),
                    'fasilitas_bab2' =>$this->chartModel->fasilitas_bab_batola2(),
                    'fasilitas_bab3' =>$this->chartModel->fasilitas_bab_batola3(),
                    'fasilitas_bab4' =>$this->chartModel->fasilitas_bab_batola4(),
                ],
                [
                    'kabkota' => 'KABUPATEN HULU SUNGAI UTARA',
                    'fasilitas_bab1' => $this->chartModel->fasilitas_bab_hsu1(),
                    'fasilitas_bab2' => $this->chartModel->fasilitas_bab_hsu2(),
                    'fasilitas_bab3' => $this->chartModel->fasilitas_bab_hsu3(),
                    'fasilitas_bab4' => $this->chartModel->fasilitas_bab_hsu4(),
                ],
                [
                    'kabkota' => 'KABUPATEN TANAH BUMBU',
                    'fasilitas_bab1' => $this->chartModel->fasilitas_bab_tanbu1(),
                    'fasilitas_bab2' => $this->chartModel->fasilitas_bab_tanbu2(),
                    'fasilitas_bab3' => $this->chartModel->fasilitas_bab_tanbu3(),
                    'fasilitas_bab4' => $this->chartModel->fasilitas_bab_tanbu4(),
                ]
            ],
        ];
        return view('/user/indikator/fasilitas_bab', $data);
    }
    public function sumberPenerangan()
    {
        $data = [
            'title' => 'Data Sumber Penerangan',
            'total_data' => $this->chartModel->totalsumberPenerangan(),
            'sumberPenerangan1' => $this->chartModel->sumberPenerangan1(),
            'sumberPenerangan2' => $this->chartModel->sumberPenerangan2(),
            'data_kabkota' => [
                [
                    'kabkota' => 'KABUPATEN BARITO KUALA',
                    'sumber_penerangan1' => $this->chartModel->sumber_penerangan_batola1(),
                    'sumber_penerangan2' => $this->chartModel->sumber_penerangan_batola2(),
                ],
                [
                    'kabkota' => 'KABUPATEN HULU SUNGAI UTARA',
                    'sumber_penerangan1' => $this->chartModel->sumber_penerangan_hsu1(),
                    'sumber_penerangan2' => $this->chartModel->sumber_penerangan_hsu2(),
                ],
                [
                    'kabkota' => 'KABUPATEN TANAH BUMBU',
                    'sumber_penerangan1' => $this->chartModel->sumber_penerangan_tanbu1(),
                    'sumber_penerangan2' => $this->chartModel->sumber_penerangan_tanbu2(),
                ]
            ],
        ];
        return view('/user/indikator/sumber_penerangan', $data);
    }
    public function sumberAirminum()
    {
        $data = [
            'title' => 'Data Sumber Air Minum',
            'total_data' => $this->chartModel->totalsumberAirminum(),
            'sumberAirminum1' => $this->chartModel->sumberAirminum1(),
            'sumberAirminum2' => $this->chartModel->sumberAirminum2(),
            'sumberAirminum3' => $this->chartModel->sumberAirminum3(),
            'sumberAirminum4' => $this->chartModel->sumberAirminum4(),
            'sumberAirminum5' => $this->chartModel->sumberAirminum5(),
            'sumberAirminum6' => $this->chartModel->sumberAirminum6(),
            'sumberAirminum7' => $this->chartModel->sumberAirminum7(),
            'sumberAirminum8' => $this->chartModel->sumberAirminum8(),
            'sumberAirminum9' => $this->chartModel->sumberAirminum9(),
            'sumberAirminum10' => $this->chartModel->sumberAirminum10(),
            'sumberAirminum11' => $this->chartModel->sumberAirminum11(),
            'sumberAirminum12' => $this->chartModel->sumberAirminum12(),
            'data_kabkota' => [
                [
                    'kabkota' => 'KABUPATEN BARITO KUALA',
                    'sumber_airminum1' => $this->chartModel->sumber_airminum_batola1(),
                    'sumber_airminum2' => $this->chartModel->sumber_airminum_batola2(),
                    'sumber_airminum3' => $this->chartModel->sumber_airminum_batola3(),
                    'sumber_airminum4' => $this->chartModel->sumber_airminum_batola4(),
                    'sumber_airminum5' => $this->chartModel->sumber_airminum_batola5(),
                    'sumber_airminum6' => $this->chartModel->sumber_airminum_batola6(),
                    'sumber_airminum7' => $this->chartModel->sumber_airminum_batola7(),
                    'sumber_airminum8' => $this->chartModel->sumber_airminum_batola8(),
                    'sumber_airminum9' => $this->chartModel->sumber_airminum_batola9(),
                    'sumber_airminum10' => $this->chartModel->sumber_airminum_batola10(),
                    'sumber_airminum11' => $this->chartModel->sumber_airminum_batola11(),
                    'sumber_airminum12' => $this->chartModel->sumber_airminum_batola12(),
                ],
                [
                    'kabkota' => 'KABUPATEN HULU SUNGAI UTARA',
                    'sumber_airminum1' => $this->chartModel->sumber_airminum_hsu1(),
                    'sumber_airminum2' => $this->chartModel->sumber_airminum_hsu2(),
                    'sumber_airminum3' => $this->chartModel->sumber_airminum_hsu3(),
                    'sumber_airminum4' => $this->chartModel->sumber_airminum_hsu4(),
                    'sumber_airminum5' => $this->chartModel->sumber_airminum_hsu5(),
                    'sumber_airminum6' => $this->chartModel->sumber_airminum_hsu6(),
                    'sumber_airminum7' => $this->chartModel->sumber_airminum_hsu7(),
                    'sumber_airminum8' => $this->chartModel->sumber_airminum_hsu8(),
                    'sumber_airminum9' => $this->chartModel->sumber_airminum_hsu9(),
                    'sumber_airminum10' => $this->chartModel->sumber_airminum_hsu10(),
                    'sumber_airminum11' => $this->chartModel->sumber_airminum_hsu11(),
                    'sumber_airminum12' => $this->chartModel->sumber_airminum_hsu12(),
                ],
                [
                    'kabkota' => 'KABUPATEN TANAH BUMBU',
                    'sumber_airminum1' => $this->chartModel->sumber_airminum_tanbu1(),
                    'sumber_airminum2' => $this->chartModel->sumber_airminum_tanbu2(),
                    'sumber_airminum3' => $this->chartModel->sumber_airminum_tanbu3(),
                    'sumber_airminum4' => $this->chartModel->sumber_airminum_tanbu4(),
                    'sumber_airminum5' => $this->chartModel->sumber_airminum_tanbu5(),
                    'sumber_airminum6' => $this->chartModel->sumber_airminum_tanbu6(),
                    'sumber_airminum7' => $this->chartModel->sumber_airminum_tanbu7(),
                    'sumber_airminum8' => $this->chartModel->sumber_airminum_tanbu8(),
                    'sumber_airminum9' => $this->chartModel->sumber_airminum_tanbu9(),
                    'sumber_airminum10' => $this->chartModel->sumber_airminum_tanbu10(),
                    'sumber_airminum11' => $this->chartModel->sumber_airminum_tanbu11(),
                    'sumber_airminum12' => $this->chartModel->sumber_airminum_tanbu12(),
                ]
            ],
        ];
        return view('/user/indikator/sumber_airminum', $data);
    }
    public function bahanbakarMasak()
    {
        $data = [
            'title' => 'Data Bahan Bakar Masak',
            'total_data' => $this->chartModel->totalbahanbakarMasak(),
            'bahanbakarMasak1' => $this->chartModel->bahanbakarMasak1(),
            'bahanbakarMasak2' => $this->chartModel->bahanbakarMasak2(),
            'bahanbakarMasak3' => $this->chartModel->bahanbakarMasak3(),
            'bahanbakarMasak4' => $this->chartModel->bahanbakarMasak4(),
            'bahanbakarMasak5' => $this->chartModel->bahanbakarMasak5(),
            'bahanbakarMasak6' => $this->chartModel->bahanbakarMasak6(),
            'bahanbakarMasak7' => $this->chartModel->bahanbakarMasak7(),
            'bahanbakarMasak8' => $this->chartModel->bahanbakarMasak8(),
            'bahanbakarMasak9' => $this->chartModel->bahanbakarMasak9(),
            'data_kabkota' => [
                [
                    'kabkota' => 'KABUPATEN BARITO KUALA',
                    'bahanbakar_masak1' => $this->chartModel->bahanbakar_masak_batola1(),
                    'bahanbakar_masak2' => $this->chartModel->bahanbakar_masak_batola2(),
                    'bahanbakar_masak3' => $this->chartModel->bahanbakar_masak_batola3(),
                    'bahanbakar_masak4' => $this->chartModel->bahanbakar_masak_batola4(),
                    'bahanbakar_masak5' => $this->chartModel->bahanbakar_masak_batola5(),
                    'bahanbakar_masak6' => $this->chartModel->bahanbakar_masak_batola6(),
                    'bahanbakar_masak7' => $this->chartModel->bahanbakar_masak_batola7(),
                    'bahanbakar_masak8' => $this->chartModel->bahanbakar_masak_batola8(),
                    'bahanbakar_masak9' => $this->chartModel->bahanbakar_masak_batola9(),
                ],
                [
                    'kabkota' => 'KABUPATEN HULU SUNGAI UTARA',
                    'bahanbakar_masak1' => $this->chartModel->bahanbakar_masak_hsu1(),
                    'bahanbakar_masak2' => $this->chartModel->bahanbakar_masak_hsu2(),
                    'bahanbakar_masak3' => $this->chartModel->bahanbakar_masak_hsu3(),
                    'bahanbakar_masak4' => $this->chartModel->bahanbakar_masak_hsu4(),
                    'bahanbakar_masak5' => $this->chartModel->bahanbakar_masak_hsu5(),
                    'bahanbakar_masak6' => $this->chartModel->bahanbakar_masak_hsu6(),
                    'bahanbakar_masak7' => $this->chartModel->bahanbakar_masak_hsu7(),
                    'bahanbakar_masak8' => $this->chartModel->bahanbakar_masak_hsu8(),
                    'bahanbakar_masak9' => $this->chartModel->bahanbakar_masak_hsu9(),
                ],
                [
                    'kabkota' => 'KABUPATEN TANAH BUMBU',
                    'bahanbakar_masak1' => $this->chartModel->bahanbakar_masak_tanbu1(),
                    'bahanbakar_masak2' => $this->chartModel->bahanbakar_masak_tanbu2(),
                    'bahanbakar_masak3' => $this->chartModel->bahanbakar_masak_tanbu3(),
                    'bahanbakar_masak4' => $this->chartModel->bahanbakar_masak_tanbu4(),
                    'bahanbakar_masak5' => $this->chartModel->bahanbakar_masak_tanbu5(),
                    'bahanbakar_masak6' => $this->chartModel->bahanbakar_masak_tanbu6(),
                    'bahanbakar_masak7' => $this->chartModel->bahanbakar_masak_tanbu7(),
                    'bahanbakar_masak8' => $this->chartModel->bahanbakar_masak_tanbu8(),
                    'bahanbakar_masak9' => $this->chartModel->bahanbakar_masak_tanbu9(),
                ]
            ],
        ];
        return view('/user/indikator/bahanbakar_masak', $data);
    }
    public function dayaListrik()
    {
        $data = [
            'title' => 'Data Daya Listrik',
            'total_data' => $this->chartModel->totalDayalistrik(),
            'dayaListrik1' => $this->chartModel->dayaListrik1(),
            'dayaListrik2' => $this->chartModel->dayaListrik2(),
            'dayaListrik3' => $this->chartModel->dayaListrik3(),
            'dayaListrik4' => $this->chartModel->dayaListrik4(),
            'dayaListrik5' => $this->chartModel->dayaListrik5(),
            'dayaListrik6' => $this->chartModel->dayaListrik6(),
            'data_kabkota' => [
                [
                    'kabkota' => 'KABUPATEN BARITO KUALA',
                    'daya_listrik1' => $this->chartModel->daya_listrik_batola1(),
                    'daya_listrik2' => $this->chartModel->daya_listrik_batola2(),
                    'daya_listrik3' => $this->chartModel->daya_listrik_batola3(),
                    'daya_listrik4' => $this->chartModel->daya_listrik_batola4(),
                    'daya_listrik5' => $this->chartModel->daya_listrik_batola5(),
                    'daya_listrik6' => $this->chartModel->daya_listrik_batola6(),
                ],
                [
                    'kabkota' => 'KABUPATEN HULU SUNGAI UTARA',
                    'daya_listrik1' => $this->chartModel->daya_listrik_hsu1(),
                    'daya_listrik2' => $this->chartModel->daya_listrik_hsu2(),
                    'daya_listrik3' => $this->chartModel->daya_listrik_hsu3(),
                    'daya_listrik4' => $this->chartModel->daya_listrik_hsu4(),
                    'daya_listrik5' => $this->chartModel->daya_listrik_hsu5(),
                    'daya_listrik6' => $this->chartModel->daya_listrik_hsu6(),
                ],
                [
                    'kabkota' => 'KABUPATEN TANAH BUMBU',
                    'daya_listrik1' => $this->chartModel->daya_listrik_tanbu1(),
                    'daya_listrik2' => $this->chartModel->daya_listrik_tanbu2(),
                    'daya_listrik3' => $this->chartModel->daya_listrik_tanbu3(),
                    'daya_listrik4' => $this->chartModel->daya_listrik_tanbu4(),
                    'daya_listrik5' => $this->chartModel->daya_listrik_tanbu5(),
                    'daya_listrik6' => $this->chartModel->daya_listrik_tanbu6(),
                ]
            ],
        ];
        return view('/user/indikator/daya_listrik', $data);
    }
    public function jenisAtap()
    {
        $data = [
            'title' => 'Data Jenis Atap',
            'total_data' => $this->chartModel->totaljenisAtap(),
            'jenisAtap1' => $this->chartModel->jenisAtap1(),
            'jenisAtap2' => $this->chartModel->jenisAtap2(),
            'jenisAtap3' => $this->chartModel->jenisAtap3(),
            'jenisAtap4' => $this->chartModel->jenisAtap4(),
            'jenisAtap5' => $this->chartModel->jenisAtap5(),
            'jenisAtap6' => $this->chartModel->jenisAtap6(),
            'jenisAtap7' => $this->chartModel->jenisAtap7(),
            'jenisAtap8' => $this->chartModel->jenisAtap8(),
            'jenisAtap9' => $this->chartModel->jenisAtap9(),
            'jenisAtap10' => $this->chartModel->jenisAtap10(),
            'data_kabkota' => [
                [
                    'kabkota' => 'KABUPATEN BARITO KUALA',
                    'jenis_atap1' => $this->chartModel->jenis_atap_batola1(),
                    'jenis_atap2' => $this->chartModel->jenis_atap_batola2(),
                    'jenis_atap3' => $this->chartModel->jenis_atap_batola3(),
                    'jenis_atap4' => $this->chartModel->jenis_atap_batola4(),
                    'jenis_atap5' => $this->chartModel->jenis_atap_batola5(),
                    'jenis_atap6' => $this->chartModel->jenis_atap_batola6(),
                    'jenis_atap7' => $this->chartModel->jenis_atap_batola7(),
                    'jenis_atap8' => $this->chartModel->jenis_atap_batola8(),
                    'jenis_atap9' => $this->chartModel->jenis_atap_batola9(),
                    'jenis_atap10' => $this->chartModel->jenis_atap_batola10(),
                ],
                [
                    'kabkota' => 'KABUPATEN HULU SUNGAI UTARA',
                    'jenis_atap1' => $this->chartModel->jenis_atap_hsu1(),
                    'jenis_atap2' => $this->chartModel->jenis_atap_hsu2(),
                    'jenis_atap3' => $this->chartModel->jenis_atap_hsu3(),
                    'jenis_atap4' => $this->chartModel->jenis_atap_hsu4(),
                    'jenis_atap5' => $this->chartModel->jenis_atap_hsu5(),
                    'jenis_atap6' => $this->chartModel->jenis_atap_hsu6(),
                    'jenis_atap7' => $this->chartModel->jenis_atap_hsu7(),
                    'jenis_atap8' => $this->chartModel->jenis_atap_hsu8(),
                    'jenis_atap9' => $this->chartModel->jenis_atap_hsu9(),
                    'jenis_atap10' => $this->chartModel->jenis_atap_hsu10(),
                ],
                [
                    'kabkota' => 'KABUPATEN TANAH BUMBU',
                    'jenis_atap1' => $this->chartModel->jenis_atap_tanbu1(),
                    'jenis_atap2' => $this->chartModel->jenis_atap_tanbu2(),
                    'jenis_atap3' => $this->chartModel->jenis_atap_tanbu3(),
                    'jenis_atap4' => $this->chartModel->jenis_atap_tanbu4(),
                    'jenis_atap5' => $this->chartModel->jenis_atap_tanbu5(),
                    'jenis_atap6' => $this->chartModel->jenis_atap_tanbu6(),
                    'jenis_atap7' => $this->chartModel->jenis_atap_tanbu7(),
                    'jenis_atap8' => $this->chartModel->jenis_atap_tanbu8(),
                    'jenis_atap9' => $this->chartModel->jenis_atap_tanbu9(),
                    'jenis_atap10' => $this->chartModel->jenis_atap_tanbu10(),
                ]
            ],
        ];
        return view('/user/indikator/jenis_atap', $data);
    }
    public function jenisKloset()
    {
        $data = [
            'title' => 'Data Jenis Kloset',
            'total_data' => $this->chartModel->totaljenisKloset(),
            'jenisKloset1' => $this->chartModel->jenisKloset1(),
            'jenisKloset2' => $this->chartModel->jenisKloset2(),
            'jenisKloset3' => $this->chartModel->jenisKloset3(),
            'jenisKloset4' => $this->chartModel->jenisKloset4(),
            'data_kabkota' => [
                [
                    'kabkota' => 'KABUPATEN BARITO KUALA',
                    'jenis_kloset1' => $this->chartModel->jenis_kloset_batola1(),
                    'jenis_kloset2' => $this->chartModel->jenis_kloset_batola2(),
                    'jenis_kloset3' => $this->chartModel->jenis_kloset_batola3(),
                    'jenis_kloset4' => $this->chartModel->jenis_kloset_batola4(),
                ],
                [
                    'kabkota' => 'KABUPATEN HULU SUNGAI UTARA',
                    'jenis_kloset1' => $this->chartModel->jenis_kloset_hsu1(),
                    'jenis_kloset2' => $this->chartModel->jenis_kloset_hsu2(),
                    'jenis_kloset3' => $this->chartModel->jenis_kloset_hsu3(),
                    'jenis_kloset4' => $this->chartModel->jenis_kloset_hsu4(),
                ],
                [
                    'kabkota' => 'KABUPATEN TANAH BUMBU',
                    'jenis_kloset1' => $this->chartModel->jenis_kloset_tanbu1(),
                    'jenis_kloset2' => $this->chartModel->jenis_kloset_tanbu2(),
                    'jenis_kloset3' => $this->chartModel->jenis_kloset_tanbu3(),
                    'jenis_kloset4' => $this->chartModel->jenis_kloset_tanbu4(),
                ]
            ],
        ];
        return view('/user/indikator/jenis_kloset', $data);
    }
    public function kondisiAtap()
    {
        $data = [
            'title' => 'Data Kondisi Atap',
            'total_data' => $this->chartModel->totalkondisiAtap(),
            'kondisiAtap1' => $this->chartModel->kondisiAtap1(),
            'kondisiAtap2' => $this->chartModel->kondisiAtap2(),
            'data_kabkota' => [
                [
                    'kabkota' => 'KABUPATEN BARITO KUALA',
                    'kondisi_atap1' => $this->chartModel->kondisi_atap_batola1(),
                    'kondisi_atap2' => $this->chartModel->kondisi_atap_batola2(),
                ],
                [
                    'kabkota' => 'KABUPATEN HULU SUNGAI UTARA',
                    'kondisi_atap1' => $this->chartModel->kondisi_atap_hsu1(),
                    'kondisi_atap2' => $this->chartModel->kondisi_atap_hsu2(),
                ],
                [
                    'kabkota' => 'KABUPATEN TANAH BUMBU',
                    'kondisi_atap1' => $this->chartModel->kondisi_atap_tanbu1(),
                    'kondisi_atap2' => $this->chartModel->kondisi_atap_tanbu2(),
                ]
            ],
        ];
        return view('/user/indikator/kondisi_atap', $data);
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
        return view('/user/tabel', $data);
    }
}
