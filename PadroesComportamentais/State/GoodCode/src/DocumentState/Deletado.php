<?php

namespace Src\DocumentState;

use Src\Document;

class Deletado extends AbstractState
{
    public function rascunho(Document $document) 
    {
        $document->setState(new Rascunho());
    }

    public function __toString(): string
    {
        return "Deletado";
    }
}