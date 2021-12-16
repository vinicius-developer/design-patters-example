<?php

namespace Src\Chain\Handles;

use Src\Chain\AbrstractHandles\AbrstractHandles;
use Src\Pedido;

class TotalValueBiggerThan500 extends AbrstractHandles
{

    public function next(Pedido $pedido): float
    {
        // Desconto de 10%
        if($pedido->totalValue() > 500) {
            return $pedido->totalValue() * 0.1;
        }

        return $this->callNextHandle($pedido);

    }

    public function setHandle(AbrstractHandles $handle): void
    {
        $this->handle = $handle;
    }


}