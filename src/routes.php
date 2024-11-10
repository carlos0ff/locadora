<?php
use core\Router;

$router = new Router();

$router->get('/dash', 'HomeController@index');

$router->get('/', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');