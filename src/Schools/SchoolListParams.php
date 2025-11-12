<?php

declare(strict_types=1);

namespace Schools\Schools;

use Schools\Core\Attributes\Api;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Concerns\SdkParams;
use Schools\Core\Contracts\BaseModel;

/**
 * Get all schools with filtering.
 *
 * @see Schools\Schools->list
 *
 * @phpstan-type SchoolListParamsShape = array{
 *   authority?: string,
 *   city?: string,
 *   limit?: int,
 *   name?: string,
 *   org_type?: string,
 *   page?: int,
 *   status?: string,
 *   suburb?: string,
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
    #[Api(optional: true)]
    public ?string $authority;

    /**
     * Filter by city (partial match).
     */
    #[Api(optional: true)]
    public ?string $city;

    /**
     * Results per page (default: 20, max: 100).
     */
    #[Api(optional: true)]
    public ?int $limit;

    /**
     * Filter by school name (partial match).
     */
    #[Api(optional: true)]
    public ?string $name;

    /**
     * Filter by organization type.
     */
    #[Api(optional: true)]
    public ?string $org_type;

    /**
     * Page number (default: 1).
     */
    #[Api(optional: true)]
    public ?int $page;

    /**
     * Filter by school status.
     */
    #[Api(optional: true)]
    public ?string $status;

    /**
     * Filter by suburb (partial match).
     */
    #[Api(optional: true)]
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
        ?string $org_type = null,
        ?int $page = null,
        ?string $status = null,
        ?string $suburb = null,
    ): self {
        $obj = new self;

        null !== $authority && $obj->authority = $authority;
        null !== $city && $obj->city = $city;
        null !== $limit && $obj->limit = $limit;
        null !== $name && $obj->name = $name;
        null !== $org_type && $obj->org_type = $org_type;
        null !== $page && $obj->page = $page;
        null !== $status && $obj->status = $status;
        null !== $suburb && $obj->suburb = $suburb;

        return $obj;
    }

    /**
     * Filter by education authority.
     */
    public function withAuthority(string $authority): self
    {
        $obj = clone $this;
        $obj->authority = $authority;

        return $obj;
    }

    /**
     * Filter by city (partial match).
     */
    public function withCity(string $city): self
    {
        $obj = clone $this;
        $obj->city = $city;

        return $obj;
    }

    /**
     * Results per page (default: 20, max: 100).
     */
    public function withLimit(int $limit): self
    {
        $obj = clone $this;
        $obj->limit = $limit;

        return $obj;
    }

    /**
     * Filter by school name (partial match).
     */
    public function withName(string $name): self
    {
        $obj = clone $this;
        $obj->name = $name;

        return $obj;
    }

    /**
     * Filter by organization type.
     */
    public function withOrgType(string $orgType): self
    {
        $obj = clone $this;
        $obj->org_type = $orgType;

        return $obj;
    }

    /**
     * Page number (default: 1).
     */
    public function withPage(int $page): self
    {
        $obj = clone $this;
        $obj->page = $page;

        return $obj;
    }

    /**
     * Filter by school status.
     */
    public function withStatus(string $status): self
    {
        $obj = clone $this;
        $obj->status = $status;

        return $obj;
    }

    /**
     * Filter by suburb (partial match).
     */
    public function withSuburb(string $suburb): self
    {
        $obj = clone $this;
        $obj->suburb = $suburb;

        return $obj;
    }
}
