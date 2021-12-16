<?php

use Src\Entity\Budget;
use Src\Entity\Order;
use Src\Export\ItemsExportable\BudgetExportable;
use Src\Export\ItemsExportable\OrderExportable;
use Src\Export\TypesExport\Zip;
use Src\Export\TypesExport\Xml;

require_once('../vendor/autoload.php');

$budget = new Budget('Vinicius');

$order = new Order("Vinicius", 5.00, 123);

$budgetExportable = new BudgetExportable($budget);

$orderExportable = new OrderExportable($order);

$xml = new Xml('teste.teste');
$zip = new Zip('teste.teste');

$pathBudgetExportable = $xml->export($budgetExportable);
$pathOrderExportable = $zip->export($orderExportable);