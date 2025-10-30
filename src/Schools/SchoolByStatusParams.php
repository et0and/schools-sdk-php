<?php

declare(strict_types=1);

namespace Schools\Schools;

use Schools\Core\Attributes\Api;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Concerns\SdkParams;
use Schools\Core\Contracts\BaseModel;

/**
 * Get schools by status.
 *
 * @see Schools\Schools->byStatus
 *
 * @phpstan-type SchoolByStatusParamsShape = array{limit?: int, page?: int}
 */
final class SchoolByStatusParams implements BaseModel
{
    /** @use SdkModel<SchoolByStatusParamsShape> */
    use SdkModel;
    use SdkParams;

    #[Api(optional: true)]
    public ?int $limit;

    #[Api(optional: true)]
    public ?int $page;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(?int $limit = null, ?int $page = null): self
    {
        $obj = new self;

        null !== $limit && $obj->limit = $limit;
        null !== $page && $obj->page = $page;

        return $obj;
    }

    public function withLimit(int $limit): self
    {
        $obj = clone $this;
        $obj->limit = $limit;

        return $obj;
    }

    public function withPage(int $page): self
    {
        $obj = clone $this;
        $obj->page = $page;

        return $obj;
    }
}
