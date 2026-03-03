<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Contracts\BaseResponse;
use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\ServiceContracts\SyncRawContract;
use Schools\Sync\SyncGetStatusResponse;
use Schools\Sync\SyncTriggerResponse;

/**
 * Data sync operations.
 *
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
final class SyncRawService implements SyncRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Get sync status
     *
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<SyncGetStatusResponse>
     *
     * @throws APIException
     */
    public function getStatus(
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse {
        // @phpstan-ignore-next-line return.type
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
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<SyncTriggerResponse>
     *
     * @throws APIException
     */
    public function trigger(
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse {
        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'post',
            path: 'v1/sync',
            options: $requestOptions,
            convert: SyncTriggerResponse::class,
        );
    }
}
