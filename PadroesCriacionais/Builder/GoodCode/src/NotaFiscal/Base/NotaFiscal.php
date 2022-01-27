<?php

namespace Src\NotaFiscal\Base;

use DateTimeInterface;

class NotaFiscal
{

    public string $cnpj;
    public string $razaoSocial;
    public array $itens;
    public string $observacoes;
    public DateTimeInterface $dataEmissao;
    public float $valorImposto;

    public function valor(): float
    {
        $value = 0;

        foreach($this->itens as $item) {
            $value += $item->valor;
        }
        
        return $value;
    }

}