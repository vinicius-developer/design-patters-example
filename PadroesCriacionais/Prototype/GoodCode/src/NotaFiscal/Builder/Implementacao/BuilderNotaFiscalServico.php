<?php

namespace Src\NotaFiscal\Builder\Implementacao;

use Src\NotaFiscal\Builder\Base\BuilderNotaFiscal;

class BuilderNotaFiscalServico extends BuilderNotaFiscal
{

    public function constroi()
    {
        $valorNotaFiscal = $this->notaFiscal->valor();

        $this->notaFiscal->valorImposto = $valorNotaFiscal * 0.06;

        return $this->notaFiscal;
    }

}