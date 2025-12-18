<?php

declare(strict_types=1);

namespace Schools\Sync;

use Schools\Core\Attributes\Optional;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Contracts\BaseModel;

/**
 * @phpstan-type SyncTriggerResponseShape = array{
 *   error?: string|null,
 *   lastSync?: \DateTimeInterface|null,
 *   recordCount?: int|null,
 *   success?: bool|null,
 * }
 */
final class SyncTriggerResponse implements BaseModel
{
    /** @use SdkModel<SyncTriggerResponseShape> */
    use SdkModel;

    #[Optional]
    public ?string $error;

    #[Optional]
    public ?\DateTimeInterface $lastSync;

    #[Optional]
    public ?int $recordCount;

    #[Optional]
    public ?bool $success;

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
        ?string $error = null,
        ?\DateTimeInterface $lastSync = null,
        ?int $recordCount = null,
        ?bool $success = null,
    ): self {
        $self = new self;

        null !== $error && $self['error'] = $error;
        null !== $lastSync && $self['lastSync'] = $lastSync;
        null !== $recordCount && $self['recordCount'] = $recordCount;
        null !== $success && $self['success'] = $success;

        return $self;
    }

    public function withError(string $error): self
    {
        $self = clone $this;
        $self['error'] = $error;

        return $self;
    }

    public function withLastSync(\DateTimeInterface $lastSync): self
    {
        $self = clone $this;
        $self['lastSync'] = $lastSync;

        return $self;
    }

    public function withRecordCount(int $recordCount): self
    {
        $self = clone $this;
        $self['recordCount'] = $recordCount;

        return $self;
    }

    public function withSuccess(bool $success): self
    {
        $self = clone $this;
        $self['success'] = $success;

        return $self;
    }
}
