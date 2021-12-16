<?php

namespace Src\DocumentState;

use DomainException;
use Src\Document;

abstract class AbstractState
{

    /**
     * @throws DomainException
     */
    public function publicado(Document $document) 
    {
        throw new DomainException("O document não pode ser publicado");
    }

    /**
     * @throws DomainException
     */
    public function rascunho(Document $document)
    {
        throw new DomainException("O documento não pode ser tornar um racunho");
    }

    /**
     * @throws DomainException
     */
    public function analise(Document $document)
    {
        throw new DomainException("O documento não pode retonar para a analise");
    }

    /**
     * @throws DomainException
     */
    public function deletado(Document $document) 
    {
        throw new DomainException("O documento não pode ser deletado");
    }
    
}