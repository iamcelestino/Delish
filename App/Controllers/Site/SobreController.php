<?php
declare(strict_types=1);

namespace App\Controllers\Site;
use App\Core\Controller;

class SobreController extends Controller
{
	public function __construct(){}
	
	public function index(): void 
	{
		$this->view('Site/sobre', []);
	}
}
