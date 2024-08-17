<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', static function () {
    return view('welcome_message');
});
$routes->environment('development', static function ($env) {
    $env->get('phpinfo', 'Home::phpInfo');
});
// Route Group: Admin
$routes->group('admin', static function ($admin) {
    $admin->get('/', 'Dashboard::index', ['as' => 'dashboard']);
    $admin->get('student', 'Student::index');
});
