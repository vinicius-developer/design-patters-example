<?php

namespace Src\Descontos\Utils;

use Src\Entidades\Orcamento;

abstract class Desconto 
{

    protected ?Desconto $next;
    
    public function __construct(Desconto $desconto = null)
    {
        $this->next = $desconto;
    }

    protected abstract function calculo(Orcamento $orcamento): float;

    public function calcular(Orcamento $orcamento): float
    {
        return $this->calculo($orcamento) + $this->proximoCalculo($orcamento);
    }

    public function proximoCalculo(Orcamento $orcamento): float
    {
        return $this->next = null ? 0 : $this->calcular($orcamento);
    }

}