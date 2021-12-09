<?php

namespace Src\Entidades;

class Cliente 
{

    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function nome(): string
    {
        return $this->nome;
    }


}