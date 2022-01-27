<?php

namespace Src\Venda;

use DateTimeInterface;

class VendaServico extends Venda
{

    private string $nomePrestador;

    public function __construct(DateTimeInterface $data, string $nome)
    {
        
        parent::__construct($data);
        $this->nome = $nome;

    }


}

