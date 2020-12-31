<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/hello', 'Home::hello');
$routes->get('/home', 'MenuController::home');
$routes->get('/data-siswa', 'MenuController::data_siswa');
$routes->get('/info-kegiatan', 'MenuController::info_kegiatan');
$routes->get('/registrasi', 'AuthController::registrasi');
$routes->post('/registrasi/simpan-registrasi', 'AuthController::simpanRegistrasi');
$routes->get('/login', 'AuthController::login');
$routes->post('/login/proses-login', 'AuthController::prosesLogin');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/data-siswa/tambah', 'MenuController::tambahSiswa');
$routes->post('/data-siswa/simpan', 'MenuController::simpanSiswa');
$routes->get('/data-siswa/edit/(:num)', 'MenuController::editSiswa/$1');
$routes->put('/data-siswa/update/(:num)', 'MenuController::updateSiswa/$1');
$routes->delete('/data-siswa/delete/(:num)', 'MenuController::deleteSiswa/$1');


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}