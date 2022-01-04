<?php

namespace Src\Impostos;

use Src\Entidades\Orcamento;
use Src\Impostos\Interfaces\Imposto;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor() * 0.6;
    }
}