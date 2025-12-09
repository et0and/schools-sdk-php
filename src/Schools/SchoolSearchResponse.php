<?php

declare(strict_types=1);

namespace Schools\Schools;

use Schools\Core\Attributes\Optional;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Contracts\BaseModel;
use Schools\Schools\SchoolSearchResponse\Pagination;

/**
 * @phpstan-type SchoolSearchResponseShape = array{
 *   data?: list<mixed>|null, pagination?: Pagination|null
 * }
 */
final class SchoolSearchResponse implements BaseModel
{
    /** @use SdkModel<SchoolSearchResponseShape> */
    use SdkModel;

    /** @var list<mixed>|null $data */
    #[Optional(list: 'mixed')]
    public ?array $data;

    #[Optional]
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
     * @param Pagination|array{
     *   limit?: int|null, page?: int|null, total?: int|null, totalPages?: int|null
     * } $pagination
     */
    public static function with(
        ?array $data = null,
        Pagination|array|null $pagination = null
    ): self {
        $obj = new self;

        null !== $data && $obj['data'] = $data;
        null !== $pagination && $obj['pagination'] = $pagination;

        return $obj;
    }

    /**
     * @param list<mixed> $data
     */
    public function withData(array $data): self
    {
        $obj = clone $this;
        $obj['data'] = $data;

        return $obj;
    }

    /**
     * @param Pagination|array{
     *   limit?: int|null, page?: int|null, total?: int|null, totalPages?: int|null
     * } $pagination
     */
    public function withPagination(Pagination|array $pagination): self
    {
        $obj = clone $this;
        $obj['pagination'] = $pagination;

        return $obj;
    }
}
