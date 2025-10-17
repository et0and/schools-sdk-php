<?php

namespace Schools\Core\Exceptions;

class AuthenticationException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Schools Authentication Exception';
}
