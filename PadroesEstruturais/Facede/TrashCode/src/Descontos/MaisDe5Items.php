<?php

namespace Src\Descontos;

use Src\Descontos\Utils\Desconto;
use Src\Entidades\Orcamento;

class MaisDe5Items extends Desconto
{

    protected function calculo(Orcamento $orcamento): float
    {
        if($orcamento->quantidadeItems() > 5) {
            return $orcamento->valorTotal() * 0.02;
        }

        return 0;
    }

}