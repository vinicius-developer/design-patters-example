<?php

require '../vendor/autoload.php';

use Src\Factory\Flyweigth\Pedido\Factory;
use Src\Entidades\Orcamento;

$pedidos = [];

$criadorPedido = new Factory();

for($i = 0; $i < 10000; $i++) {

    $orcamento = new Orcamento();

    $pedido = $criadorPedido->create(
        $orcamento, 
        "Vinicius de Paula",
        date('Y-m-d')
    );

    $pedidos[] = $pedido;

}

echo memory_get_peak_usage() . "\n";