<?php

namespace AllegroApi\Contract;

use AllegroApi\Authentication\Token;


interface TokenRepositoryInterface
{

    public function load(): Token;

    public function save(Token $token): void;

}