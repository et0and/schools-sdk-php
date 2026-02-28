<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Exceptions\APIException;
use Schools\Health\HealthCheckResponse;
use Schools\RequestOptions;
use Schools\ServiceContracts\HealthContract;

/**
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
final class HealthService implements HealthContract
{
    /**
     * @api
     */
    public HealthRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new HealthRawService($client);
    }

    /**
     * @api
     *
     * API health check
     *
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function check(
        RequestOptions|array|null $requestOptions = null
    ): HealthCheckResponse {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->check(requestOptions: $requestOptions);

        return $response->parse();
    }
}
