<?php 
declare(strict_types=1);

namespace App\Services;
use App\Contracts\ClienteInterface;

class ClienteService
{
	public function __construct(
		protected ClienteInterface $cliente
	){}

	public function getAllClientes(): array|object
	{
		return $this->cliente->all();
	}

	public function getSingleCliente(int $id): array|object
	{
		return $this->cliente->where('id_cliente', $id);
	}

	public function update(int $id, $dadoCliente): void 
	{
		$this->cliente->update($id, $dadoCliente);
	}

	public function delete(int $id): void 
	{
		$this->cliente->delete($id);
	}
}