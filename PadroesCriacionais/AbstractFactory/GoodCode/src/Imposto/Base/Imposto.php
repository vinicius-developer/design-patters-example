<?php

namespace Src\Imposto\Base;

interface Imposto
{

    function calculaImposto(float $valor): float;

}