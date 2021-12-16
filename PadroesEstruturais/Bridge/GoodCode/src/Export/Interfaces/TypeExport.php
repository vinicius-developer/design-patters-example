<?php

namespace Src\Export\Interfaces;

interface TypeExport
{

    public function export(ExportableItem $exportableItem): string;

}