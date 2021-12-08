<?php

namespace Src;


class Document 
{

    private string $state = "rascunho";

    /**
     * Nesse exemplo o código poderá crescer infinitamente
     * e não podemos garantir que em alterações futurar 
     * não venha a ser quebrado por algum error de ecrita no
     * valores, já que IDE não pode nos ajudar nesse caso.
     */
    public function publicar(): void
    {
        switch ($this->state){
            case "draft": 
                $this->state = "moderation";
                break;
            case "moderation" :
                $this->state = "published";
                break;
            case "published";
                break;
        }
    } 

    public function setState(string $state): void
    {
        $this->state = $state;
    }

}