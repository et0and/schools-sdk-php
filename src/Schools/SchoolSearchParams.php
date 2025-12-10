<?php

declare(strict_types=1);

namespace Schools\Schools;

use Schools\Core\Attributes\Optional;
use Schools\Core\Attributes\Required;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Concerns\SdkParams;
use Schools\Core\Contracts\BaseModel;

/**
 * Full-text search schools by name.
 *
 * @see Schools\Services\SchoolsService::search()
 *
 * @phpstan-type SchoolSearchParamsShape = array{
 *   q: string, limit?: int, page?: int
 * }
 */
final class SchoolSearchParams implements BaseModel
{
    /** @use SdkModel<SchoolSearchParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * Search query.
     */
    #[Required]
    public string $q;

    /**
     * Results per page (default: 20, max: 100).
     */
    #[Optional]
    public ?int $limit;

    /**
     * Page number (default: 1).
     */
    #[Optional]
    public ?int $page;

    /**
     * `new SchoolSearchParams()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * SchoolSearchParams::with(q: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new SchoolSearchParams)->withQ(...)
     * ```
     */
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
        string $q,
        ?int $limit = null,
        ?int $page = null
    ): self {
        $self = new self;

        $self['q'] = $q;

        null !== $limit && $self['limit'] = $limit;
        null !== $page && $self['page'] = $page;

        return $self;
    }

    /**
     * Search query.
     */
    public function withQ(string $q): self
    {
        $self = clone $this;
        $self['q'] = $q;

        return $self;
    }

    /**
     * Results per page (default: 20, max: 100).
     */
    public function withLimit(int $limit): self
    {
        $self = clone $this;
        $self['limit'] = $limit;

        return $self;
    }

    /**
     * Page number (default: 1).
     */
    public function withPage(int $page): self
    {
        $self = clone $this;
        $self['page'] = $page;

        return $self;
    }
}
