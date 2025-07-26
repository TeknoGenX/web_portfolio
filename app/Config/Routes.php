<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin::dashboard');
$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('admin/login', 'Admin::login');
$routes->post('admin/authenticate', 'Admin::authenticate');
$routes->get('admin/logout', 'Admin::logout');

$routes->get('admin/portofolio', 'Admin::portofolio');
$routes->get('admin/portofolio/create', 'Admin::createPortofolio');
$routes->post('admin/portofolio/store', 'Admin::storePortofolio');
$routes->get('admin/portofolio/edit/(:num)', 'Admin::editPortofolio/$1');
$routes->post('admin/portofolio/update/(:num)', 'Admin::updatePortofolio/$1');
$routes->get('admin/portofolio/delete/(:num)', 'Admin::deletePortofolio/$1');
