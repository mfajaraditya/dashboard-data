<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FasilitasModel;
use App\Models\KabupatenModel;
use App\Models\KategoriModel;
use App\Models\KlusterModel;

class Fasilitas extends BaseController
{
  protected $kategori, $kluster, $kabupaten, $fasilitas;
  public function __construct()
  {
    $this->kategori = new KategoriModel();
    $this->kluster = new KlusterModel();
    $this->kabupaten = new KabupatenModel();
    $this->fasilitas = new FasilitasModel();
  }

  public function fasilitas($id)
  {
    $id_kabupaten = [4, 8, 10];
    $data['kategori'] = $this->kategori->find($id);
    $data['total_data'] = $this->kluster->countAllResults();
    $data['kabupaten'] = $this->kabupaten->whereIn('id_kabupaten', $id_kabupaten)->findAll();
    $data['total_fasilitas'] = $this->kluster->getFasilitasCount($id);
    $data['fasilitas'] = $this->fasilitas->where('id_kategori', $id)->findAll();
    $data['title'] = $data['kategori']['nama_kategori'];

    foreach ($data['kabupaten'] as $kabupaten) {
      $kluster = $this->kluster->getFasilitasCount($id, $kabupaten['id_kabupaten']);

      $data['kluster'][$kabupaten['nama_kabupaten']] = $kluster;
    }

    return view('/user/fasilitas', $data);
  }

  public function table()
  {
    $data['title'] = 'Tabel Kemiskinan';
    $kluster = $this->kluster->getPersentase();
    $data['kemiskinan_rendah'] = 0;
    $data['kemiskinan_sedang'] = 0;
    $data['kemiskinan_tinggi'] = 0;

    $kabupaten = $this->kabupaten->whereIn('id_kabupaten', [4, 8, 10])->findAll();

    foreach ($kabupaten as $item) {
      $data['kemiskinan'][$item['id_kabupaten']] = [
        'nama_kabupaten' => $item['nama_kabupaten'],
        'rendah' => 0,
        'sedang' => 0,
        'tinggi' => 0,
      ];
    }

    foreach ($kluster as $key) {
      if ($key['persentase'] <= 30) {
        $data['kemiskinan_rendah']++;
        $data['kemiskinan'][$key['id_kabupaten']]['rendah']++;
      } else if ($key['persentase'] > 30 && $key['persentase'] < 50) {
        $data['kemiskinan_sedang']++;
        $data['kemiskinan'][$key['id_kabupaten']]['sedang']++;
      } else if ($key['persentase'] >= 50) {
        $data['kemiskinan_tinggi']++;
        $data['kemiskinan'][$key['id_kabupaten']]['tinggi']++;
      }
    }

    $data['total_data'] = $data['kemiskinan_rendah'] + $data['kemiskinan_sedang'] + $data['kemiskinan_tinggi'];

    return view('/user/table', $data);
  }
}
