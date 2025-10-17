<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Exceptions\APIException;
use Schools\Health\HealthCheckResponse;
use Schools\RequestOptions;

interface HealthContract
{
    /**
     * @api
     *
     * @throws APIException
     */
    public function check(
        ?RequestOptions $requestOptions = null
    ): HealthCheckResponse;
}
