<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/acceuil', 'Home::acceuil');
$routes->get('/acceuil-page', 'Home::acceuilview');

$routes->get('/utilisateur', 'UtilisateurController::index');
$routes->get('/utilisateur/create', 'UtilisateurController::create');
$routes->post('/utilisateur/store', 'UtilisateurController::store');
$routes->get('/utilisateur/login', 'UtilisateurController::login');
$routes->post('/utilisateur/authenticate', 'UtilisateurController::authenticate');
$routes->get('/utilisateur/logout', 'UtilisateurController::logout');
