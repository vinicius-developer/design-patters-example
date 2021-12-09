<?php

use Src\Entidades\Cliente;
use Src\Entidades\Orcamento;

require_once '../vendor/autoload.php';

$valor = $argv[1];
$quantidadeItens = $argv[1];
$nomeCliente = $argv[1];

/**
 * Esse arquivo é responsável por várias responsabilidades 
 * e conforme o código cresce fica mais dificil e dar manutenção,
 * além disso caso seja necessário fazer uma ação semelhante em 
 * outra parte de código, será necessário dar ctrl + c e ctrl + v
 */
$orcamento = new Orcamento($valor, $quantidadeItens);

$cliente = new Cliente($nomeCliente);

echo "Processamento" . PHP_EOL;