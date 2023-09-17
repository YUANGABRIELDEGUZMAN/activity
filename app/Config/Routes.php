<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/main', 'MainController::save');
$routes->get('/main', 'MainController::index');
$routes->post('/save', 'MainController::save');
$routes->get('/delete/(:any)', 'MainController::delete/$1');
