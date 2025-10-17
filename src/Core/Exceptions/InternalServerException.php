<?php

namespace Schools\Core\Exceptions;

class InternalServerException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Schools Internal Server Exception';
}
