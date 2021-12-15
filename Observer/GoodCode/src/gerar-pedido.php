<?php

use Src\Comandos\GerarPedidos\GerarPedidoCommand;
use Src\Comandos\GerarPedidos\GerarPedidosHandler;
use Src\Observer\GerarPedidos\InserirNoBanco;
use Src\Observer\GerarPedidos\GerarLog;

require_once '../vendor/autoload.php';

$valor = $argv[1];
$quantidadeItens = $argv[1];
$nomeCliente = $argv[1];


/**
 * Nesse caso nós criamos primeiro um molde de comando 
 * fazendo com que ele armazene para serem utilizados 
 * E em outra classe chama a ação passando o pedido como 
 * parâmetro para se executado 
 */
$pedido = new GerarPedidoCommand($valor, $quantidadeItens, $nomeCliente);
$pedidoHandler = new GerarPedidosHandler();

$pedidoHandler->addBread(new GerarLog());
$pedidoHandler->addBread(new InserirNoBanco());

$pedidoHandler->execute($pedido);

