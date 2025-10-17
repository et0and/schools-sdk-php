<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\Schools\SchoolGetResponse;
use Schools\Schools\SchoolListResponse;
use Schools\Schools\SchoolSearchResponse;

use const Schools\Core\OMIT as omit;

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
     * @param string $authority Filter by education authority
     * @param string $city Filter by city (partial match)
     * @param int $limit Results per page (default: 20, max: 100)
     * @param string $name Filter by school name (partial match)
     * @param string $orgType Filter by organization type
     * @param int $page Page number (default: 1)
     * @param string $status Filter by school status
     * @param string $suburb Filter by suburb (partial match)
     *
     * @throws APIException
     */
    public function list(
        $authority = omit,
        $city = omit,
        $limit = omit,
        $name = omit,
        $orgType = omit,
        $page = omit,
        $status = omit,
        $suburb = omit,
        ?RequestOptions $requestOptions = null,
    ): SchoolListResponse;

    /**
     * @api
     *
     * @param array<string, mixed> $params
     *
     * @throws APIException
     */
    public function listRaw(
        array $params,
        ?RequestOptions $requestOptions = null
    ): SchoolListResponse;

    /**
     * @api
     *
     * @param int $limit
     * @param int $page
     *
     * @throws APIException
     */
    public function byAuthority(
        string $authority,
        $limit = omit,
        $page = omit,
        ?RequestOptions $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param array<string, mixed> $params
     *
     * @throws APIException
     */
    public function byAuthorityRaw(
        string $authority,
        array $params,
        ?RequestOptions $requestOptions = null
    ): mixed;

    /**
     * @api
     *
     * @param int $limit
     * @param int $page
     *
     * @throws APIException
     */
    public function byCity(
        string $city,
        $limit = omit,
        $page = omit,
        ?RequestOptions $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param array<string, mixed> $params
     *
     * @throws APIException
     */
    public function byCityRaw(
        string $city,
        array $params,
        ?RequestOptions $requestOptions = null
    ): mixed;

    /**
     * @api
     *
     * @param int $limit
     * @param int $page
     *
     * @throws APIException
     */
    public function byStatus(
        string $status,
        $limit = omit,
        $page = omit,
        ?RequestOptions $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param array<string, mixed> $params
     *
     * @throws APIException
     */
    public function byStatusRaw(
        string $status,
        array $params,
        ?RequestOptions $requestOptions = null
    ): mixed;

    /**
     * @api
     *
     * @param int $limit
     * @param int $page
     *
     * @throws APIException
     */
    public function bySuburb(
        string $suburb,
        $limit = omit,
        $page = omit,
        ?RequestOptions $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param array<string, mixed> $params
     *
     * @throws APIException
     */
    public function bySuburbRaw(
        string $suburb,
        array $params,
        ?RequestOptions $requestOptions = null
    ): mixed;

    /**
     * @api
     *
     * @param string $q Search query
     * @param int $limit Results per page (default: 20, max: 100)
     * @param int $page Page number (default: 1)
     *
     * @throws APIException
     */
    public function search(
        $q,
        $limit = omit,
        $page = omit,
        ?RequestOptions $requestOptions = null
    ): SchoolSearchResponse;

    /**
     * @api
     *
     * @param array<string, mixed> $params
     *
     * @throws APIException
     */
    public function searchRaw(
        array $params,
        ?RequestOptions $requestOptions = null
    ): SchoolSearchResponse;
}
