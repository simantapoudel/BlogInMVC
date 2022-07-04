<?php 

require_once '../config/config.php'; //relative path
require_once APP_ROOT . '/vendor/autoload.php'; //absolute path

use Blog\src\Application;

$app = new Application();

$app->router->get('/blog/index', 'home');

$app->router->get('/blog/user', 'user');

$app->router->get('/blog/user/login', 'login');

$app->router->get('/blog/posts', 'posts');

$app->router->get('/blog/about', 'about');

$app->router->get('/blog/contact', 'contact');

$app->router->get('/blog/user/register', 'register');

$app->run();