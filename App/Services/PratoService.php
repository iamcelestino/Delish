<?php 
declare(strict_types=1);

namespace App\Services;
use App\Contracts\PratoInterface;

class PratoService 
{
    public function __construct( 
        protected PratoInterface $prato
    ){}

    public function getAllPratos(): array|object 
    {
        return $this->prato->all();
    }

    public function getSinglePrato(int $id): array|object
    {
        return $this->prato->where('id_prato', $id);
    }

    public function create(array $dadoPrato): void
    {
        $this->prato->insert($dadoPrato);
    }

    public function update(int $id, array $dadoPrato): void
    {
        $this->prato->update($id, $dadoPrato);
    }

    public function delete(int $id): void 
    {
        $this->prato->delete($id);
    }
}