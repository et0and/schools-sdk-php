<?php

declare(strict_types=1);

namespace Schools\Schools;

use Schools\Core\Attributes\Optional;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Concerns\SdkParams;
use Schools\Core\Contracts\BaseModel;

/**
 * Get all schools with filtering.
 *
 * @see Schools\Services\SchoolsService::list()
 *
 * @phpstan-type SchoolListParamsShape = array{
 *   authority?: string|null,
 *   city?: string|null,
 *   limit?: int|null,
 *   name?: string|null,
 *   orgType?: string|null,
 *   page?: int|null,
 *   status?: string|null,
 *   suburb?: string|null,
 * }
 */
final class SchoolListParams implements BaseModel
{
    /** @use SdkModel<SchoolListParamsShape> */
    use SdkModel;
    use SdkParams;

    /**
     * Filter by education authority.
     */
    #[Optional]
    public ?string $authority;

    /**
     * Filter by city (partial match).
     */
    #[Optional]
    public ?string $city;

    /**
     * Results per page (default: 20, max: 100).
     */
    #[Optional]
    public ?int $limit;

    /**
     * Filter by school name (partial match).
     */
    #[Optional]
    public ?string $name;

    /**
     * Filter by organization type.
     */
    #[Optional]
    public ?string $orgType;

    /**
     * Page number (default: 1).
     */
    #[Optional]
    public ?int $page;

    /**
     * Filter by school status.
     */
    #[Optional]
    public ?string $status;

    /**
     * Filter by suburb (partial match).
     */
    #[Optional]
    public ?string $suburb;

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
        ?string $authority = null,
        ?string $city = null,
        ?int $limit = null,
        ?string $name = null,
        ?string $orgType = null,
        ?int $page = null,
        ?string $status = null,
        ?string $suburb = null,
    ): self {
        $self = new self;

        null !== $authority && $self['authority'] = $authority;
        null !== $city && $self['city'] = $city;
        null !== $limit && $self['limit'] = $limit;
        null !== $name && $self['name'] = $name;
        null !== $orgType && $self['orgType'] = $orgType;
        null !== $page && $self['page'] = $page;
        null !== $status && $self['status'] = $status;
        null !== $suburb && $self['suburb'] = $suburb;

        return $self;
    }

    /**
     * Filter by education authority.
     */
    public function withAuthority(string $authority): self
    {
        $self = clone $this;
        $self['authority'] = $authority;

        return $self;
    }

    /**
     * Filter by city (partial match).
     */
    public function withCity(string $city): self
    {
        $self = clone $this;
        $self['city'] = $city;

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
     * Filter by school name (partial match).
     */
    public function withName(string $name): self
    {
        $self = clone $this;
        $self['name'] = $name;

        return $self;
    }

    /**
     * Filter by organization type.
     */
    public function withOrgType(string $orgType): self
    {
        $self = clone $this;
        $self['orgType'] = $orgType;

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

    /**
     * Filter by school status.
     */
    public function withStatus(string $status): self
    {
        $self = clone $this;
        $self['status'] = $status;

        return $self;
    }

    /**
     * Filter by suburb (partial match).
     */
    public function withSuburb(string $suburb): self
    {
        $self = clone $this;
        $self['suburb'] = $suburb;

        return $self;
    }
}
