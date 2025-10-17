<?php

declare(strict_types=1);

namespace Schools\Core\Conversion\Contracts;

use Schools\Core\Conversion\CoerceState;
use Schools\Core\Conversion\DumpState;

/**
 * @internal
 */
interface Converter
{
    /**
     * @internal
     */
    public function coerce(mixed $value, CoerceState $state): mixed;

    /**
     * @internal
     */
    public function dump(mixed $value, DumpState $state): mixed;
}
