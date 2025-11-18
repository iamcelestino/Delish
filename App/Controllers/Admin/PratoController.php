<?php 
declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Core\Controller;
use App\Services\PratoService;

class PratoController extends Controller
{
    public function __construct(protected PratoService $prato)
    {}

    public function index(): void
    {
        $this->view('pratos', []);
    }

    public function create(): void
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->prato->create($_POST);
        }
    }

    public function update(): void
    {

    }
}
