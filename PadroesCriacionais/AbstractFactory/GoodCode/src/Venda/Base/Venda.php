<?php

namespace Src\Venda\Base;

use DateTimeInterface;

abstract class Venda 
{

    protected DateTimeInterface $dataVenda;

    public function __construct(DateTimeInterface $dataVenda)
    {
        $this->dataVenda = $dataVenda;
    }

}