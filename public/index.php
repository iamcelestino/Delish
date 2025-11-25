<?php
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Core\{Router, Config};
use App\Core\Container;
use App\Controllers\Site\{
	HomeController,
	ContactoController, 
	SobreController,
	ReservaController as SiteReservaController, 
	PratoController as SitePratoController
};

use App\Controllers\Admin\{
	PratoController, 
	ReservaController as AdminReservaController, 
	PedidoController, DashboardController, ClienteController
};

use App\Contracts\{ReservaInterface, 
	ClienteInterface,
	MesaInterface,
	PratoInterface, 
	PedidoInterface,
	ItemPedidoInterface
};

use App\Models\{
	Cliente, Mesa, 
	Prato, Reserva, 
	Pedido, ItemPedido
};

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$_ENV = array_merge($_ENV, $_SERVER);

Config::load(__DIR__ . '/../App/Config/App.php');

$container = new Container();
$container->bind(ReservaInterface::class, Reserva::class);
$container->bind(ClienteInterface::class, Cliente::class);
$container->bind(MesaInterface::class, Mesa::class);
$container->bind(PratoInterface::class, Prato::class);
$container->bind(PedidoInterface::class, Pedido::class);
$container->bind(ItemPedidoInterface::class, ItemPedido::class);

$router = new Router($container);

//user Controllers
$router->get('/', [HomeController::class, 'index']);
$router->get('/reservas', [SiteReservaController::class, 'index']);
$router->post('/reservas/create', [SiteReservaController::class, 'create']);
$router->get('/pratos', [SitePratoController::class, 'index']);
$router->get('/sobre', [SobreController::class, 'index']);
$router->get('/contacto', [ContactoController::class, 'index']);

//admin controllers
$router->get('/admin/cliente', [ClienteController::class, 'index']);
$router->get('/admin/cliente/update/{id}', [ClienteController::class, 'update']);
$router->post('/admin/cliente/update/{id}', [ClienteController::class, 'update']);
$router->get('/admin/cliente/delete/{id}', [ClienteController::class, 'delete']);
$router->post('/admin/cliente/delete/{id}', [ClienteController::class, 'delete']);
$router->get('/admin/reservas', [AdminReservaController::class, 'index']);
$router->get('/admin/pratos', [PratoController::class, 'index']);
$router->get('/admin/prato/create', [PratoController::class, 'create']);
$router->post('/admin/pratos/create', [PratoController::class, 'create']);
$router->get('/admin/prato/update/{id}', [PratoController::class, 'update']);
$router->post('/admin/prato/update/{id}', [PratoController::class, 'update']);
$router->get('/admin/prato/delete/{id}', [PratoController::class, 'delete']);
$router->post('/admin/prato/delete/{id}', [PratoController::class, 'delete']);
$router->get('/admin/pedidos', [PedidoController::class, 'index']);
$router->get('/admin/pedidos/create/{id}', [PedidoController::class, 'create']);
$router->post('/admin/pedidos/create/{id}', [PedidoController::class, 'create']);
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$router->dispatch($method, $uri);




