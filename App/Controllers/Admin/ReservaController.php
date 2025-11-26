<?php
declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Core\Controller;
use App\Services\ReservaService;

class ReservaController extends Controller
{
    public function __construct(
        protected ReservaService $reservas
    ){}

    public function index(): void
    {
        $reservas = $this->reservas->getReservas();

        $this->view('Admin/reservas', [
            'reservas' => $reservas
        ]);
    }

    public function update(int $id): void 
    {
        if (!$id) {
            echo "This id doesn't exist";
        }

        $reserva = $this->reservas->getSingleReserva($id);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->reservas->update($id, $_POST);
        }

        $this->view('Admin/editar_reserva', [
            'reserva' => $reserva[0]
        ]);
    }

}