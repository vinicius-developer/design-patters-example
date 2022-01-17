<?php

namespace Src\Entidades;

use DateTimeInterface;

class Pedido 
{

    private string $nomeCliente;

    private DateTimeInterface $dataFinalizacao;

    private Orcamento $orcamento;

    public function __construct(string $nome, DateTimeInterface $date, Orcamento $orcamento)
    {
        $this->nomeCliente = $nome;

        $this->dataFinalizacao = $date;

        $this->orcamento = $orcamento;
    }
    
}