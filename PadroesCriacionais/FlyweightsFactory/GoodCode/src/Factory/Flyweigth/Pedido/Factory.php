<?php

namespace Src\Factory\Flyweigth\Pedido;

use Src\FlyWeigth\TemplatePedido;
use Src\Entidades\Orcamento;
use Src\Entidades\Pedido;
use DateTimeImmutable;

class Factory 
{

    private array $templates = [];

    public function create(Orcamento $orcamento, string $nome, string $data): Pedido
    {
        $pedido = new Pedido(
            $orcamento, 
            $this->createTemplatePedido($nome, $data)
        );

        return $pedido;
    }

    private function createTemplatePedido(string $nome, string $data): TemplatePedido
    {
        $hash = md5($nome . $data);

        if(!$this->existisTemplate($hash)) {
            $this->addTemplate($hash, $nome, $data);
        }

        return $this->templates[$hash];
    }

    private function existisTemplate(string $hash): bool 
    {
        return array_key_exists($hash, $this->templates);
    }

    private function addTemplate(string $hash, string $nome, string $data): void
    {
        $this->templates[$hash] = new TemplatePedido(
            $nome,
            new DateTimeImmutable($data)
        );
    }

}