<?php

namespace App\Controllers\Site;
use App\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->view('home', []);
    }
}