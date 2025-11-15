<?php

require __DIR__ . '/../App/Core/helpers.php';
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Core\{Router, Config};
use App\Core\Container;
use App\Controllers\{HomeController, ReservaController};

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$_ENV = array_merge($_ENV, $_SERVER);

Config::load(__DIR__ . '/../App/Config/App.php');

$container = new Container();
$router = new Router($container);

$router->get('/', [HomeController::class, 'index']);
$router->get('/reservas', [ReservaController::class, 'index']);

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$router->dispatch($method, $uri);




