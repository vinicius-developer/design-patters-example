<?php


require '../vendor/autoload.php';

use Src\NotaFiscal\Builder\Implementacao\BuilderNotaFiscalProduto;
use Src\Item\Item;

$builder = new BuilderNotaFiscalProduto();

$item1 = new Item(100);

$item2 = new Item(100);

$item3 = new Item(100);

$notaFiscal = $builder->paraEmpresa("123145", 'testeste')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacoes("Tesste teste teste")
    ->constroi();