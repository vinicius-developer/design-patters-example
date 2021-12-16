<?php

use Src\APIS\RegistrarOrcamento;
use Src\Repository\Orcamento;

require_once('../vendor/autoload.php');

$orcamento = new Orcamento("Vinicius de Paula", 50.0);

$registrarOrcamento = (new RegistrarOrcamento())->registrarOrcamento($orcamento);