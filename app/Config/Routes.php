<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// buat database tanpa phpmyadmin

$routes->get('create-db', function () {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('dakadu')) {
        echo 'Database created!';
    }
});

$routes->get('login', 'Auth::login');

// buat manggil
$routes->addRedirect('/', 'home');

$routes->get('input_rkadpa', 'Input_rkadpa::index');
$routes->get('input_rkadpa/add', 'Input_rkadpa::create');
$routes->post('input_rkadpa', 'Input_rkadpa::store');
$routes->get('input_rkadpa/edit/(:num)', 'Input_rkadpa::edit/$1');
$routes->put('input_rkadpa/(:any)', 'Input_rkadpa::update/$1');
$routes->delete('input_rkadpa/(:segment)', 'Input_rkadpa::destroy/$1');
// $routes->post('input_rkadpa/index', 'Input_rkadpa::index');

$routes->get('input_lk', 'Input_lk::index');
$routes->get('input_lk/add', 'Input_lk::create');
$routes->post('input_lk', 'Input_lk::store');
$routes->get('input_lk/edit/(:num)', 'Input_lk::edit/$1');
$routes->put('input_lk/(:any)', 'Input_lk::update/$1');
$routes->delete('input_lk/(:segment)', 'Input_lk::destroy/$1');

$routes->get('input_dokspj', 'Input_dokspj::index');
$routes->get('input_dokspj/add', 'Input_dokspj::create');
$routes->post('input_dokspj', 'Input_dokspj::store');
$routes->get('input_dokspj/edit/(:num)', 'Input_dokspj::edit/$1');
$routes->put('input_dokspj/(:any)', 'Input_dokspj::update/$1');
$routes->delete('input_dokspj/(:segment)', 'Input_dokspj::destroy/$1');

$routes->get('input_dokpajak_ppndn', 'Input_dokpajak_ppndn::index');
$routes->get('input_dokpajak_ppndn/add', 'Input_dokpajak_ppndn::create');
$routes->post('input_dokpajak_ppndn', 'Input_dokpajak_ppndn::store');
$routes->get('input_dokpajak_ppndn/edit/(:num)', 'Input_dokpajak_ppndn::edit/$1');
$routes->put('input_dokpajak_ppndn/(:any)', 'Input_dokpajak_ppndn::update/$1');
$routes->delete('input_dokpajak_ppndn/(:segment)', 'Input_dokpajak_ppndn::destroy/$1');

$routes->get('input_dokpajak_pph', 'Input_dokpajak_pph::index');
$routes->get('input_dokpajak_pph/add', 'Input_dokpajak_pph::create');
$routes->post('input_dokpajak_pph', 'Input_dokpajak_pph::store');
$routes->get('input_dokpajak_pph/edit/(:num)', 'Input_dokpajak_pph::edit/$1');
$routes->put('input_dokpajak_pph/(:any)', 'Input_dokpajak_pph::update/$1');
$routes->delete('input_dokpajak_pph/(:segment)', 'Input_dokpajak_pph::destroy/$1');

$routes->get('input_dokpajak_pajakdaerah', 'Input_dokpajak_pajakdaerah::index');
$routes->get('input_dokpajak_pajakdaerah/add', 'Input_dokpajak_pajakdaerah::create');
$routes->post('input_dokpajak_pajakdaerah', 'Input_dokpajak_pajakdaerah::store');
$routes->get('input_dokpajak_pajakdaerah/edit/(:num)', 'Input_dokpajak_pajakdaerah::edit/$1');
$routes->put('input_dokpajak_pajakdaerah/(:any)', 'Input_dokpajak_pajakdaerah::update/$1');
$routes->delete('input_dokpajak_pajakdaerah/(:segment)', 'Input_dokpajak_pajakdaerah::destroy/$1');

// pengen ditampilin kalau login admin aja (tapi belum)

$routes->get('input_users', 'Input_users::index');
$routes->get('input_users/add', 'Input_users::create');
$routes->post('input_users', 'Input_users::store');
$routes->get('input_users/edit/(:num)', 'Input_users::edit/$1');
$routes->put('input_users/(:any)', 'Input_users::update/$1');
$routes->delete('input_users/(:segment)', 'Input_users::destroy/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}