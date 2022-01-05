<?php

use Src\Entidades\CalculadoraDesconto;
use Src\Entidades\Item;
use Src\Entidades\Orcamento;

$item = new Item(100);
$item2 = new Item(100);

$orcamento = new Orcamento();

$orcamento->addItem($item);
$orcamento->addItem($item2);

$calculoComDesconto = (new CalculadoraDesconto())->calcular($orcamento);

/**
 * Outros processos realizados após o calculor do 
 * desconto
 */
