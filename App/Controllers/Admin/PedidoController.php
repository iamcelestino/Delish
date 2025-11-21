<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Contracts\{PedidoInterface, ReservaInterface, PratoInterface};
use App\Core\Controller;

class PedidoController extends Controller
{
    public function __construct(
        protected ReservaInterface $reservas,
        protected PedidoInterface $pedido,
        protected PratoInterface $prato
    ){}

    public function index(): void
    {
        $this->view('Admin/pedidos', []);
    }

    public function create(int $id_reserva): void
    {
        $pratos = $this->prato->all();
        print($id_reserva);

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
        }

        $this->view('Admin/criar_pedido', [
            'pratos' => $pratos
        ]);
    }
}