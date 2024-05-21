<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
// profile
$routes->get('/beranda', 'Web::beranda');
$routes->get('/visiMisi', 'Web::visiMisi');
$routes->get('/sejarah', 'Web::sejarah');
$routes->get('/struktur', 'Web::struktur');
$routes->get('/tugas', 'Web::tugas');
$routes->get('/coba', 'Web::coba');


// untuk artikel
$routes->get('/artikel/(:segment)', 'Web::artikel/$1');

//untuk kegiatan
$routes->get('/kegiatan/(:segment)', 'Web::kegiatan/$1');


// untuk info gempa
$routes->get('/infogempaterkini', 'Web::infogempaterkini');
$routes->get('/infogempadirasakan', 'Web::infogempadirasakan');

// untuk simpan data gempa dari program python
$routes->post('/simpan', 'Web::simpan');
$routes->post('/simpan_gempapgr3', 'Web::simpan2');

//untuk informasi layanan
$routes->get('/standarLayanan', 'Web::layanan');
// $routes->post('/standarPelayanan', 'Web::layanan');
// $routes->post('/standarPelayanan', 'Web::layanan');
// $routes->post('/standarPelayanan', 'Web::layanan');


