<?php

namespace Src\Export\TypesExport;

use Src\Export\Interfaces\ExportableItem;
use Src\Export\Interfaces\TypeExport;

class Xml implements TypeExport
{

    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function export(ExportableItem $itemExportable): string
    {

        echo 'Faz a exportação de um arquivo xml' . PHP_EOL;

        return $this->file;

    }

}