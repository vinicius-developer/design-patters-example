<?php

namespace Src\Adapters\Http\Interfaces;

class CurlAdapter implements AdapterDefault 
{
    function post(string $url, array $body = []): void
    {
        echo "Curl post" . PHP_EOL;
    }

    function get(string $url, array $body = []): void
    {
        echo "Curl get" . PHP_EOL;
    }

    function put(string $url, array $body = []): void
    {
        echo "Curl put" . PHP_EOL;
    }

    function delete(string $url, array $body = []): void
    {
        echo "Curl delete" . PHP_EOL;
    }
}