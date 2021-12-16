<?php

namespace Src;

class CalculadoraDeImpostos
{


    /**
     * 
     * Este é um exmplo de classe que irá crescer
     * infinitamente, e a alteração de código que 
     * funciona pode sempre provocar código que não
     * funciona.
     * 
     */
    public function calculaImposto(Orcamento $orcamento, string $tipo): float
    {
        switch($tipo) {
            case "ICMS":
                return $orcamento->valor * 0.06;
            case "ISS":
                return $orcamento->valor * 0.1;
        }
    }

}