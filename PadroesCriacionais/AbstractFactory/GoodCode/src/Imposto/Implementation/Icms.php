<?php

namespace Src\Imposto\Implementation;

use Src\Imposto\Base\Imposto;

class Icms implements Imposto
{
    public function calculaImposto(float $valor): float
    {
        return $valor * 0.6;
    }   
}