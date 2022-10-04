<?php

namespace App\Models;

use CodeIgniter\Model;

class ChartModel extends Model
{
     protected $table = 'data_keluarga_fasilitas';
     protected $primaryKey = 'fasilitas_id';
     protected $allowedFields = [
          'jenis_lantai_id',
          'jenis_dinding_id',
          'fasilitas_bab_id',
          'sumber_penerangan_id',
          'sumber_airminum_id',
          'bahanbakar_masak_id',
          'daya_listrik_id',
          'jenis_atap_id',
          'jenis_kloset_id',
          'kondisi_atap_id'
     ];
     
     public function totaldataDinding()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->select('jenis_dinding_id');
          $query = $builder->countAllResults();
          return $query;
     }

     public function dinding0()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '0');
          $query = $builder->countAllResults();
          return $query;
     }
     public function dinding1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '1');
          $query = $builder->countAllResults();
          return $query;
     }
     public function dinding2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '2');
          $query = $builder->countAllResults();
          return $query;
     }
     public function dinding3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '3');
          $query = $builder->countAllResults();
          return $query;
     }
     public function dinding4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '4');
          $query = $builder->countAllResults();
          return $query;
     }
     public function dinding5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '5');
          $query = $builder->countAllResults();
          return $query;
     }
     public function dinding6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '6');
          $query = $builder->countAllResults();
          return $query;
     }
     public function dinding7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '7');
          $query = $builder->countAllResults();
          return $query;
     }

     public function jenis_lantai_batola0()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '0');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_batola1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '1');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_batola2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '2');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_batola3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '3');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_batola4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '4');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_batola5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '5');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_batola6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '6');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_batola7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '7');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_batola8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '8');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_batola9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '9');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_batola10()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '10');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_batola0()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '0');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_batola1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '1');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_batola2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '2');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_batola3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '3');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_batola4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '4');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_batola5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '5');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_batola6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '6');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_batola7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '7');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_batola1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '1');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_batola2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '2');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_batola3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '3');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_batola4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '4');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_penerangan_batola1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_penerangan_id', '1');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_penerangan_batola2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_penerangan_id', '2');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '1');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '2');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '3');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '4');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '5');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '6');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '7');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '8');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '9');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola10()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '10');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola11()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '11');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_batola12()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '12');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_batola1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '1');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_batola2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '2');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_batola3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '3');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_batola4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '4');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_batola5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '5');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_batola6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '6');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_batola7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '7');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_batola8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '8');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_batola9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '9');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_batola1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '1');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_batola2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '2');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_batola3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '3');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_batola4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '4');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_batola5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '5');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_batola6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '6');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_batola1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '1');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_batola2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '2');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_batola3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '3');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_batola4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '4');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_batola5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '5');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_batola6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '6');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_batola7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '7');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_batola8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '8');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_batola9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '9');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_batola10()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '10');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_batola1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '1');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_batola2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '2');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_batola3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '3');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_batola4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '4');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function kondisi_atap_batola1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('kondisi_atap_id', '1');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function kondisi_atap_batola2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('kondisi_atap_id', '2');
          $builder->like('nama_kab', 'KABUPATEN BARITO KUALA');
          $query = $builder->countAllResults();
          return $query;
     }

     public function jenis_lantai_hsu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '1');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_hsu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '2');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_hsu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '3');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_hsu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '4');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_hsu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '5');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_hsu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '6');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_hsu7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '7');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_hsu8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '8');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_hsu9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '9');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_hsu10()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '10');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_hsu0()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '0');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_hsu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '1');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_hsu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '2');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_hsu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '3');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_hsu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '4');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_hsu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '5');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_hsu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '6');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_hsu7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '7');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_hsu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '1');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_hsu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '2');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_hsu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '3');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_hsu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '4');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_penerangan_hsu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_penerangan_id', '1');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_penerangan_hsu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_penerangan_id', '2');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '1');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '2');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '3');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '4');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '5');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '6');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '7');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '8');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '9');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu10()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '10');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu11()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '11');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_hsu12()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '12');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_hsu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '1');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_hsu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '2');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_hsu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '3');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_hsu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '4');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_hsu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '5');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_hsu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '6');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_hsu7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '7');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_hsu8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '8');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_hsu9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '9');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_hsu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '1');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_hsu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '2');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_hsu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '3');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_hsu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '4');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_hsu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '5');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_hsu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '6');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_hsu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '1');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_hsu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '2');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_hsu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '3');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_hsu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '4');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_hsu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '5');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_hsu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '6');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_hsu7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '7');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_hsu8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '8');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_hsu9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '9');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_hsu10()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '10');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_hsu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '1');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_hsu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '2');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_hsu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '3');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_hsu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '4');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function kondisi_atap_hsu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('kondisi_atap_id', '1');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }
     public function kondisi_atap_hsu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('kondisi_atap_id', '2');
          $builder->like('nama_kab', 'KABUPATEN HULU SUNGAI UTARA');
          $query = $builder->countAllResults();
          return $query;
     }



     public function jenis_lantai_tanbu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '1');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_tanbu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '2');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_tanbu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '3');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_tanbu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '4');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_tanbu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '5');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_tanbu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '6');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_tanbu7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '7');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_tanbu8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '8');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_tanbu9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '9');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_lantai_tanbu10()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_lantai_id', '10');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_tanbu0()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '0');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_tanbu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '1');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_tanbu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '2');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_tanbu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '3');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_tanbu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '4');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_tanbu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '5');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_tanbu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '6');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_dinding_tanbu7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_dinding_id', '7');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_tanbu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '1');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_tanbu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '2');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_tanbu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '3');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function fasilitas_bab_tanbu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('fasilitas_bab_id', '4');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_penerangan_tanbu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_penerangan_id', '1');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_penerangan_tanbu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_penerangan_id', '2');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '1');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '2');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '3');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '4');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '5');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '6');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '7');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '8');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '9');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu10()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '10');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu11()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '11');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function sumber_airminum_tanbu12()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('sumber_airminum_id', '12');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_tanbu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '1');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_tanbu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '2');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_tanbu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '3');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_tanbu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '4');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_tanbu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '5');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_tanbu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '6');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_tanbu7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '7');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_tanbu8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '8');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function bahanbakar_masak_tanbu9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('bahanbakar_masak_id', '9');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_tanbu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '1');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_tanbu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '2');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_tanbu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '3');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_tanbu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '4');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_tanbu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '5');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function daya_listrik_tanbu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('daya_listrik_id', '6');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_tanbu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '1');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_tanbu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '2');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_tanbu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '3');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_tanbu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '4');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_tanbu5()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '5');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_tanbu6()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '6');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_tanbu7()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '7');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_tanbu8()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '8');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_tanbu9()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '9');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_atap_tanbu10()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_atap_id', '10');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_tanbu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '1');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_tanbu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '2');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_tanbu3()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '3');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function jenis_kloset_tanbu4()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('jenis_kloset_id', '4');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function kondisi_atap_tanbu1()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('kondisi_atap_id', '1');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
     public function kondisi_atap_tanbu2()
     {
          $builder = $this->db->table('data_keluarga_fasilitas');
          $builder->like('kondisi_atap_id', '2');
          $builder->like('nama_kab', 'KABUPATEN TANAH BUMBU');
          $query = $builder->countAllResults();
          return $query;
     }
}
