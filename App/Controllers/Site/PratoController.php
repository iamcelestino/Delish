<?php
declare(strict_types=1);

namespace App\Controllers\Site;
use App\Core\Controller;


class PratoController extends Controller
{
	public function index(): void
	{
		$this->view('Site/pratos', []);
	}
}

