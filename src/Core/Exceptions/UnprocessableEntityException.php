<?php

namespace Schools\Core\Exceptions;

class UnprocessableEntityException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Schools Unprocessable Entity Exception';
}
