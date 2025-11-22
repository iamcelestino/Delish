<?php
declare(strict_types=1);

namespace App\Controllers\Site;
use App\Core\Controller;

class ContactoController extends Controller
{
	public function __construct(){}
	
	public function index(): void 
	{
		$this->view('Site/contacto', []);	
	}
}