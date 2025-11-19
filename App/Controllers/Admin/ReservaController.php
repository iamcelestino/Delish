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
        print_r($reservas);

        $this->view('admin/reservas', [
            'reservas' => $reservas
        ]);
    }
}