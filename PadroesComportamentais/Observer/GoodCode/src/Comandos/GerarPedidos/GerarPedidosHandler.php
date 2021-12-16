<?php

namespace Src\Comandos\GerarPedidos;

use Src\Entidades\{Orcamento, Cliente};
use Src\Observer\Abstracoes\DefaultObservable;

class GerarPedidosHandler extends DefaultObservable
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

        $this->callActions($this);
    }
}