<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\Sync\SyncGetStatusResponse;
use Schools\Sync\SyncTriggerResponse;

interface SyncContract
{
    /**
     * @api
     *
     * @throws APIException
     */
    public function getStatus(
        ?RequestOptions $requestOptions = null
    ): SyncGetStatusResponse;

    /**
     * @api
     *
     * @throws APIException
     */
    public function trigger(
        ?RequestOptions $requestOptions = null
    ): SyncTriggerResponse;
}
