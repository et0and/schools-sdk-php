<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Exceptions\APIException;
use Schools\Health\HealthCheckResponse;
use Schools\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
interface HealthContract
{
    /**
     * @api
     *
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function check(
        RequestOptions|array|null $requestOptions = null
    ): HealthCheckResponse;
}
