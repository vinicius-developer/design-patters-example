<?php

namespace Src\Venda\Factory\Implementation;

use Src\Venda\Implementation\VendaServico;
use Src\Venda\Factory\Base\VendaFactory;
use Src\Imposto\Implementation\Icms;
use Src\Imposto\Base\Imposto;
use Src\Venda\Base\Venda;
use DateTimeImmutable;

class VendaServicoFactory implements VendaFactory
{

    private string $nomePrestador;

    public function __construct(string $nome)
    {
        $this->nomePrestador = $nome;
    }

    public function venda(): Venda
    {
        return new VendaServico(new DateTimeImmutable(), $this->nomePrestador);
    }

    public function imposto(): Imposto
    {
        return new Icms();
    }

}