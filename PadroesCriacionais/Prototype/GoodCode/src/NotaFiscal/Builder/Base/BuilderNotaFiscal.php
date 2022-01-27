<?php

namespace Src\NotaFiscal\Builder\Base;

use Src\NotaFiscal\Base\NotaFiscal;
use DateTimeImmutable;
use DateTimeInterface;
use Src\Item\Item;

abstract class BuilderNotaFiscal
{
    private NotaFiscal $notaFiscal;
    
    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dateEmissao = new DateTimeImmutable();
    }

    public function paraEmpresa(string $cnpj, string $razaoSocial)
    {
        $this->notaFiscal->cnpj = $cnpj;

        $this->notaFiscal->razaoSocial = $razaoSocial;

        return $this;
    }

    public function comItem(Item $item)
    {
        $this->notaFiscal->itens[] = $item;

        return $this;
    }

    public function comObservacoes(string $observacoes)
    {
        $this->notaFiscal->observacoes = $observacoes;

        return $this;
    }

    public function dataEmissao(DateTimeInterface $date)
    {
        $this->notaFiscal->dateEmissao = $date;

        return $this;
    }

    abstract public function constroi();

}