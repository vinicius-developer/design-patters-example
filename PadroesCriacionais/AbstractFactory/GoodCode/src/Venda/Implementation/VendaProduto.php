<?php

namespace Src\Venda\Implementation;

use Src\Venda\Base\Venda;
use DateTimeInterface;

class VendaProduto extends Venda 
{

    private int $peso;

    public function __construct(DateTimeInterface $date, int $peso)
    {
        parent::__construct($date);
        $this->peso = $peso;
    }

}