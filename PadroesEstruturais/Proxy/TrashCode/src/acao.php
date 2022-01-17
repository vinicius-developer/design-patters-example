<?php

require '../vendor/autoload.php';

use Src\Adapter\PermissionApi;

$permission = new PermissionApi();

$permission->verifyPermission('criar');

print_r("cria objeto 1 \n");

$permission->verifyPermission('criar');

print_r("cria objeto 2 \n");

$permission->verifyPermission('criar');

print_r("cria objeto 3 \n");

$permission->verifyPermission('criar');

print_r("cria objeto 4 \n");
