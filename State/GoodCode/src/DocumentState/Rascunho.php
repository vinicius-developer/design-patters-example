<?php

namespace Src\DocumentState;

use Src\Document;
use Src\DocumentState\AbstractState;

class Rascunho extends AbstractState
{

    public function analise(Document $document)
    {
        $document->setState(new Analise);
    }

    public function deletado(Document $document)
    {
        $document->setState(new Deletado);
    }

    public function __toString(): string
    {
        return "Rascunho";
    }

}