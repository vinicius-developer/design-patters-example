<?php

require '../vendor/autoload.php';

use Src\Adapter\PermissionApi;
use Src\Proxy\ProxyPermissionApi;

$permission = new PermissionApi();
$proxyPermission = new ProxyPermissionApi($permission);

$proxyPermission->verifyPermission('criar');

print_r("cria objeto 1 \n");

$proxyPermission->verifyPermission('criar');

print_r("cria objeto 2 \n");

$proxyPermission->verifyPermission('criar');

print_r("cria objeto 3 \n");

$proxyPermission->verifyPermission('criar');

print_r("cria objeto 4 \n");
