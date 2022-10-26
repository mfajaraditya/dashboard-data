<?php
namespace Config;

$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/dashboard', 'Home::index');
$routes->get('/tabel', 'Home::tabel');
$routes->get('/indikator/jenis_dinding', 'Home::jenisDinding');
$routes->get('/indikator/jenis_lantai', 'Home::jenisLantai');
$routes->get('/indikator/fasilitas_bab', 'Home::fasilitasBab');
$routes->get('/indikator/sumber_penerangan', 'Home::sumberPenerangan');
$routes->get('/indikator/sumber_airminum', 'Home::sumberAirminum');
$routes->get('/indikator/bahanbakar_masak', 'Home::bahanbakarMasak');
$routes->get('/indikator/daya_listrik', 'Home::dayaListrik');
$routes->get('/indikator/jenis_atap', 'Home::jenisAtap');
$routes->get('/indikator/jenis_kloset', 'Home::jenisKloset');
$routes->get('/indikator/kondisi_atap', 'Home::kondisiAtap');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}