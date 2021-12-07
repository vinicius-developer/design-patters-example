<?php

namespace Src;

use Src\Chain\Handles\ItensInTheShopCarBiggerThen5;
use Src\Chain\Handles\TotalValueBiggerThan500;

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

        $totalValueBiggerThan500 = new TotalValueBiggerThan500($pedido);
        $itensInTheShopCarBiggerThen5 = new ItensInTheShopCarBiggerThen5($pedido);

        $totalValueBiggerThan500->setHandle($itensInTheShopCarBiggerThen5);

        return $totalValueBiggerThan500->next($pedido);

    }

}