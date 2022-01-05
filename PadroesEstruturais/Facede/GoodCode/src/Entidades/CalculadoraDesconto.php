<?php

namespace Src\Entidades;

use Src\Descontos\MaisDe5Items;
use Src\Descontos\ValorMarioQue500;

class CalculadoraDesconto
{

    public function calcular(Orcamento $orcamento) 
    {

        $descontos = New MaisDe5Items(new ValorMarioQue500());

        $valorComDesconto = $descontos->calcular($orcamento);
        
    }

}