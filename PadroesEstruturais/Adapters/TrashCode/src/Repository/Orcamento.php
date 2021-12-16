<?php

namespace Src\Repository;

class Orcamento 
{
    private string $cliente;

    private float $valor;

    public function __construct(string $cliente, float $valor)
    {
        $this->cliente = $cliente;

        $this->valor = $valor;
    }

    public function getCliente(): string
    {
        return $this->cliente;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

}