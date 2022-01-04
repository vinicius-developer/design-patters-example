<?php

namespace Src\Impostos\Tools;

use Src\Entidades\Orcamento;

abstract class Imposto 
{
    private ?Imposto $outroImposto;

    public function __construct(Imposto $imposto = null)
    {
        $this->outroImposto = $imposto;
    }

    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento): float;

    public function calculaImposto(Orcamento $orcamento): float
    {
        return $this->realizaCalculoEspecifico($orcamento) + $this->calculaProximoImposto($orcamento);
    }

    private function calculaProximoImposto(Orcamento $orcamento): float
    {
        return $this->outroImposto === null ? 0 : $this->calculaImposto($orcamento);
    }

}