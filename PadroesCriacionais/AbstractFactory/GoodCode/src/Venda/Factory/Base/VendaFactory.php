<?php

namespace Src\Venda\Factory\Base;

use Src\Imposto\Base\Imposto;
use Src\Venda\Base\Venda;

interface VendaFactory
{

    function venda(): Venda;

    function imposto(): Imposto;

}