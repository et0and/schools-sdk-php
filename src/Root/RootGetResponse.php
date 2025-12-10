<?php

declare(strict_types=1);

namespace Schools\Root;

use Schools\Core\Attributes\Optional;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Contracts\BaseModel;

/**
 * @phpstan-type RootGetResponseShape = array{
 *   docs?: string|null,
 *   endpoints?: mixed,
 *   message?: string|null,
 *   version?: string|null,
 * }
 */
final class RootGetResponse implements BaseModel
{
    /** @use SdkModel<RootGetResponseShape> */
    use SdkModel;

    #[Optional]
    public ?string $docs;

    #[Optional]
    public mixed $endpoints;

    #[Optional]
    public ?string $message;

    #[Optional]
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
        $self = new self;

        null !== $docs && $self['docs'] = $docs;
        null !== $endpoints && $self['endpoints'] = $endpoints;
        null !== $message && $self['message'] = $message;
        null !== $version && $self['version'] = $version;

        return $self;
    }

    public function withDocs(string $docs): self
    {
        $self = clone $this;
        $self['docs'] = $docs;

        return $self;
    }

    public function withEndpoints(mixed $endpoints): self
    {
        $self = clone $this;
        $self['endpoints'] = $endpoints;

        return $self;
    }

    public function withMessage(string $message): self
    {
        $self = clone $this;
        $self['message'] = $message;

        return $self;
    }

    public function withVersion(string $version): self
    {
        $self = clone $this;
        $self['version'] = $version;

        return $self;
    }
}
