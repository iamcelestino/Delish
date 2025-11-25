<?php 
declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Core\Controller;
use App\Services\PratoService;

class PratoController extends Controller
{
    public function __construct(
        protected PratoService $prato
    ){}

    public function index(): void
    {
        $pratos = $this->prato->getAllPratos();

        $this->view('Admin/pratos', [
            'pratos' => $pratos
        ]);
    }

    public function create(): void
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->prato->create($_POST);
        }

        $this->view('Admin/criar_prato', []);
    }

    public function update(int $id): void 
    {
        if(!$id) {
            echo "Prato Nao encontrado";
        }

        $prato = $this->prato->getSinglePrato($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->prato->update($id, $_POST);
        }

        $this->view('Admin/editar_prato', [
            'prato' => $prato[0]
        ]);
    }

    public function delete(int $id): void 
    {
        if(!$id) {
            echo "Prato Nao encontrado";
        }

        $prato = $this->prato->getSinglePrato($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->prato->delete($id);
        }

        $this->view('Admin/deletar_prato', [
            'prato' => $prato[0]
        ]); 
    }

}
