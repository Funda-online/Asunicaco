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

$routes->get('/adminUniversites', 'TheAdminPageController::adminUniversites', ['filter' => 'auth']);
$routes->get('/adminProvinces', 'TheAdminPageController::adminProvinces', ['filter' => 'auth']);
$routes->get('/addProvince', 'TheAdminPageController::addProvince', ['filter' => 'auth']);
$routes->get('/adminActualites', 'TheAdminPageController::adminActualites', ['filter' => 'auth']);
$routes->get('/addActualite', 'TheAdminPageController::addActualite', ['filter' => 'auth']);
$routes->get('/addUniversite', 'TheAdminPageController::addUniversite', ['filter' => 'auth']);
$routes->post('/saveNews', 'TheAdminPageController::saveNews');
$routes->get('/saveNews', 'TheAdminPageController::saveNews');
$routes->get('/updateActualite/(:num)', 'TheAdminPageController::updateActualite/$1', ['filter' => 'auth']);
$routes->get('/deleteNews/(:num)', 'TheAdminPageController::deleteNews/$1');
$routes->post('/updateNews', 'TheAdminPageController::updateNews');
$routes->post('/saveUniversity', 'TheAdminPageController::saveUniversity');
$routes->post('/saveUpdateUniversity', 'TheAdminPageController::saveUpdateUniversity');
$routes->get('/updateUniversity/(:num)', 'TheAdminPageController::updateUniversity/$1', ['filter' => 'auth']);
$routes->get('/deleteUniversity/(:num)', 'TheAdminPageController::deleteUniversity/$1');

$routes->get('/thebasecontroller', 'TheBaseController::index');
$routes->get('/dbtestcontroller', 'DbTestController::index');
$routes->get('/thebasecontroller/showUsers', 'TheBaseController::showUsers');
$routes->get('/thebasecontroller/showUser/(:num)', 'TheBaseController::showUser/$1');
$routes->get('/thebasecontroller/showEvents', 'TheBaseController::showEvents');
$routes->get('/thebasecontroller/showEvent/(:num)', 'TheBaseController::showEvent/$1');
$routes->get('/thebasecontroller/showVideos', 'TheBaseController::showVideos');
$routes->get('/thebasecontroller/showVideo/(:num)', 'TheBaseController::showVideo/$1');



$routes->post('/dashboard/auth', 'TheAdminPageController::auth');
// $routes->get('/dashboard', 'TheAdminPageController::index');
$routes->get('/logout', 'TheAdminPageController::logout');
$routes->get('/hash', 'TheAdminPageController::hash');
$routes->get('/login', 'TheAdminPageController::adminLogin');
$routes->get('/dashboard', 'TheAdminPageController::dashboard', ['filter' => 'auth']);