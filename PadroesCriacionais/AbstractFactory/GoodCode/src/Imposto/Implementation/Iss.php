<?php

namespace Src\Imposto\Implementation;

use Src\Imposto\Base\Imposto;

class Iss implements Imposto
{
    public function calculaImposto(float $valor): float
    {
        return $valor * 0.3;
    }   
}

