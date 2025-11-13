<?php

require __DIR__ . '/../App/Core/helpers.php';
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Core\Router;
use App\Core\Container;
use App\Controllers\{HomeController};

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$_ENV = array_merge($_ENV, $_SERVER);

define('config', require __DIR__ . '/../App/Core/config.php');

$container = new Container();
$router = new Router($container);

$router->get('/', [HomeController::class, 'index']);

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$router->dispatch($method, $uri);




