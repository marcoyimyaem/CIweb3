<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/showall', 'Home::showall');
$routes->get('/show/(:num)', 'Home::show/$1');