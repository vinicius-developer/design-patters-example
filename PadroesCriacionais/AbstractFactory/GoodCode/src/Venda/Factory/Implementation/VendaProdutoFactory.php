<?php

namespace Src\Venda\Factory\Implementation;

use Src\Venda\Implementation\VendaProduto;
use Src\Venda\Factory\Base\VendaFactory;
use Src\Imposto\Implementation\Icms;
use Src\Imposto\Base\Imposto;
use Src\Venda\Base\Venda;
use DateTimeImmutable;

class VendaProdutoFactory implements VendaFactory
{

    private int $peso;

    public function __construct(int $peso)
    {
        $this->peso = $peso;
    }

    public function venda(): Venda
    {
        
        return new VendaProduto(new DateTimeImmutable(), $this->peso);
    }

    public function imposto(): Imposto
    {
        return new Icms();
    }

}