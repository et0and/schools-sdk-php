<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Exceptions\APIException;
use Schools\RequestOptions;
use Schools\Schools\SchoolGetResponse;
use Schools\Schools\SchoolListResponse;
use Schools\Schools\SchoolSearchResponse;

/**
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
interface SchoolsContract
{
    /**
     * @api
     *
     * @param string $schoolID School ID
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function retrieve(
        string $schoolID,
        RequestOptions|array|null $requestOptions = null
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
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function list(
        ?string $authority = null,
        ?string $city = null,
        ?int $limit = null,
        ?string $name = null,
        ?string $orgType = null,
        ?int $page = null,
        ?string $status = null,
        ?string $suburb = null,
        RequestOptions|array|null $requestOptions = null,
    ): SchoolListResponse;

    /**
     * @api
     *
     * @param string $authority Education authority
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function byAuthority(
        string $authority,
        ?int $limit = null,
        ?int $page = null,
        RequestOptions|array|null $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param string $city City name
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function byCity(
        string $city,
        ?int $limit = null,
        ?int $page = null,
        RequestOptions|array|null $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param string $status School status
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function byStatus(
        string $status,
        ?int $limit = null,
        ?int $page = null,
        RequestOptions|array|null $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param string $suburb Suburb name
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function bySuburb(
        string $suburb,
        ?int $limit = null,
        ?int $page = null,
        RequestOptions|array|null $requestOptions = null,
    ): mixed;

    /**
     * @api
     *
     * @param string $q Search query
     * @param int $limit Results per page (default: 20, max: 100)
     * @param int $page Page number (default: 1)
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function search(
        string $q,
        ?int $limit = null,
        ?int $page = null,
        RequestOptions|array|null $requestOptions = null,
    ): SchoolSearchResponse;
}
