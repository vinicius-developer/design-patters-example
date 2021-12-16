<?php

namespace Src\Export\ItemsExportable;

use Src\Entity\Budget;
use Src\Export\Interfaces\ExportableItem;

class BudgetExportable implements ExportableItem
{

    private Budget $budget;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;
    }

    public function contentExportable(): array
    {
        return [
            'client' => $this->budget->getClient(),
            'created_at' => $this->budget->getCreatedAt()
        ];
    }

}