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
        $obj = new self;

        null !== $error && $obj['error'] = $error;
        null !== $lastSync && $obj['lastSync'] = $lastSync;
        null !== $recordCount && $obj['recordCount'] = $recordCount;
        null !== $success && $obj['success'] = $success;

        return $obj;
    }

    public function withError(string $error): self
    {
        $obj = clone $this;
        $obj['error'] = $error;

        return $obj;
    }

    public function withLastSync(\DateTimeInterface $lastSync): self
    {
        $obj = clone $this;
        $obj['lastSync'] = $lastSync;

        return $obj;
    }

    public function withRecordCount(int $recordCount): self
    {
        $obj = clone $this;
        $obj['recordCount'] = $recordCount;

        return $obj;
    }

    public function withSuccess(bool $success): self
    {
        $obj = clone $this;
        $obj['success'] = $success;

        return $obj;
    }
}
