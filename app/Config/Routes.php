<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('usuario', 'UsuarioController::index');
$routes->post('usuario/eliminar', 'UsuarioController::eliminar');
$routes->get('iniciarsesion', 'SesionController::index');
$routes->post('iniciarsesion/auth', 'SesionController::login');
$routes->get('admin', 'AdminController::index');
$routes->get('cliente', 'ClienteController::index');







