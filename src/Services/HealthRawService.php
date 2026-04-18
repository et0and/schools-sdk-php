<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Contracts\BaseResponse;
use Schools\Core\Exceptions\APIException;
use Schools\Health\HealthCheckResponse;
use Schools\RequestOptions;
use Schools\ServiceContracts\HealthRawContract;

/**
 * API health and status.
 *
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
final class HealthRawService implements HealthRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * API health check
     *
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<HealthCheckResponse>
     *
     * @throws APIException
     */
    public function check(
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse {
        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'health',
            options: $requestOptions,
            convert: HealthCheckResponse::class,
        );
    }
}
