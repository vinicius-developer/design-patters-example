<?php

require '../vendor/autoload.php';

use Src\Logger\Manager\LogManager;

$logger = new LogManager();

$logger->log("file", "info", "Mensagem de teste");