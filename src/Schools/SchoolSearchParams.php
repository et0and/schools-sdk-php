<?php

declare(strict_types=1);

namespace Schools\Schools;

use Schools\Core\Attributes\Api;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Concerns\SdkParams;
use Schools\Core\Contracts\BaseModel;

/**
 * An object containing the method's parameters.
 * Example usage:
 * ```
 * $params = (new SchoolSearchParams); // set properties as needed
 * $client->schools->search(...$params->toArray());
 * ```
 * Full-text search schools by name.
 *
 * @method toArray()
 *   Returns the parameters as an associative array suitable for passing to the client method.
 *
 *   `$client->schools->search(...$params->toArray());`
 *
 * @see Schools\Schools->search
 *
 * @phpstan-type school_search_params = array{q: string, limit?: int, page?: int}
 */
final class SchoolSearchParams implements BaseModel
{
    /** @use SdkModel<school_search_params> */
    use SdkModel;
    use SdkParams;

    /**
     * Search query.
     */
    #[Api]
    public string $q;

    /**
     * Results per page (default: 20, max: 100).
     */
    #[Api(optional: true)]
    public ?int $limit;

    /**
     * Page number (default: 1).
     */
    #[Api(optional: true)]
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
        $obj = new self;

        $obj->q = $q;

        null !== $limit && $obj->limit = $limit;
        null !== $page && $obj->page = $page;

        return $obj;
    }

    /**
     * Search query.
     */
    public function withQ(string $q): self
    {
        $obj = clone $this;
        $obj->q = $q;

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
     * Page number (default: 1).
     */
    public function withPage(int $page): self
    {
        $obj = clone $this;
        $obj->page = $page;

        return $obj;
    }
}
