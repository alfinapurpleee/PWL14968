<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// Route untuk page login
$routes->get('/', 'AuthController::login');

// Route untuk form submit di page login
$routes->post('/', 'AuthController::loginPost');

// Route untuk logout
$routes->get('/logout', 'AuthController::logout');

// Route untuk halaman dashboard admin
$routes->get('/admin', 'DashboardController::admin');

// Route untuk halaman dashboard user
$routes->get('/user', 'DashboardController::user');