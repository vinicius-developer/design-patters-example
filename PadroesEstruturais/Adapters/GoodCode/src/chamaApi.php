<?php

use Src\Adapters\Http\Interfaces\CurlAdapter;
use Src\APIS\RegistrarOrcamento;
use Src\Repository\Orcamento;

require_once('../vendor/autoload.php');

$orcamento = new Orcamento("Vinicius de Paula", 50.0);

$apiOrcamento = new RegistrarOrcamento(new CurlAdapter());

$apiOrcamento->registrarOrcamento($orcamento);