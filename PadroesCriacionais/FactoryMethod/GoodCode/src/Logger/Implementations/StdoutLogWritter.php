<?php

namespace Src\Logger\Implementations;

use Src\Logger\Base\LogWritter;

class StdoutLogWritter implements LogWritter
{

    public function write(string $mensagemFormatada): void
    {
        echo $mensagemFormatada . PHP_EOL;
    }

}