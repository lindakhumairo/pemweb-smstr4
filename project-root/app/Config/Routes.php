<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Page::index');

$routes->get('/', 'Page::about');

$routes->get('/books/(:segment)', 'Books::detail/$1');
//$routes->setAutoRoute(true);