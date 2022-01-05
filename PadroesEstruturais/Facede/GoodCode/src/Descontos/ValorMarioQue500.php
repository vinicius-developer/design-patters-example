<?php

namespace Src\Descontos;

use Src\Descontos\Utils\Desconto;
use Src\Entidades\Orcamento;

class ValorMarioQue500 extends Desconto
{

    protected function calculo(Orcamento $orcamento): float
    {
        if($orcamento->valorTotal() > 200) {
            return $orcamento->valorTotal() * 0.2;
        }

        return 0;
    }

}