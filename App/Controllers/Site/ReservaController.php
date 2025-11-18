<?php 
declare(strict_types=1);

namespace App\Controllers\Site;
use App\Core\Controller;
use App\Services\ReservaService;

class ReservaController extends Controller
{
    public function __construct(
       protected ReservaService $reserva 
    ){}
    
    public function index(): void
    {
        $this->view('reservas', []);
    }

    public function create(): void
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->reserva->create($_POST);
        }
    }

    public function update(): void
    {
        
    }
}
