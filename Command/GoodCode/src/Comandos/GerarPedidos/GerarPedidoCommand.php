<?php

namespace Src\Comandos\GerarPedidos;

class GerarPedidoCommand
{
    private float $valor;

    private int $quantidadeProdutos;

    private string $nomeCliente;

    public function __construct(
        float $valor,
        int $quantidadeProdutos,
        string $nomeCliente
    ) {

        $this->valor = $valor;

        $this->quantidadeProdutos = $quantidadeProdutos;

        $this->nomeCliente = $nomeCliente;

    }

    public function value(): float
    {
        return $this->valor;
    }

    public function quantidadeProdutos(): int
    {
        return $this->quantidadeProdutos;
    }

    public function cliente(): string
    {
        return $this->nomeCliente;
    }
}
