<?php

namespace AllegroApi\Authentication;

use DateTimeImmutable;
use DateTimeInterface;
use InvalidArgumentException;


final readonly class Token
{

    public function __construct(
        private string $accessToken,
        private string $tokenType,
        private string $refreshToken,
        private int $expiresIn,
        private string $scope,
        private bool $allegroApi,
        private string $jti
    )
    {
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function isAllegroApi(): bool
    {
        return $this->allegroApi;
    }

    public function getJti(): string
    {
        return $this->jti;
    }

    public function isExpired(?DateTimeInterface $now = null): bool
    {
        if (!$now) {
            $now = new DateTimeImmutable();
        }
        
        return $now->getTimestamp() > $this->getExpiresIn();
    }


    public function toArray(): array
    {
        return [
            'access_token' => $this->accessToken,
            'token_type' => $this->tokenType,
            'refresh_token' => $this->refreshToken,
            'expires_in' => $this->expiresIn,
            'scope' => $this->scope,
            'allegro_api' => $this->allegroApi,
            'jti' => $this->jti,
        ];
    }


    /**
     * @throws InvalidArgumentException
     */
    public static function fromArray(array $data): self
    {
        if (!isset(
            $data['access_token'],
            $data['token_type'],
            $data['refresh_token'],
            $data['expires_in'],
            $data['scope'],
            $data['allegro_api'],
            $data['jti']
        )) {
            throw new InvalidArgumentException();
        }

        return new self(
            $data['access_token'],
            $data['token_type'],
            $data['refresh_token'],
            $data['expires_in'],
            $data['scope'],
            $data['allegro_api'],
            $data['jti'],
        );
    }

}