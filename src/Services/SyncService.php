<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\ServiceContracts\SyncContract;
use Schools\Sync\SyncGetStatusResponse;
use Schools\Sync\SyncTriggerResponse;

final class SyncService implements SyncContract
{
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Get sync status
     *
     * @throws APIException
     */
    public function getStatus(
        ?RequestOptions $requestOptions = null
    ): SyncGetStatusResponse {
        // @phpstan-ignore-next-line;
        return $this->client->request(
            method: 'get',
            path: 'v1/sync/status',
            options: $requestOptions,
            convert: SyncGetStatusResponse::class,
        );
    }

    /**
     * @api
     *
     * Trigger manual data sync
     *
     * @throws APIException
     */
    public function trigger(
        ?RequestOptions $requestOptions = null
    ): SyncTriggerResponse {
        // @phpstan-ignore-next-line;
        return $this->client->request(
            method: 'post',
            path: 'v1/sync',
            options: $requestOptions,
            convert: SyncTriggerResponse::class,
        );
    }
}
