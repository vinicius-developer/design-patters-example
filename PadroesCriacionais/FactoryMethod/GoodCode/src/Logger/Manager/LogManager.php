<?php

namespace Src\Logger\Manager;

use Src\Logger\Base\LogWritter;

abstract class LogManager
{
    public function log(string $severidade, string $mensagem): void
    {
        $logWritter = $this->createLogWritter();

        $data = date('d/m/Y');

        $mensagem = "[$data][$severidade]: $mensagem";

        $logWritter->write($mensagem);
    }

    abstract public function createLogWritter(): LogWritter;
    
}