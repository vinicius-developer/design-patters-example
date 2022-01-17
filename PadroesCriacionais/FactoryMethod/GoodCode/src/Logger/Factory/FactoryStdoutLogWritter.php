<?php

namespace Src\Logger\Factory;

use Src\Logger\Base\LogWritter;
use Src\Logger\Implementations\StdoutLogWritter;
use Src\Logger\Manager\LogManager;

class FactoryStdoutLogWritter extends LogManager
{
    
    public function createLogWritter(): LogWritter
    {
        return new StdoutLogWritter();
    }

}