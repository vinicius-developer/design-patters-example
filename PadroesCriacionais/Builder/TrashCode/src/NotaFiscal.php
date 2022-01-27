<?php

namespace Src;

use DateTimeInterface;

class NotaFiscal
{

    public string $cnpj;
    public string $razaoSocial;
    public array $itens;
    public string $observacoes;
    public DateTimeInterface $dataEmissao;
    public float $valorImposto;

    public function __construct(string $cnpj, string $razaoSocial, array $items, string $observacoes, DateTimeInterface $dataEmissao, float $valorImposto)
    {
        
    }

    public function valor(): float
    {
        return 0;
    }

}