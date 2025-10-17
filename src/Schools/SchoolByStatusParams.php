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
 * $params = (new SchoolByStatusParams); // set properties as needed
 * $client->schools->byStatus(...$params->toArray());
 * ```
 * Get schools by status.
 *
 * @method toArray()
 *   Returns the parameters as an associative array suitable for passing to the client method.
 *
 *   `$client->schools->byStatus(...$params->toArray());`
 *
 * @see Schools\Schools->byStatus
 *
 * @phpstan-type school_by_status_params = array{limit?: int, page?: int}
 */
final class SchoolByStatusParams implements BaseModel
{
    /** @use SdkModel<school_by_status_params> */
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
