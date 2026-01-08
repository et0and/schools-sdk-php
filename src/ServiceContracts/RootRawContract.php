<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Contracts\BaseResponse;
use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\Root\RootGetResponse;

/**
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
interface RootRawContract
{
    /**
     * @api
     *
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<RootGetResponse>
     *
     * @throws APIException
     */
    public function retrieve(
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse;
}
