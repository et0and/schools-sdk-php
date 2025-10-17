<?php

namespace Schools\Core\Exceptions;

class RateLimitException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Schools Rate Limit Exception';
}
