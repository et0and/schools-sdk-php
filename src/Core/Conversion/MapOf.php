<?php

declare(strict_types=1);

namespace Schools\Core\Conversion;

use Schools\Core\Conversion\Concerns\ArrayOf;
use Schools\Core\Conversion\Contracts\Converter;

/**
 * @internal
 */
final class MapOf implements Converter
{
    use ArrayOf;
}
