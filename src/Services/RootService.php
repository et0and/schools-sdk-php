<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\Root\RootGetResponse;
use Schools\ServiceContracts\RootContract;

final class RootService implements RootContract
{
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * API root information
     *
     * @throws APIException
     */
    public function retrieve(
        ?RequestOptions $requestOptions = null
    ): RootGetResponse {
        // @phpstan-ignore-next-line;
        return $this->client->request(
            method: 'get',
            path: '',
            options: $requestOptions,
            convert: RootGetResponse::class,
        );
    }
}
