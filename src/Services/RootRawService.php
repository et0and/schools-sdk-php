<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Contracts\BaseResponse;
use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\Root\RootGetResponse;
use Schools\ServiceContracts\RootRawContract;

/**
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
final class RootRawService implements RootRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * API root information
     *
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<RootGetResponse>
     *
     * @throws APIException
     */
    public function retrieve(
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse {
        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: '',
            options: $requestOptions,
            convert: RootGetResponse::class,
        );
    }
}
