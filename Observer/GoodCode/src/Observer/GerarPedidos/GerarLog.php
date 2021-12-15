<?php 

namespace Src\Observer\GerarPedidos;

use Src\Observer\Abstracoes\DefaultObserver;

class GerarLog extends DefaultObserver
{
    public function acao(): void 
    {
        echo "Genrando log" . PHP_EOL;
    }
}