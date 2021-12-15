<?php

namespace Src\Comandos\GerarPedidos;

use Src\Entidades\{Orcamento, Cliente};

class GerarPedidosHandler
{

    public function execute(GerarPedidoCommand $pedido)
    {
        $orcamento = new Orcamento(
            $pedido->value(), 
            $pedido->quantidadeProdutos()
        );

        $cliente = new Cliente(
            $pedido->cliente()
        );

        echo "Processamento" . PHP_EOL;
    }

}