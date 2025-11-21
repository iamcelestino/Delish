<?php
declare(strict_types=1);

namespace App\Services;
use App\Contracts\{ItemPedidoInterface, PedidoInterface};
use Exception;

class PedidoService 
{
    public function __construct(
    	protected ItemPedidoInterface $itemPedido
    	protected PedidoInterface $pedido
    ){}

    public function create(): void 
    {
    	$this->pedido->beginTransation();

    	try {

    	} catch() {

    	}
    }
}