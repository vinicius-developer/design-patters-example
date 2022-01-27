<?php

namespace Src\Venda\Implementation;

use DateTimeInterface;
use Src\Venda\Base\Venda;

class VendaServico extends Venda
{

    private string $nomePrestador;

    public function __construct(DateTimeInterface $data, string $nome)
    {
        
        parent::__construct($data);
        $this->nome = $nome;

    }


}

