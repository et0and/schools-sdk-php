<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Contracts\BaseResponse;
use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\Sync\SyncGetStatusResponse;
use Schools\Sync\SyncTriggerResponse;

interface SyncRawContract
{
    /**
     * @api
     *
     * @return BaseResponse<SyncGetStatusResponse>
     *
     * @throws APIException
     */
    public function getStatus(
        ?RequestOptions $requestOptions = null
    ): BaseResponse;

    /**
     * @api
     *
     * @return BaseResponse<SyncTriggerResponse>
     *
     * @throws APIException
     */
    public function trigger(
        ?RequestOptions $requestOptions = null
    ): BaseResponse;
}
