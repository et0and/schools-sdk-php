<?php

declare(strict_types=1);

namespace Schools\Schools;

use Schools\Core\Attributes\Api;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Concerns\SdkResponse;
use Schools\Core\Contracts\BaseModel;
use Schools\Core\Conversion\Contracts\ResponseConverter;
use Schools\Schools\SchoolListResponse\Pagination;

/**
 * @phpstan-type school_list_response = array{
 *   data?: list<mixed>, pagination?: Pagination
 * }
 */
final class SchoolListResponse implements BaseModel, ResponseConverter
{
    /** @use SdkModel<school_list_response> */
    use SdkModel;

    use SdkResponse;

    /** @var list<mixed>|null $data */
    #[Api(list: 'mixed', optional: true)]
    public ?array $data;

    #[Api(optional: true)]
    public ?Pagination $pagination;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<mixed> $data
     */
    public static function with(
        ?array $data = null,
        ?Pagination $pagination = null
    ): self {
        $obj = new self;

        null !== $data && $obj->data = $data;
        null !== $pagination && $obj->pagination = $pagination;

        return $obj;
    }

    /**
     * @param list<mixed> $data
     */
    public function withData(array $data): self
    {
        $obj = clone $this;
        $obj->data = $data;

        return $obj;
    }

    public function withPagination(Pagination $pagination): self
    {
        $obj = clone $this;
        $obj->pagination = $pagination;

        return $obj;
    }
}
