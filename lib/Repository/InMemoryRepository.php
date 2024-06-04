<?php

namespace AllegroApi\Repository;

use AllegroApi\Authentication\Token;
use AllegroApi\Contract\TokenRepositoryInterface;


final class InMemoryRepository implements TokenRepositoryInterface
{

    public function __construct(
        private Token $token
    )
    {
    }

    public function load(): Token
    {
        return $this->token;
    }


    public function save(Token $token): void
    {
        $this->token = $token;
    }
}