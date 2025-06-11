<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TheUserPageController::index');
$routes->get('/apropos', 'TheUserPageController::apropos');
$routes->get('/contact', 'TheUserPageController::contact');
$routes->get('/actualites', 'TheUserPageController::actualites');
$routes->get('/actualiteDetail/(:num)', 'TheUserPageController::actualiteDetail/$1');
$routes->get('/provinces', 'TheUserPageController::provinces');
$routes->get('/universite/(:num)', 'TheUserPageController::universite/$1');

// admin route (group)
$routes->get('/dashboard', 'TheAdminPageController::dashboard');
$routes->get('/adminUniversites', 'TheAdminPageController::adminUniversites');
$routes->get('/adminProvinces', 'TheAdminPageController::adminProvinces');
$routes->get('/adminActualites', 'TheAdminPageController::adminActualites');


$routes->get('/thebasecontroller', 'TheBaseController::index');
$routes->get('/dbtestcontroller', 'DbTestController::index');
$routes->get('/thebasecontroller/showUsers', 'TheBaseController::showUsers');
$routes->get('/thebasecontroller/showUser/(:num)', 'TheBaseController::showUser/$1');
$routes->get('/thebasecontroller/showEvents', 'TheBaseController::showEvents');
$routes->get('/thebasecontroller/showEvent/(:num)', 'TheBaseController::showEvent/$1');
$routes->get('/thebasecontroller/showVideos', 'TheBaseController::showVideos');
$routes->get('/thebasecontroller/showVideo/(:num)', 'TheBaseController::showVideo/$1');

$routes->get('/dashboard', 'Dashboard::actualites');
$routes->post('/dashboard/ajouter', 'Dashboard::ajouter');
$routes->get('/dashboard/ajouter', 'Dashboard::ajouter');
$routes->get('/dashboard/actualitesAdd', 'Dashboard::actualitesAdd');
