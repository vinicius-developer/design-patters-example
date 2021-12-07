<?php

namespace Src\Chain\AbrstractHandles;

use Src\Pedido;

abstract class AbrstractHandles
{

    private ?AbrstractHandles $handle = null;

    abstract public function next(Pedido $pedido): float;

    abstract public function setHandle(AbrstractHandles $handle): void;

    protected function callNextHandle(Pedido $pedido) {

        if($this->handleIsNull()) {
            return 0;
        }

        return $this->handle->next($pedido);

    }

    private function handleIsNull(): bool {
        return is_null($this->handle);
    }

}