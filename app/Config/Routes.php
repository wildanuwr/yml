<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/produk', 'ProdukCont::index', ['filter' => 'auth']); // Rute untuk produk
$routes->post('/produk/generate', 'ProdukCont::generate', ['filter' => 'auth']);
$routes->post('/produk/getProdukByKategori', 'ProdukCont::getProdukByKategori', ['filter' => 'auth']);
$routes->get('/kategori', 'KategoriCont::index', ['filter' => 'auth']);
$routes->post('/kategori/store', 'KategoriCont::store', ['filter' => 'auth']);
$routes->get('/loginadmin', 'AuthController::login');
$routes->post('/login-process', 'AuthController::loginProcess');
$routes->get('/logout', 'AuthController::logout', ['filter' => 'auth']);
$routes->get('/list', 'ListCont::index', ['filter' => 'auth']);
$routes->get('/list/export', 'ListCont::exportToExcel', ['filter' => 'auth']);
$routes->get('/', 'Home_Cont::home');
$routes->get('/(:any)', 'Home_Cont::index/$1'); // Rute wildcard terakhir
