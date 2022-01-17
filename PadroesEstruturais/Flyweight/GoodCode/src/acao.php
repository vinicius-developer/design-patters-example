<?php

require '../vendor/autoload.php';

use Src\Entidades\Orcamento;
use Src\Entidades\Pedido;
use Src\FlyWeigth\DadosExtrincicosPedido;

$pedidos = [];

$nome = md5((string) rand(1, 1000000));

$date = new DateTimeImmutable();

$dados = new DadosExtrincicosPedido($nome, $date);

for($i = 0; $i < 10000; $i++) {

    $orcamento = new Orcamento();

    $pedido = new Pedido($orcamento, $dados);

    $pedidos[] = $pedido;

}

echo memory_get_peak_usage() . "\n";