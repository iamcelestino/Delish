<?php
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Core\{Router, Config};
use App\Core\Container;
use App\Controllers\{HomeController, PratoController, ReservaController};
use App\Contracts\{ReservaInterface, ClienteInterface, MesaInterface, PratoInterface};
use App\Models\{Cliente, Mesa, Prato, Reserva};

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$_ENV = array_merge($_ENV, $_SERVER);

Config::load(__DIR__ . '/../App/Config/App.php');

$container = new Container();
$container->bind(ReservaInterface::class, Reserva::class);
$container->bind(ClienteInterface::class, Cliente::class);
$container->bind(MesaInterface::class, Mesa::class);
$container->bind(PratoInterface::class, Prato::class);

$router = new Router($container);
$router->get('/', [HomeController::class, 'index']);
$router->get('/reservas', [ReservaController::class, 'index']);
$router->get('/reservas/criar', [ReservaController::class, 'index']);
$router->post('/reserva/create', [ReservaController::class, 'create']);
$router->get('/prato', [PratoController::class, 'index']);
$router->post('/prato/create', [PratoController::class, 'create']);


$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$router->dispatch($method, $uri);




