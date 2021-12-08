<?php

namespace Src;

use Src\Impostos\Interfaces\ImpostoDefaultInterface;

class Iss implements ImpostoDefaultInterface
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor() * 0.06;
    }
}