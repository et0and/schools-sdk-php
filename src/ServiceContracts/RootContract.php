<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\Root\RootGetResponse;

interface RootContract
{
    /**
     * @api
     *
     * @throws APIException
     */
    public function retrieve(
        ?RequestOptions $requestOptions = null
    ): RootGetResponse;
}
