<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/thebasecontroller', 'TheBaseController::index');
$routes->get('/dbtestcontroller', 'DbTestController::index');
$routes->get('/thebasecontroller/showUsers', 'TheBaseController::showUsers');
$routes->get('/thebasecontroller/showUser/(:num)', 'TheBaseController::showUser/$1');
$routes->get('/thebasecontroller/showEvents', 'TheBaseController::showEvents');
$routes->get('/thebasecontroller/showEvent/(:num)', 'TheBaseController::showEvent/$1');
$routes->get('/thebasecontroller/showVideos', 'TheBaseController::showVideos');
$routes->get('/thebasecontroller/showVideo/(:num)', 'TheBaseController::showVideo/$1');
