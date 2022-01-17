<?php

namespace Src\Entidades;

use Src\FlyWeigth\DadosExtrincicosPedido;

class Pedido 
{
    private DadosExtrincicosPedido $dados;

    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento, DadosExtrincicosPedido $dados)
    {
        $this->orcamento = $orcamento;

        $this->dados = $dados;
    }
    
}