<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'App\Modules\User\Controllers\Home::index');
$routes->add('tabel', 'App\Modules\User\Controllers\Tabel::index');
$routes->add('tabel/(:any)', 'App\Modules\User\Controllers\Tabel::index');

$routes->add('login', 'App\Modules\Auth\Controllers\Login::index');
$routes->add('login/(:any)', 'App\Modules\Auth\Controllers\Login::$1');
$routes->add('signup', 'App\Modules\Auth\Controllers\Signup::index');
$routes->add('signup/(:any)', 'App\Modules\Auth\Controllers\Signup::$1');

$routes->add('admin', 'App\Modules\Admin\Controllers\Home::index');
$routes->add('admin/(:any)', 'App\Modules\Admin\Controllers\Home::$1');
$routes->add('testing', 'App\Modules\Admin\Controllers\Testing::index');
$routes->add('testing/(any:)', 'App\Modules\Admin\Controllers\Testing::$1');
$routes->add('testing/update/(:segment)', 'App\Modules\Admin\Controllers\Testing::update/$1');
$routes->add('testing/edit/(:segment)', 'App\Modules\Admin\Controllers\Testing::edit/$1');
$routes->add('testing/delete/(:segment)', 'App\Modules\Admin\Controllers\Testing::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
