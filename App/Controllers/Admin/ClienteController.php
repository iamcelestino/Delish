<?php
declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Core\Controller;
use App\Services\ClienteService;

class ClienteController extends Controller
{
	public function __construct(
		protected ClienteService $cliente
	){}
	
	public function index(): void 
	{
		$cliente = $this->cliente->getAllClientes();

		print_r($cliente);

		$this->view('Admin/clientes', [
			'clientes' => $cliente
		]);
	}

	public function update(int $id): void
	{
		if(!$id) {
			echo "this id is not available";
		}

		$cliente = $this->cliente->getSingleCliente($id);

		if($_SERVER['REQUEST_METHOD'] === 'POST') {
			$this->cliente->update($id, $_POST);
			$this->redirect('admin/clinte');
		}

		$this->view('Admin/editar_cliente', [
			'cliente' => $cliente
		]);
	}

	public function delete(int $id): void 
	{
		if(!$id) {
			echo "this id is not available";
		}

		$cliente = $this->cliente->getSingleCliente($id);

		if($_SERVER['REQUEST_METHOD'] === 'POST') {
			$this->cliente->delete($id);
		}

		$this->view('Admin/deletar_cliente', [
			'cliente' => $cliente
		]);
	}

}