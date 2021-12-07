<?php

namespace Src\Chain\Handles;

use Src\Chain\AbstractHandlers\LinkHandlers;
use Src\Pedido;

class TotalValueBiggerThan500 extends LinkHandlers
{
    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    protected function getConditionForDiscount(): bool
    {
        return $this->pedido->totalValue() > 500;
    }

    protected function discount(): float
    {
        return $this->pedido->totalValue() * 0.1;
    }
}