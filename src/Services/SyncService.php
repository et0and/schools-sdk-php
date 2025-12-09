<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Contracts\BaseResponse;
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
        /** @var BaseResponse<SyncGetStatusResponse> */
        $response = $this->client->request(
            method: 'get',
            path: 'v1/sync/status',
            options: $requestOptions,
            convert: SyncGetStatusResponse::class,
        );

        return $response->parse();
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
        /** @var BaseResponse<SyncTriggerResponse> */
        $response = $this->client->request(
            method: 'post',
            path: 'v1/sync',
            options: $requestOptions,
            convert: SyncTriggerResponse::class,
        );

        return $response->parse();
    }
}
