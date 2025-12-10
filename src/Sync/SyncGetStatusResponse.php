<?php

declare(strict_types=1);

namespace Schools\Sync;

use Schools\Core\Attributes\Optional;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Contracts\BaseModel;

/**
 * @phpstan-type SyncGetStatusResponseShape = array{
 *   isStale?: bool|null,
 *   lastSync?: \DateTimeInterface|null,
 *   recordCount?: int|null,
 * }
 */
final class SyncGetStatusResponse implements BaseModel
{
    /** @use SdkModel<SyncGetStatusResponseShape> */
    use SdkModel;

    #[Optional]
    public ?bool $isStale;

    #[Optional(nullable: true)]
    public ?\DateTimeInterface $lastSync;

    #[Optional]
    public ?int $recordCount;

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
        ?bool $isStale = null,
        ?\DateTimeInterface $lastSync = null,
        ?int $recordCount = null,
    ): self {
        $self = new self;

        null !== $isStale && $self['isStale'] = $isStale;
        null !== $lastSync && $self['lastSync'] = $lastSync;
        null !== $recordCount && $self['recordCount'] = $recordCount;

        return $self;
    }

    public function withIsStale(bool $isStale): self
    {
        $self = clone $this;
        $self['isStale'] = $isStale;

        return $self;
    }

    public function withLastSync(?\DateTimeInterface $lastSync): self
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
}
