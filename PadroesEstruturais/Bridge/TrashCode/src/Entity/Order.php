<?php

namespace Src\Entity;

class Order
{

    private string $client;

    private float $value;

    private int $numberOfItens;

    public function __construct(string $client, float $value, int $numberOfItens)
    {
        $this->client = $client;

        $this->value = $value;

        $this->numberOfItens = $numberOfItens;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function getValeu()
    {
        return $this->value;
    }

    public function getNumberOfItens()
    {
        return $this->numberOfItens;
    }

}