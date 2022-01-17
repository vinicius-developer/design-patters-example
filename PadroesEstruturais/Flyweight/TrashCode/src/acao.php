<?php

require '../vendor/autoload.php';

use Src\Entidades\Orcamento;
use Src\Entidades\Pedido;

$pedidos = [];



for($i = 0; $i < 10000; $i++) {

    $nome = md5((string) rand(1, 1000000));

    $orcamento = new Orcamento();

    $date = new DateTimeImmutable();

    $pedido = new Pedido($nome, $date, $orcamento);




    $pedidos[] = $pedido;

}

echo memory_get_peak_usage();