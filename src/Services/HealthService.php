<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Exceptions\APIException;
use Schools\Health\HealthCheckResponse;
use Schools\RequestOptions;
use Schools\ServiceContracts\HealthContract;

final class HealthService implements HealthContract
{
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * API health check
     *
     * @throws APIException
     */
    public function check(
        ?RequestOptions $requestOptions = null
    ): HealthCheckResponse {
        // @phpstan-ignore-next-line;
        return $this->client->request(
            method: 'get',
            path: 'health',
            options: $requestOptions,
            convert: HealthCheckResponse::class,
        );
    }
}
