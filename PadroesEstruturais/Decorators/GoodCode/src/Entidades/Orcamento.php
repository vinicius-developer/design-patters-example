<?php 

namespace Src\Entidades;

class Orcamento
{
    private float $orcamento;

    public function __construct(float $value)
    {
        $this->orcamento = $value;
    }

    public function orcamento(): float
    {
        return $this->orcamento;
    }
}