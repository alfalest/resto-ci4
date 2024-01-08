<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('food', 'Home::food');
$routes->get('drink', 'Home::drink');
$routes->get('other', 'Home::other');

$routes->get('dashboard', 'AdminDashboard::index');

$routes->group('/', ['filter' => 'group:user, admin'], static function ($routes) {
});

$routes->group('dashboard', ['filter' => 'group: admin'], static function ($routes) {
});
