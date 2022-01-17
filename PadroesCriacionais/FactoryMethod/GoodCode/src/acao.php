<?php

require '../vendor/autoload.php';

use Src\Logger\Factory\FactoryFileLogWritter;

$logger = new FactoryFileLogWritter(__DIR__ . "log.txt");

$logger->log('info', 'Mensagem de teste');