<?php 
declare(strict_types=1);
namespace App\Services;
use App\Contracts\ReservaInterface;

class ReservaService
{
    public function __construct(
        protected ReservaInterface $reserva
    ){}

    public function create(array $dadosReserva): void
    {
    }

    public function update(int $id, $dadosReserva): void
    {

    }
}