<?php

namespace Src\Entidades;

use  Src\Entidades\Utils\CompositeOrcamento;

class Item implements CompositeOrcamento
{
    private float $valor;

    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }

    public function valor(): float
    {
        return $this->valor;
    }
}