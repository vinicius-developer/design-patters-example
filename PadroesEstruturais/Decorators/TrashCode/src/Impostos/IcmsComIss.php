<?php

namespace Src\Impostos;

use Src\Impostos\Interfaces\Imposto;
use Src\Entidades\Orcamento;

class IcmaComIss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return (new Icms())->calculaImposto($orcamento) + (new Iss)->calculaImposto($orcamento);
    }
}