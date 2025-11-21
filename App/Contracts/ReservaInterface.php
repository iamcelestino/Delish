<?php 
declare(strict_types=1);

namespace App\Contracts;

interface ReservaInterface extends BaseInterface
{
    public function getSingleReserva(int $idReserva): array|object;
    public function getReservas(): array|object;
    public function getReservasPendentes(): array|object;
}