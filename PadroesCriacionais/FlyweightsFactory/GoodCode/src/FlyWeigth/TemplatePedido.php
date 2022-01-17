<?php

namespace Src\FlyWeigth;

use DateTimeInterface;

class TemplatePedido
{

    private string $nomeCliente;

    private DateTimeInterface $dataFinalizacao;

    public function __construct(string $nome, DateTimeInterface $data)
    {   
        $this->nomeCliente = $nome;

        $this->dataFinalizacao = $data;
    }

    public function nome(): string
    {
        return $this->nomeCliente;
    }

    public function data(): DateTimeInterface
    {
        return $this->dataFinalizacao;
    }

}