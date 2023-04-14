<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
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
$routes->get('/', 'Home::index');
$routes->get('/Katalog', 'Home::katalog');
$routes->get('/Katalog/(:any)', 'Home::kategori/$1');
$routes->get('/Detail/(:any)', 'Home::detail_barang/$1');
$routes->get('/Keranjang', 'Home::keranjang');
$routes->post('add_item', 'Home::add_item');
$routes->get('remove_item/(:any)', 'Home::remove_item/$1');
$routes->get('clear_cart', 'Home::clear_cart');
$routes->post('update_cart', 'Home::update_cart');

$routes->group('Auth', ['namespace' => 'App\Controllers'], static function ($routes) {
    $routes->get('Admin', 'AdminLogin::index');
    $routes->post('Admin', 'AdminLogin::auth');
    $routes->get('Admin/Destroy', 'AdminLogin::logout');
    $routes->get('User', 'UserLogin::index');
    $routes->post('User', 'UserLogin::auth');
    $routes->get('User/Destroy', 'UserLogin::logout');
    $routes->get('User/Registration', 'UserLogin::registration');
    $routes->post('User/Registration', 'UserLogin::signup');
});

$routes->group('U', ['namespace' => 'App\Controllers'], static function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('Transaksi', 'AdminController::transaksi');
    $routes->resource('Admin');
    $routes->resource('Barang');
    $routes->resource('KategoriBarang');
    $routes->get('User', 'AdminController::user');
    $routes->get('Piutang', 'AdminController::piutang');
    $routes->get('Settings', 'AdminController::settings');
    $routes->post('Settings', 'AdminController::save_settings');
    $routes->get('Transaksi/(:any)', 'AdminController::invoice/$1');
    $routes->get('Validasi/(:any)', 'AdminController::validasi_pembayaran/$1');
});

$routes->group('CustPanel', ['namespace' => 'App\Controllers'], static function ($routes) {
    $routes->post('checkout', 'UserController::checkout');
    $routes->get('invoice/(:any)', 'UserController::invoice/$1');
    $routes->get('transaksi', 'UserController::transaksi');
    $routes->post('upload/(:any)', 'UserController::upload/$1');
    $routes->get('informasi', 'UserController::informasi');
    $routes->post('informasi/(:any)', 'UserController::update_informasi/$1');
    $routes->get('/', 'UserController::index');
    $routes->resource('Testimoni');
    // $routes->get('/TestimoniNew/(:any)', 'UserController::testimoni_add/$1');
    // $routes->post('/TestimoniNew', 'UserController::testimoni_save');
    // $routes->get('/Testimoni', 'UserController::testimoni');
    // $routes->get('/Testimoni/(:any)', 'UserController::testimoni_edit/$1');
    // $routes->post('/Testimoni/(:any)', 'UserController::testimoni_update');
});

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
