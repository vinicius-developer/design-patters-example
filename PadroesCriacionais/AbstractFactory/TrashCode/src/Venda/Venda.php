<?php

namespace Src\Venda;

use DateTimeInterface;

abstract class Venda 
{

    protected DateTimeInterface $dataVenda;

    public function __construct(DateTimeInterface $dataVenda)
    {
        $this->dataVenda = $dataVenda;
    }

}