<?php

namespace Src\Entidades;

use Src\Entidades\Utils\CompositeOrcamento;

class Orcamento implements CompositeOrcamento
{
    private array $items = [];

    public function addItem(CompositeOrcamento $item): void
    {
        $this->items[] = $item;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->items,
            fn(float $acum, CompositeOrcamento $item) => $item->valor() + $acum,
            0
        );
    }
}