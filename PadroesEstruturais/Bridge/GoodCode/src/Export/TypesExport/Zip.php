<?php

namespace Src\Export\TypesExport;

use Src\Export\Interfaces\ExportableItem;
use Src\Export\Interfaces\TypeExport;

class Zip implements TypeExport
{

    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function export(ExportableItem $exportableItem): string
    {
        echo "Faz o processamento para zip o arquivo" . PHP_EOL;

        return $this->file;
    }

}