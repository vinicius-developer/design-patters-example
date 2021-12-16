<?php

namespace Src\Export\ItemsExportable;

use Src\Export\Interfaces\ExportableItem;
use Src\Entity\Order;

class OrderExportable implements ExportableItem
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function contentExportable(): array
    {
        return [
            'client' => $this->order->getClient(),
            'value' => $this->order->getValue(),
            'numberOfItems' => $this->order->getNumberOfItens()
        ];
    }

}