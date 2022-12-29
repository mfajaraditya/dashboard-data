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
    $data['total_data'] = $this->kluster->countAllResults();
    $data['kemiskinan_rendah'] = $this->kluster->getNilaiCount('rendah');
    $data['kemiskinan_sedang'] = $this->kluster->getNilaiCount('sedang');
    $data['kemiskinan_tinggi'] = $this->kluster->getNilaiCount('tinggi');

    $kabupaten = $this->kabupaten->whereIn('id_kabupaten', [4, 8, 10])->findAll();

    foreach ($kabupaten as $item) {
      $data['kemiskinan'][] = [
        'nama_kabupaten' => $item['nama_kabupaten'],
        'rendah' => $this->kluster->getNilaiCount('rendah', $item['id_kabupaten']),
        'sedang' => $this->kluster->getNilaiCount('sedang', $item['id_kabupaten']),
        'tinggi' => $this->kluster->getNilaiCount('tinggi', $item['id_kabupaten']),
      ];
    }

    return view('/user/table', $data);
  }
}
