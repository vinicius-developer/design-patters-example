<?php

namespace Src\APIS;

use Src\Adapters\Http\Interfaces\AdapterDefault;
use Src\Repository\Orcamento;

class RegistrarOrcamento 
{

    private AdapterDefault $http;
    
    public function __construct(AdapterDefault $http)
    {
        $this->http = $http;
    }

    public function registrarOrcamento(Orcamento $orcamento)
    {
        $this->http->post(
            'https://registrar-orcamento.com.br/novo-orcamento',
            [
                'cliente' => $orcamento->getCliente(),
                'valor' => $orcamento->getValor()
            ]
        );
    }

}