<?php

namespace Src\NotaFiscal\Base;

use DateTimeInterface;
use Src\Patterns\Prototype;

class NotaFiscal implements Prototype
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

    public function clone(): NotaFiscal
    {
        $notaFiscal = new NotaFiscal();

        $notaFiscal->cnpj = $this->cnpj;
        $notaFiscal->itens = $this->itens;
        $notaFiscal->razaoSocial = $this->razaoSocial;
        $notaFiscal->observacoes = $this->observacoes;
        $notaFiscal->dataEmissao = $this->dataEmissao;
        $notaFiscal->valorImposto = $this->valorImposto;

        return $notaFiscal;
    }

}