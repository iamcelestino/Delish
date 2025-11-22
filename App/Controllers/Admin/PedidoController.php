<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Services\PedidoService;

use App\Contracts\{
    PedidoInterface, 
    ReservaInterface, 
    PratoInterface
};
use App\Core\Controller;

class PedidoController extends Controller
{
    public function __construct(
        protected ReservaInterface $reservas,
        protected PedidoService $pedido,
        protected PratoInterface $prato
    ){}

    public function index(): void
    {
        $this->view('Admin/pedidos', []);
    }

    public function create(int $id_reserva): void
    {
        $pratos = $this->prato->all();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->pedido->create($id_reserva, $_POST);
        }

        $this->view('Admin/criar_pedido', [
            'pratos' => $pratos
        ]);
    }
}