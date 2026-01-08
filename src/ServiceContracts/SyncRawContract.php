<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Contracts\BaseResponse;
use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\Sync\SyncGetStatusResponse;
use Schools\Sync\SyncTriggerResponse;

/**
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
interface SyncRawContract
{
    /**
     * @api
     *
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<SyncGetStatusResponse>
     *
     * @throws APIException
     */
    public function getStatus(
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse;

    /**
     * @api
     *
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<SyncTriggerResponse>
     *
     * @throws APIException
     */
    public function trigger(
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse;
}
