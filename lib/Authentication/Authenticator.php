<?php

declare(strict_types=1);

namespace AllegroApi\Authentication;

use AllegroApi\Exception\AuthorizationTokenException;
use DateTimeImmutable;
use GuzzleHttp\Client;


final readonly class Authenticator
{
    public const TOKEN_TYPE_AUTHORIZATION_CODE = 'authorization_code';
    public const TOKEN_TYPE_REFRESH_TOKEN = 'refresh_token';

    public function __construct(
        private Client $client,
        private string $url,
        private string $clientId,
        private string $clientSecret,
        private string $redirectUrl
    )
    {
    }

    public function getAuthorizeUrl(): string
    {
        return $this->url
            . '/auth/oauth/authorize?response_type=code&client_id='
            . $this->clientId
            . '&redirect_uri=' . urlencode($this->redirectUrl)
            . '&prompt=confirm';
    }

    public function fetchToken(string $type, string $code): Token
    {
        $response = $this->client->request(
            'GET',
            $this->url
                . '/auth/oauth/token?grant_type='
                . $type
                . ($type === self::TOKEN_TYPE_REFRESH_TOKEN ? '&refresh_token=' : '&code=')
                . $code
                . '&redirect_uri=' . urlencode($this->redirectUrl),
            [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->clientId . ':' . $this->clientSecret)
                ]
            ]
        );

        $tokens = json_decode($response->getBody()->getContents(), true);
        if (!isset($tokens['access_token'], $tokens['refresh_token'], $tokens['expires_in'])) {
            throw new AuthorizationTokenException('Invalid response from Allegro API');
        }

        $expires = new DateTimeImmutable('now + ' . $tokens['expires_in'] . ' seconds');

        return new Token(
            $tokens['access_token'],
            $tokens['token_type'],
            $tokens['refresh_token'],
            $expires->getTimestamp(),
            $tokens['scope'],
            $tokens['allegro_api'],
            $tokens['jti'],
        );
    }

}