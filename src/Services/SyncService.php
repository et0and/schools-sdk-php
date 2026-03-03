<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\ServiceContracts\SyncContract;
use Schools\Sync\SyncGetStatusResponse;
use Schools\Sync\SyncTriggerResponse;

/**
 * Data sync operations.
 *
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
final class SyncService implements SyncContract
{
    /**
     * @api
     */
    public SyncRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new SyncRawService($client);
    }

    /**
     * @api
     *
     * Get sync status
     *
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function getStatus(
        RequestOptions|array|null $requestOptions = null
    ): SyncGetStatusResponse {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->getStatus(requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Trigger manual data sync
     *
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function trigger(
        RequestOptions|array|null $requestOptions = null
    ): SyncTriggerResponse {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->trigger(requestOptions: $requestOptions);

        return $response->parse();
    }
}
