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

$routes->get('/user/dashboard', 'Home::index');
$routes->get('/user/tabel', 'Home::tabel');
$routes->add('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/login/logout', 'Login::logout');

$routes->add('/admin/dashboard', 'Admin::index', ['filter' => 'adminOnly']);
$routes->add('/admin/tabel', 'Admin::tabel', ['filter' => 'adminOnly']);

// $routes->add('login', 'App\Modules\Auth\Controllers\Login::index');
// $routes->add('login/(:any)', 'App\Modules\Auth\Controllers\Login::$1');
// $routes->add('signup', 'App\Modules\Auth\Controllers\Signup::index');
// $routes->add('signup/(:any)', 'App\Modules\Auth\Controllers\Signup::$1');

// $routes->add('admin', 'App\Modules\Admin\Controllers\Home::index');
// $routes->add('admin/(:any)', 'App\Modules\Admin\Controllers\Home::$1');
// $routes->add('testing', 'App\Modules\Admin\Controllers\Testing::index');
// $routes->add('testing/(any:)', 'App\Modules\Admin\Controllers\Testing::$1');
// $routes->add('testing/update/(:segment)', 'App\Modules\Admin\Controllers\Testing::update/$1');
// $routes->add('testing/edit/(:segment)', 'App\Modules\Admin\Controllers\Testing::edit/$1');
// $routes->add('testing/delete/(:segment)', 'App\Modules\Admin\Controllers\Testing::delete/$1');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
