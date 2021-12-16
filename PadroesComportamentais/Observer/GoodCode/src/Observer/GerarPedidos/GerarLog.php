<?php 

namespace Src\Observer\GerarPedidos;

use Src\Observer\Abstracoes\DefaultObserver;
use Src\Comandos\GerarPedidos\GerarPedidosHandler;

class GerarLog implements DefaultObserver
{
    public function acao(GerarPedidosHandler $pedido): void 
    {
        echo "Genrando log" . PHP_EOL;
    }
}