<?php

declare(strict_types=1);

namespace AllegroApi\Middleware;

use AllegroApi\Authentication\Authenticator;
use AllegroApi\Authentication\Token;
use AllegroApi\Contract\TokenRepositoryInterface;
use Psr\Http\Message\RequestInterface;

final readonly class PreRequestMiddleware
{
    public function __construct(
        private TokenRepositoryInterface $tokenRepository,
        private Authenticator $authenticator
    ) {
    }

    public function __invoke(callable $handler)
    {
        $token = $this->tokenRepository->load();

        return function (RequestInterface $request, $options) use ($handler, $token) {
            if ($token->isExpired()) {
                $token = $this->handleExpired($token);
                $this->tokenRepository->save($token);
            }

            $request = $request->withHeader('Authorization', sprintf('Bearer %s', $token->getAccessToken()));

            return $handler($request, $options);
        };
    }

    private function handleExpired(Token $token): Token
    {
        $refreshToken = $token->getRefreshToken();

        return $this->authenticator->fetchToken(Authenticator::TOKEN_TYPE_REFRESH_TOKEN, $refreshToken);
    }

}