<?php

declare(strict_types=1);

namespace Schools\Schools\SchoolListResponse;

use Schools\Core\Attributes\Api;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Contracts\BaseModel;

/**
 * @phpstan-type PaginationShape = array{
 *   limit?: int|null, page?: int|null, total?: int|null, totalPages?: int|null
 * }
 */
final class Pagination implements BaseModel
{
    /** @use SdkModel<PaginationShape> */
    use SdkModel;

    #[Api(optional: true)]
    public ?int $limit;

    #[Api(optional: true)]
    public ?int $page;

    #[Api(optional: true)]
    public ?int $total;

    #[Api(optional: true)]
    public ?int $totalPages;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(
        ?int $limit = null,
        ?int $page = null,
        ?int $total = null,
        ?int $totalPages = null,
    ): self {
        $obj = new self;

        null !== $limit && $obj->limit = $limit;
        null !== $page && $obj->page = $page;
        null !== $total && $obj->total = $total;
        null !== $totalPages && $obj->totalPages = $totalPages;

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

    public function withTotal(int $total): self
    {
        $obj = clone $this;
        $obj->total = $total;

        return $obj;
    }

    public function withTotalPages(int $totalPages): self
    {
        $obj = clone $this;
        $obj->totalPages = $totalPages;

        return $obj;
    }
}
