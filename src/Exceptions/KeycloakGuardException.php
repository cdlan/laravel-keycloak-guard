<?php

namespace KeycloakGuard\Exceptions;

class KeycloakGuardException extends \UnexpectedValueException
{
    public function __construct(string $message, int $code)
    {
        abort($code, 'KCGuard: ' . $message);
    }
}
