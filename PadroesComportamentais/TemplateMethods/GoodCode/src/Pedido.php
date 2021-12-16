<?php

namespace Src;

class Pedido
{

    private int $amountItensInTheShopCar;

    private float $totalValue;

    public function amountItensInTheShopCar(): int
    {
        return $this->amountItensInTheShopCar;
    }

    public function totalValue(): float
    {
        return $this->totalValue;
    }


}