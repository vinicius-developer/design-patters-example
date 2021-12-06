<?php

namespace Src;

class CalculadorDeDescontos
{


    /**
     * 
     * Este é um exmplo de classe que irá crescer
     * infinitamente, e a alteração de código que 
     * funciona pode sempre provocar código que não
     * funciona.
     * 
     */
    public function calculaDesconto(Pedido $pedido): float
    {

        // Desconto de 10%
        if($pedido->totalValue() > 500) {
            return $pedido->totalValue() * 0.1;
        }

        // Desconto de 20%
        if($pedido->amountItensInTheShopCar() > 5) {
            return $pedido->amountItensInTheShopCar() * 0.5;
        }

        return 0;


    }

}