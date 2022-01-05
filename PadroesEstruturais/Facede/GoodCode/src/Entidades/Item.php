<?php

namespace Src\Entidades;

class Item {

    private float $valor;

    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }

    private function valor(): float
    {
        return $this->valor;
    }

}