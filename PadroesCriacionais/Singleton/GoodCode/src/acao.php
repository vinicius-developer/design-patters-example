<?php

require '../vendor/autoload.php';

use Src\Database\PdoConnection;

$conncetion = PdoConnection::getInstance('sqlite:memory:');

$conncetion1 = PdoConnection::getInstance('sqlite:memory:');

var_dump($conncetion, $conncetion1);


