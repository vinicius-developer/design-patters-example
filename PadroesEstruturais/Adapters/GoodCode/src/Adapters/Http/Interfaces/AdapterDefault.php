<?php

namespace Src\Adapters\Http\Interfaces;

interface AdapterDefault
{

    function post(string $url, array $body = []): void;

    function get(string $url, array $body = []): void;

    function put(string $url, array $body = []): void;

    function delete(string $url, array $body = []): void;

}