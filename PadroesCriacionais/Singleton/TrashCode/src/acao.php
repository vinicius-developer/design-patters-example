<?php

require '../vendor/autoload.php';

use Src\Database\PdoConnection;

$conncetion = new PdoConnection('sqlite:memory:');

$conncetion1 = new PdoConnection('sqlite:memory:');

var_dump($conncetion, $conncetion1);


