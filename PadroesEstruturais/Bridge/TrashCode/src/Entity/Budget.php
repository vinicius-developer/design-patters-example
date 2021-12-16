<?php

namespace Src\Entity;

use DateTime;
use DateTimeImmutable;

class Budget 
{

    private string $client;

    private DateTime $createAt;

    public function __construct(string $client)
    {
        $this->createAt = new DateTimeImmutable();

        $this->client = $client;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function getCreatedAt()
    {
        return $this->createAt;
    }

}