<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('food', 'Home::food');
$routes->get('drink', 'Home::drink');
$routes->get('other', 'Home::other');
