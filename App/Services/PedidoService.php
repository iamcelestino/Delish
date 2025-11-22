<?php
declare(strict_types=1);

namespace App\Services;
use App\Contracts\{
    ItemPedidoInterface, 
    PedidoInterface,
    PratoInterface
};
use Exception;

class PedidoService 
{
    public function __construct(
    	protected ItemPedidoInterface $itemPedido,
    	protected PedidoInterface $pedido,
        protected PratoInterface $prato
    ){}

    public function create(int $idReserva, array $pedidos): void 
    {
    	$this->pedido->beginTransation();
    	try {
            $total = 0;
            $subTotal = 0;

            $dadosPedido = [
                'id_reserva' => $idReserva,
                'status' => $pedidos['status'],
                'total' => $total
            ];

            $this->pedido->insert($dadosPedido);
            $idPedido = $this->pedido->lastInsertedId();

            print_r($idPedido);

            if(!is_numeric($idPedido)) {
                throw new Exception("Insert de pedido não retornou um ID. Recebido: " . print_r($idPedido, true));
            }

            $idPrato = $pedidos['id_prato'];
            $quantidade = (int)$pedidos['quantidade'];

            $prato = $this->prato->where('id_prato', $idPrato);

            $preco = intval($prato[0]->preco);
            $subTotal = $preco * intval($quantidade);

            $this->itemPedido->insert([
                'id_pedido' => $idPedido,
                'id_prato' => $idPrato,
                'quantidade' => $pedidos['quantidade'],
                'subtotal' => $subTotal
            ]);

            $this->pedido->update($idPedido, ['total' => $subTotal]);
            $this->pedido->commit();

    	} catch(Exception $e) {
            $this->pedido->rollBack();
            throw $e;
    	}
    }
}