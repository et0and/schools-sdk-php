<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Contracts\BaseResponse;
use Schools\Core\Exceptions\APIException;
use Schools\Health\HealthCheckResponse;
use Schools\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
interface HealthRawContract
{
    /**
     * @api
     *
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<HealthCheckResponse>
     *
     * @throws APIException
     */
    public function check(
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse;
}
