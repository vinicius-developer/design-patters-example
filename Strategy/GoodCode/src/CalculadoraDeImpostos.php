<?php

namespace Src;

use Src\Impostos\Interfaces\ImpostoDefaultInterface;

class CalculadoraDeImpostos
{
    public function calculaImposto(
        Orcamento $orcamneto,
        ImpostoDefaultInterface $imposto
    ): float {
        return $imposto->calculaImposto($orcamneto);
    }
}
