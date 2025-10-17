<?php

namespace Schools\Core\Exceptions;

class PermissionDeniedException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Schools Permission Denied Exception';
}
