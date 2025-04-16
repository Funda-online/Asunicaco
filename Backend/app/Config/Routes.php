<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TheUserPageController::index');
$routes->get('/apropos', 'TheUserPageController::apropos');
$routes->get('/contact', 'TheUserPageController::contact');
$routes->get('/actualites', 'TheUserPageController::actualites');
$routes->get('/actualiteDetail', 'TheUserPageController::actualiteDetail');
$routes->get('/provinces', 'TheUserPageController::provinces');

$routes->get('/thebasecontroller', 'TheBaseController::index');
$routes->get('/dbtestcontroller', 'DbTestController::index');
$routes->get('/thebasecontroller/showUsers', 'TheBaseController::showUsers');
$routes->get('/thebasecontroller/showUser/(:num)', 'TheBaseController::showUser/$1');
$routes->get('/thebasecontroller/showEvents', 'TheBaseController::showEvents');
$routes->get('/thebasecontroller/showEvent/(:num)', 'TheBaseController::showEvent/$1');
$routes->get('/thebasecontroller/showVideos', 'TheBaseController::showVideos');
$routes->get('/thebasecontroller/showVideo/(:num)', 'TheBaseController::showVideo/$1');
