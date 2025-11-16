<?php 
declare(strict_types=1);

namespace App\Services;
use App\Contracts\{ReservaInterface, ClienteInterface, MesaInterface};
use Exception;

class ReservaService
{
    public function __construct(
        protected ReservaInterface $reserva,
        protected ClienteInterface $cliente,
        protected MesaInterface $mesa
    ){}

    public function create(array $dadosReserva): void
    {
        $this->cliente->beginTransation();

        try {

            $dadosCliente = [
                'nome' => $dadosReserva['nome'] ?? null,
                'telefone' => $dadosReserva['telefone'] ?? null,
                'email' => $dadosReserva['email'] ?? null
            ];

            $this->cliente->insert($dadosCliente);
            $clienteId = $this->cliente->lastInsertedId();

            $reserva = [
                'id_cliente' => $clienteId,
                'id_mesa' => 1,
                'hora_reserva' => $dadosReserva['hora_reserva'] ?? null,
                'data_reserva' => $dadosReserva['data_reserva'] ?? null,
                'pessoas' => $dadosReserva['numero_pessoas'] ?? null
            ];

            $this->reserva->insert($reserva);
            $this->cliente->commit();

        } catch (Exception $e) {
            $this->cliente->rollBack();
            throw $e;
        }
    }

    public function update(int $id, $dadosReserva): void
    {

    }
}