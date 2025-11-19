<?php 
declare(strict_types=1);

namespace App\Models;
use App\Contracts\ReservaInterface;
use App\Core\Model;

class Reserva extends Model implements ReservaInterface
{
    public function getReservas(): array|object
    {
        return $this->query(
            "SELECT 
                r.id_reserva,
                r.data_reserva,
                r.hora_reserva,
                r.pessoas,
                r.status AS status_reserva,
                
                c.id_cliente,
                c.nome AS cliente_nome,
                c.telefone AS cliente_telefone,
                c.email AS cliente_email,
                
                m.id_mesa,
                m.numero AS mesa_numero,
                m.capacidade AS mesa_capacidade,
                m.status AS mesa_status
                
            FROM reservas r
            JOIN clientes c ON c.id_cliente = r.id_cliente
            JOIN mesas m ON m.id_mesa = r.id_mesa;
            ",
            []
        );
    }

    public function getReservasPendentes(): array|object
    {
        return $this->query(
            "SELECT 
                r.*,
                c.nome AS cliente,
                m.numero AS mesa
            FROM reservas r
            JOIN clientes c ON c.id_cliente = r.id_cliente
            JOIN mesas m ON m.id_mesa = r.id_mesa
            WHERE r.status = 'pendente';
            ",
            []
        );
    }

}