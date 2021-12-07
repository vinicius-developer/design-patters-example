<?php

namespace Src\Chain\AbstractHandlers;

use Src\Pedido;

abstract class LinkHandlers extends AbstractHandlers
{
    protected Pedido $pedido;

    public function next(): float
    {
        if($this->getConditionForDiscount()) {
            return $this->discount();
        }

        return $this->callNextHandle();

    }

    public function setHandle(AbstractHandlers $handle): void
    {
        $this->handle = $handle;
    }

    abstract protected function getConditionForDiscount(): bool;

    abstract protected function discount(): float;

}