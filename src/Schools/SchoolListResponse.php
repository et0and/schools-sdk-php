<?php

declare(strict_types=1);

namespace Schools\Schools;

use Schools\Core\Attributes\Optional;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Contracts\BaseModel;
use Schools\Schools\SchoolListResponse\Pagination;

/**
 * @phpstan-import-type PaginationShape from \Schools\Schools\SchoolListResponse\Pagination
 *
 * @phpstan-type SchoolListResponseShape = array{
 *   data?: list<mixed>|null, pagination?: null|Pagination|PaginationShape
 * }
 */
final class SchoolListResponse implements BaseModel
{
    /** @use SdkModel<SchoolListResponseShape> */
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
     * @param list<mixed>|null $data
     * @param Pagination|PaginationShape|null $pagination
     */
    public static function with(
        ?array $data = null,
        Pagination|array|null $pagination = null
    ): self {
        $self = new self;

        null !== $data && $self['data'] = $data;
        null !== $pagination && $self['pagination'] = $pagination;

        return $self;
    }

    /**
     * @param list<mixed> $data
     */
    public function withData(array $data): self
    {
        $self = clone $this;
        $self['data'] = $data;

        return $self;
    }

    /**
     * @param Pagination|PaginationShape $pagination
     */
    public function withPagination(Pagination|array $pagination): self
    {
        $self = clone $this;
        $self['pagination'] = $pagination;

        return $self;
    }
}
