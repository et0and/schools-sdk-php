<?php

declare(strict_types=1);

namespace Schools\Schools;

use Schools\Core\Attributes\Optional;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Contracts\BaseModel;

/**
 * @phpstan-type SchoolGetResponseShape = array{data?: mixed}
 */
final class SchoolGetResponse implements BaseModel
{
    /** @use SdkModel<SchoolGetResponseShape> */
    use SdkModel;

    #[Optional]
    public mixed $data;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(mixed $data = null): self
    {
        $self = new self;

        null !== $data && $self['data'] = $data;

        return $self;
    }

    public function withData(mixed $data): self
    {
        $self = clone $this;
        $self['data'] = $data;

        return $self;
    }
}
