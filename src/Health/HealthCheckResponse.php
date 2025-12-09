<?php

declare(strict_types=1);

namespace Schools\Health;

use Schools\Core\Attributes\Optional;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Contracts\BaseModel;

/**
 * @phpstan-type HealthCheckResponseShape = array{
 *   status?: string|null, timestamp?: \DateTimeInterface|null
 * }
 */
final class HealthCheckResponse implements BaseModel
{
    /** @use SdkModel<HealthCheckResponseShape> */
    use SdkModel;

    #[Optional]
    public ?string $status;

    #[Optional]
    public ?\DateTimeInterface $timestamp;

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
        ?string $status = null,
        ?\DateTimeInterface $timestamp = null
    ): self {
        $obj = new self;

        null !== $status && $obj['status'] = $status;
        null !== $timestamp && $obj['timestamp'] = $timestamp;

        return $obj;
    }

    public function withStatus(string $status): self
    {
        $obj = clone $this;
        $obj['status'] = $status;

        return $obj;
    }

    public function withTimestamp(\DateTimeInterface $timestamp): self
    {
        $obj = clone $this;
        $obj['timestamp'] = $timestamp;

        return $obj;
    }
}
