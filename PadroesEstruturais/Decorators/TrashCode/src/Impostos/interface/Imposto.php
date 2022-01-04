<?php

namespace Src\Impostos\Interfaces;

use Src\Entidades\Orcamento;

interface Imposto 
{

    function calculaImposto(Orcamento $orcamento): float;

}