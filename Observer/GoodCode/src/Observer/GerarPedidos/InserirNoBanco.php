<?php 

namespace Src\Observer\GerarPedidos;

use Src\Observer\Abstracoes\DefaultObserver;

class InserirNoBanco implements DefaultObserver
{

    public function acao(): void 
    {
        echo "Inserindo no banco" . PHP_EOL;
    }

}