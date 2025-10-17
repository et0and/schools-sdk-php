<?php

namespace Schools\Core\Exceptions;

class SchoolsException extends \Exception
{
    /** @var string */
    protected const DESC = 'Schools Error';

    public function __construct(string $message, int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct($this::DESC.PHP_EOL.$message, $code, $previous);
    }
}
