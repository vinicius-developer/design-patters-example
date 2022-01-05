<?php

namespace Src\Entidades;

class Orcamento
{
    private array $items = [];

    public function addItem(Item $item): void
    {
        $this->items[] = $item;
    }

    public function quantidadeItems(): int
    {
        return count($this->items);
    }

    public function valorTotal(): float
    {
        return array_reduce(
            $this->items,
            fn(float $acum, Item $item) => $acum + $item->valor(),
            0
        );
    }
}