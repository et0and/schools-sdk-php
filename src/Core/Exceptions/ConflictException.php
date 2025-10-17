<?php

namespace Schools\Core\Exceptions;

class ConflictException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Schools Conflict Exception';
}
