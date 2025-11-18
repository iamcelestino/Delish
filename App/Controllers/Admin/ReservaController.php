<?php
declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Core\Controller;

class ReservaController extends Controller
{
    public function index(): void
    {
        $this->view('', []);
    }
}