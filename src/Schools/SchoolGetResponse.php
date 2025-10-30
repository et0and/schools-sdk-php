<?php

declare(strict_types=1);

namespace Schools\Schools;

use Schools\Core\Attributes\Api;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Concerns\SdkResponse;
use Schools\Core\Contracts\BaseModel;
use Schools\Core\Conversion\Contracts\ResponseConverter;

/**
 * @phpstan-type SchoolGetResponseShape = array{data?: mixed}
 */
final class SchoolGetResponse implements BaseModel, ResponseConverter
{
    /** @use SdkModel<SchoolGetResponseShape> */
    use SdkModel;

    use SdkResponse;

    #[Api(optional: true)]
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
        $obj = new self;

        null !== $data && $obj->data = $data;

        return $obj;
    }

    public function withData(mixed $data): self
    {
        $obj = clone $this;
        $obj->data = $data;

        return $obj;
    }
}
