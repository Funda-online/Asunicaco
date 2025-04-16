<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TheUserPageController::index');
$routes->get('/apropos', 'TheUserPageController::apropos');
$routes->get('/contact', 'TheUserPageController::contact');
$routes->get('/actualites', 'TheUserPageController::actualites');
$routes->get('/provinces', 'TheUserPageController::provinces');