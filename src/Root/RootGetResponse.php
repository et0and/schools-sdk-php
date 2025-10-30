<?php

declare(strict_types=1);

namespace Schools\Root;

use Schools\Core\Attributes\Api;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Concerns\SdkResponse;
use Schools\Core\Contracts\BaseModel;
use Schools\Core\Conversion\Contracts\ResponseConverter;

/**
 * @phpstan-type RootGetResponseShape = array{
 *   docs?: string, endpoints?: mixed, message?: string, version?: string
 * }
 */
final class RootGetResponse implements BaseModel, ResponseConverter
{
    /** @use SdkModel<RootGetResponseShape> */
    use SdkModel;

    use SdkResponse;

    #[Api(optional: true)]
    public ?string $docs;

    #[Api(optional: true)]
    public mixed $endpoints;

    #[Api(optional: true)]
    public ?string $message;

    #[Api(optional: true)]
    public ?string $version;

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
        ?string $docs = null,
        mixed $endpoints = null,
        ?string $message = null,
        ?string $version = null,
    ): self {
        $obj = new self;

        null !== $docs && $obj->docs = $docs;
        null !== $endpoints && $obj->endpoints = $endpoints;
        null !== $message && $obj->message = $message;
        null !== $version && $obj->version = $version;

        return $obj;
    }

    public function withDocs(string $docs): self
    {
        $obj = clone $this;
        $obj->docs = $docs;

        return $obj;
    }

    public function withEndpoints(mixed $endpoints): self
    {
        $obj = clone $this;
        $obj->endpoints = $endpoints;

        return $obj;
    }

    public function withMessage(string $message): self
    {
        $obj = clone $this;
        $obj->message = $message;

        return $obj;
    }

    public function withVersion(string $version): self
    {
        $obj = clone $this;
        $obj->version = $version;

        return $obj;
    }
}
