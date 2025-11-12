<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\Schools\SchoolByAuthorityParams;
use Schools\Schools\SchoolByCityParams;
use Schools\Schools\SchoolByStatusParams;
use Schools\Schools\SchoolBySuburbParams;
use Schools\Schools\SchoolGetResponse;
use Schools\Schools\SchoolListParams;
use Schools\Schools\SchoolListResponse;
use Schools\Schools\SchoolSearchParams;
use Schools\Schools\SchoolSearchResponse;

interface SchoolsContract
{
    /**
     * @api
     *
     * @throws APIException
     */
    public function retrieve(
        string $schoolID,
        ?RequestOptions $requestOptions = null
    ): SchoolGetResponse;

    /**
     * @api
     *
     * @param array<mixed>|SchoolListParams $params
     *
     * @throws APIException
     */
    public function list(
        array|SchoolListParams $params,
        ?RequestOptions $requestOptions = null
    ): SchoolListResponse;

    /**
     * @api
     *
     * @param array<mixed>|SchoolByAuthorityParams $params
     *
     * @throws APIException
     */
    public function byAuthority(
        string $authority,
        array|SchoolByAuthorityParams $params,
        ?RequestOptions $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param array<mixed>|SchoolByCityParams $params
     *
     * @throws APIException
     */
    public function byCity(
        string $city,
        array|SchoolByCityParams $params,
        ?RequestOptions $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param array<mixed>|SchoolByStatusParams $params
     *
     * @throws APIException
     */
    public function byStatus(
        string $status,
        array|SchoolByStatusParams $params,
        ?RequestOptions $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param array<mixed>|SchoolBySuburbParams $params
     *
     * @throws APIException
     */
    public function bySuburb(
        string $suburb,
        array|SchoolBySuburbParams $params,
        ?RequestOptions $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param array<mixed>|SchoolSearchParams $params
     *
     * @throws APIException
     */
    public function search(
        array|SchoolSearchParams $params,
        ?RequestOptions $requestOptions = null
    ): SchoolSearchResponse;
}
