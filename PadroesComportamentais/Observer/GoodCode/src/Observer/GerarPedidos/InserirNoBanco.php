<?php 

namespace Src\Observer\GerarPedidos;

use Src\Comandos\GerarPedidos\GerarPedidosHandler;
use Src\Observer\Abstracoes\DefaultObserver;

class InserirNoBanco implements DefaultObserver
{

    public function acao(GerarPedidosHandler $pedido): void 
    {
        echo "Inserindo no banco" . PHP_EOL;
    }

}