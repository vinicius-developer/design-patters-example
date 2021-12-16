<?php

namespace Src\Impostos;

use Src\Impostos\Interfaces\ImpostoDefaultInterface;
use Src\Orcamento;

class ICMS implements ImpostoDefaultInterface
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor() * 0.1;
    }
}