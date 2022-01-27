<?php

namespace Src\NotaFiscal\Builder\Implementacao;

use Src\NotaFiscal\Builder\Base\BuilderNotaFiscal;


class BuilderNotaFiscalProduto extends BuilderNotaFiscal
{
    public function __construct()
    {
        parent::__construct();
    }

    public function constroi()
    {
        $valorNotaFiscal = $this->notaFiscal->valor();

        $this->notaFiscal->valorImposto = $valorNotaFiscal * 0.04;

        return $this->notaFiscal;
    }
    
}
