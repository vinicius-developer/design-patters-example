<?php

namespace Src\Vendas;

use DateTimeInterface;
use Src\Venda\Venda;

class VendaProduto extends Venda 
{

    private int $peso;

    public function __construct(DateTimeInterface $date, int $peso)
    {

        parent::__construct($date);
        $this->peso = $peso;
        
    }

}