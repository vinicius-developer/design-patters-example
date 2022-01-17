<?php

namespace Src\Logger\Base;


interface LogWritter
{
    function write(string $mensagemFormatada): void;
}

