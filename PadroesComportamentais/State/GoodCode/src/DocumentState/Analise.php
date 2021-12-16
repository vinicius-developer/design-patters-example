<?php

namespace Src\DocumentState;

use Src\Document;

class Analise extends AbstractState
{
    public function publicar(Document $document) 
    {
        $document->setState(new Publicado);
    }

    public function rascunho(Document $document)
    {
        $document->setState(new Rascunho());
    }

    public function deletado(Document $document)
    {
        $document->setState(new Deletado);
    }

    public function __toString(): string
    {
        return "Analise";
    }
}