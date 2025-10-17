<?php

namespace Schools\Core\Exceptions;

class NotFoundException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Schools Not Found Exception';
}
