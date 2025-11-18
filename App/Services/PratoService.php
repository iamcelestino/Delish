<?php 
declare(strict_types=1);

namespace App\Services;
use App\Contracts\PratoInterface;

class PratoService 
{
    public function __construct( 
        protected PratoInterface $prato
    ){}

    public function create(array $dadoPrato): void
    {
        $this->prato->insert($dadoPrato);
    }

    public function update(): void
    {

    }
}