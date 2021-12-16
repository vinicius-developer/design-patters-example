<?php

namespace Src\Chain\Handles;

use Src\Chain\AbrstractHandles\AbrstractHandles;
use Src\Pedido;

class ItensInTheShopCarBiggerThen5 extends AbrstractHandles
{

    public function next(Pedido $pedido): float
    {
        // Desconto de 5%
        if($pedido->amountItensInTheShopCar() > 5) {
            return $pedido->totalValue() * 0.05;
        }

        return $this->callNextHandle($pedido);

    }

    public function setHandle(AbrstractHandles $handle): void
    {
        $this->handle = $handle;
    }


}