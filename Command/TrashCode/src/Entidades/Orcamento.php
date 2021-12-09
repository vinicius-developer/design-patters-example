<?php

namespace Src\Entidades;

class Orcamento
{
    
    private float $valor;

    private int $quantidadeProdutos;

    public function __construct($valor, $quantidadeProdutos)
    {
        $this->valor = $valor;

        $this->quantidadeProdutos = $quantidadeProdutos;
    }

    public function valor(): float
    {
        return $this->valor;
    }

    public function produtos(): int
    {
        return $this->quantidadeProdutos;
    }

}