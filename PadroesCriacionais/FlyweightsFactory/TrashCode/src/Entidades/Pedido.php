<?php

namespace Src\Entidades;

use Src\FlyWeigth\TemplatePedido;

class Pedido 
{
    private TemplatePedido $dados;

    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento, TemplatePedido $dados)
    {
        $this->orcamento = $orcamento;

        $this->dados = $dados;
    }
    
}