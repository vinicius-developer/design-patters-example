<?php

namespace Src\Logger\Manager;

use Src\Logger\Implementations\FileLogWritter;
use Src\Logger\Implementations\StdoutLogWritter;

class LogManager
{
    public function log(string $method, string $severidade, string $mensagem): void
    {
        if($method == "file") {
            $logWritter = new FileLogWritter(__DIR__ . "log.txt");
        } else {
            $logWritter = new StdoutLogWritter();
        }

        $data = date('d/m/Y');

        $mensagem = "[$data][$severidade]: $mensagem";

        $logWritter->write($mensagem);
    }

    
}