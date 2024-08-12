<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', static function () {
    return view('welcome_message');
});

// Route Group: Admin
$routes->group('admin', static function ($admin) {
    $admin->get('/', 'Dashboard::index', ['as' => 'dashboard']);
    $admin->get('data_siswa', 'Kesiswaan::index');
});