<?php

require '../vendor/autoload.php';

use Src\Venda\Factory\Implementation\VendaProdutoFactory;

$criadorVenda = new VendaProdutoFactory(123);

$venda = $criadorVenda->venda();

$imposto = $criadorVenda->imposto();