<?php

namespace Src;

use Src\DocumentState\AbstractState;

class Document
{
    
    private AbstractState $state;

    public function setState(AbstractState $state): void
    {
        $this->state = $state;
    }

    public function state()
    {
        return $this->state;
    }

    public function publicado() 
    {
        $this->state->publicado($this);
    }

    public function rascunho()
    {
        $this->state->rascunho($this);
    }

    public function deletado()
    {
        $this->state->deletado($this);
    }

    public function analise()
    {
        $this->state->analise($this);
    }

}