<?php 
declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Core\Controller;

class DashboardController extends Controller
{
	public function index(): void 
	{
		$this->view('Admin/dashboard', []);
	}

	public function clientes(): void 
	{

	}

	public function reservas(): void 
	{
		
	}

	public function pratos(): void 
	{
		
	}

	public function pedidos(): void 
	{
		
	}
}