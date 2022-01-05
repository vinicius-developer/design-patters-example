<?php

namespace Src\Entidades;

class Orcamento
{
    public array $item = [];

    public function addItem(Item $item): void
    {
        $this->item[] = $item;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->item,
            fn(float $acum, Item $item) => $acum + $item->valor,
            0
        );
    }

}