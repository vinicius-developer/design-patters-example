<?php

namespace Src\Impostos\Interfaces;

use Src\Orcamento;

interface ImpostoDefaultInterface
{
    function calculaImposto(Orcamento $orcamento): float;
}