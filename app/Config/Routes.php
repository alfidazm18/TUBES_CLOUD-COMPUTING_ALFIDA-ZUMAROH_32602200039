<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::landing'); // Landing Page
$routes->get('/ppdb', 'Ppdb::index'); // Form PPDB
$routes->post('/ppdb/submit', 'Ppdb::submit'); // Submit PPDB

$routes->get('/berita', 'Home::berita'); // Halaman berita
$routes->get('/kontak', 'Home::kontak'); // Halaman kontak
$routes->get('/biaya', 'Home::biaya');   // Halaman biaya
