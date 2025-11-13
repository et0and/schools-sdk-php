<?php

declare(strict_types=1);

namespace Schools\Sync;

use Schools\Core\Attributes\Api;
use Schools\Core\Concerns\SdkModel;
use Schools\Core\Concerns\SdkResponse;
use Schools\Core\Contracts\BaseModel;
use Schools\Core\Conversion\Contracts\ResponseConverter;

/**
 * @phpstan-type SyncGetStatusResponseShape = array{
 *   isStale?: bool|null,
 *   lastSync?: \DateTimeInterface|null,
 *   recordCount?: int|null,
 * }
 */
final class SyncGetStatusResponse implements BaseModel, ResponseConverter
{
    /** @use SdkModel<SyncGetStatusResponseShape> */
    use SdkModel;

    use SdkResponse;

    #[Api(optional: true)]
    public ?bool $isStale;

    #[Api(nullable: true, optional: true)]
    public ?\DateTimeInterface $lastSync;

    #[Api(optional: true)]
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
        $obj = new self;

        null !== $isStale && $obj->isStale = $isStale;
        null !== $lastSync && $obj->lastSync = $lastSync;
        null !== $recordCount && $obj->recordCount = $recordCount;

        return $obj;
    }

    public function withIsStale(bool $isStale): self
    {
        $obj = clone $this;
        $obj->isStale = $isStale;

        return $obj;
    }

    public function withLastSync(?\DateTimeInterface $lastSync): self
    {
        $obj = clone $this;
        $obj->lastSync = $lastSync;

        return $obj;
    }

    public function withRecordCount(int $recordCount): self
    {
        $obj = clone $this;
        $obj->recordCount = $recordCount;

        return $obj;
    }
}
