<?php

namespace Src\Chain\AbstractHandlers;

use Src\Pedido;

abstract class AbstractHandlers
{

    protected ?AbstractHandlers $handle = null;

    abstract public function next(): float;

    abstract public function setHandle(AbstractHandlers $handle): void;

    protected function callNextHandle() {

        if($this->handleIsNull()) {
            return 0;
        }

        return $this->handle->next();

    }

    private function handleIsNull(): bool {
        return is_null($this->handle);
    }

}