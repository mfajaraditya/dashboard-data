<?php

namespace App\Models;

use CodeIgniter\Model;

class KlusterModel extends Model
{
  protected $table = 'kluster';
  protected $primaryKey = 'id_kluster';
  protected $allowedFields = ['idbdt', 'id_kabupaten'];

  public function getFasilitasCount($id_kategori = null, $id_kabupaten = null)
  {
    $builder = $this
      ->select('nilai_fasilitas.id_fasilitas, nama_fasilitas, COUNT(nilai_fasilitas.id_fasilitas) AS jumlah')
      ->join('nilai_fasilitas', 'nilai_fasilitas.idbdt = kluster.idbdt')
      ->join('fasilitas', 'fasilitas.id_fasilitas = nilai_fasilitas.id_fasilitas');

    if ($id_kategori != null) $builder->where('nilai_fasilitas.id_kategori', $id_kategori);
    if ($id_kabupaten != null) $builder->where('id_kabupaten', $id_kabupaten);

    return $builder->groupBy('nilai_fasilitas.id_fasilitas')->findAll();
  }

  public function getPersentase()
  {
    return $this->db
      ->table('nilai_fasilitas')
      ->select('kluster.idbdt, id_kabupaten, SUM(nilai) / 10 AS persentase')
      ->join('fasilitas', 'nilai_fasilitas.id_fasilitas = fasilitas.id_fasilitas')
      ->join('kluster', 'kluster.idbdt = nilai_fasilitas.idbdt')
      ->groupBy(['idbdt', 'id_kabupaten'])
      ->get()
      ->getResultArray();
  }

  public function getNilaiCount($skala, $id_kabupaten = null)
  {
    $subQuery = $this->db
      ->table('nilai_fasilitas')
      ->select('kluster.idbdt, id_kabupaten, SUM(nilai) / 10 AS persentase')
      ->join('fasilitas', 'nilai_fasilitas.id_fasilitas = fasilitas.id_fasilitas')
      ->join('kluster', 'kluster.idbdt = nilai_fasilitas.idbdt')
      ->groupBy(['idbdt', 'id_kabupaten']);

    if ($id_kabupaten != null) $subQuery->where('id_kabupaten', $id_kabupaten);

    $builder = $this->db->newQuery()->fromSubquery($subQuery, 'awe');

    switch ($skala) {
      case 'rendah':
        $builder->where('persentase <= 30');
        break;
      case 'sedang':
        $builder->where('persentase > 30 AND persentase < 50');
        break;
      case 'tinggi':
        $builder->where('persentase >= 50');
        break;
      default:
        break;
    }


    return $builder->countAllResults();
  }
}
