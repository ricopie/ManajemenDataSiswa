<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Route Group: Admin
$routes->group('admin', static function ($admin) {
    $admin->get('/', 'Dashboard::index');
});