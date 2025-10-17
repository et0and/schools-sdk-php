<?php

namespace Schools\Core\Exceptions;

class BadRequestException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Schools Bad Request Exception';
}
