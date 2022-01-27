<?php

namespace Src\Item;

class Item
{

    private int $valor;

    public function __construct(int $valor)
    {
        $this->valor = $valor;
    }

}