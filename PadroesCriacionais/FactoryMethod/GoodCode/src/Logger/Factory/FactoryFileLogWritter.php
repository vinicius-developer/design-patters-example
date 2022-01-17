<?php

namespace Src\Logger\Factory;

use Src\Logger\Implementations\FileLogWritter;
use Src\Logger\Manager\LogManager;
use Src\Logger\Base\LogWritter;

class FactoryFileLogWritter extends LogManager
{

    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function createLogWritter(): LogWritter
    {
        return new FileLogWritter($this->path);
    }

}