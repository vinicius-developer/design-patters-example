<?php

namespace Src\Logger\Implementations;

use Src\Logger\Base\LogWritter;

class FileLogWritter implements LogWritter
{
    private $file;
    
    public function __construct(string $path)
    {
        $this->file = fopen($path, "a+");
    }

    public function write(string $mensagem): void
    {
        fwrite($this->file, $mensagem . PHP_EOL);
    }

    public function __destruct()
    {
        fclose($this->file);
    }


}