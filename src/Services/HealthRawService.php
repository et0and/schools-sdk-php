<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Contracts\BaseResponse;
use Schools\Core\Exceptions\APIException;
use Schools\Health\HealthCheckResponse;
use Schools\RequestOptions;
use Schools\ServiceContracts\HealthRawContract;

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
     * @return BaseResponse<HealthCheckResponse>
     *
     * @throws APIException
     */
    public function check(?RequestOptions $requestOptions = null): BaseResponse
    {
        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'health',
            options: $requestOptions,
            convert: HealthCheckResponse::class,
        );
    }
}
