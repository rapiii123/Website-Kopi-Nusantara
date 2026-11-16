<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Kopi::index');
$routes->get('/kopi', 'Kopi::index');
