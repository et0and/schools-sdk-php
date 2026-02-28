<?php

declare(strict_types=1);

namespace Schools\ServiceContracts;

use Schools\Core\Contracts\BaseResponse;
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

/**
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
interface SchoolsRawContract
{
    /**
     * @api
     *
     * @param string $schoolID School ID
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<SchoolGetResponse>
     *
     * @throws APIException
     */
    public function retrieve(
        string $schoolID,
        RequestOptions|array|null $requestOptions = null
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|SchoolListParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<SchoolListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|SchoolListParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $authority Education authority
     * @param array<string,mixed>|SchoolByAuthorityParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function byAuthority(
        string $authority,
        array|SchoolByAuthorityParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $city City name
     * @param array<string,mixed>|SchoolByCityParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function byCity(
        string $city,
        array|SchoolByCityParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $status School status
     * @param array<string,mixed>|SchoolByStatusParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function byStatus(
        string $status,
        array|SchoolByStatusParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param string $suburb Suburb name
     * @param array<string,mixed>|SchoolBySuburbParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function bySuburb(
        string $suburb,
        array|SchoolBySuburbParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|SchoolSearchParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<SchoolSearchResponse>
     *
     * @throws APIException
     */
    public function search(
        array|SchoolSearchParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
