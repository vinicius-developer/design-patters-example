<?php

namespace Src\Observer\Abstracoes;

use Src\Comandos\GerarPedidos\GerarPedidosHandler;

interface DefaultObserver
{
    public function acao(GerarPedidosHandler $pedido): void;
}