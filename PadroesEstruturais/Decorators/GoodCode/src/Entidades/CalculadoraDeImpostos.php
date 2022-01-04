<?php

namespace Src\Entidades;

use Src\Impostos\Interfaces\Imposto;

class CalculadoraDeImpostos
{
    public function calcularImposto(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}