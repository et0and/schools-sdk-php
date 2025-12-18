<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Contracts\BaseResponse;
use Schools\Core\Exceptions\APIException;
use Schools\Core\Util;
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
use Schools\ServiceContracts\SchoolsRawContract;

final class SchoolsRawService implements SchoolsRawContract
{
    // @phpstan-ignore-next-line
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Get school by School ID
     *
     * @param string $schoolID School ID
     *
     * @return BaseResponse<SchoolGetResponse>
     *
     * @throws APIException
     */
    public function retrieve(
        string $schoolID,
        ?RequestOptions $requestOptions = null
    ): BaseResponse {
        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['v1/schools/id/%1$s', $schoolID],
            options: $requestOptions,
            convert: SchoolGetResponse::class,
        );
    }

    /**
     * @api
     *
     * Get all schools with filtering
     *
     * @param array{
     *   authority?: string,
     *   city?: string,
     *   limit?: int,
     *   name?: string,
     *   orgType?: string,
     *   page?: int,
     *   status?: string,
     *   suburb?: string,
     * }|SchoolListParams $params
     *
     * @return BaseResponse<SchoolListResponse>
     *
     * @throws APIException
     */
    public function list(
        array|SchoolListParams $params,
        ?RequestOptions $requestOptions = null
    ): BaseResponse {
        [$parsed, $options] = SchoolListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'v1/schools',
            query: Util::array_transform_keys($parsed, ['orgType' => 'org_type']),
            options: $options,
            convert: SchoolListResponse::class,
        );
    }

    /**
     * @api
     *
     * Get schools by authority
     *
     * @param string $authority Education authority
     * @param array{limit?: int, page?: int}|SchoolByAuthorityParams $params
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function byAuthority(
        string $authority,
        array|SchoolByAuthorityParams $params,
        ?RequestOptions $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = SchoolByAuthorityParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['v1/schools/authority/%1$s', $authority],
            query: $parsed,
            options: $options,
            convert: null,
        );
    }

    /**
     * @api
     *
     * Get schools by city
     *
     * @param string $city City name
     * @param array{limit?: int, page?: int}|SchoolByCityParams $params
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function byCity(
        string $city,
        array|SchoolByCityParams $params,
        ?RequestOptions $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = SchoolByCityParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['v1/schools/city/%1$s', $city],
            query: $parsed,
            options: $options,
            convert: null,
        );
    }

    /**
     * @api
     *
     * Get schools by status
     *
     * @param string $status School status
     * @param array{limit?: int, page?: int}|SchoolByStatusParams $params
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function byStatus(
        string $status,
        array|SchoolByStatusParams $params,
        ?RequestOptions $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = SchoolByStatusParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['v1/schools/status/%1$s', $status],
            query: $parsed,
            options: $options,
            convert: null,
        );
    }

    /**
     * @api
     *
     * Get schools by suburb
     *
     * @param string $suburb Suburb name
     * @param array{limit?: int, page?: int}|SchoolBySuburbParams $params
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function bySuburb(
        string $suburb,
        array|SchoolBySuburbParams $params,
        ?RequestOptions $requestOptions = null,
    ): BaseResponse {
        [$parsed, $options] = SchoolBySuburbParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: ['v1/schools/suburb/%1$s', $suburb],
            query: $parsed,
            options: $options,
            convert: null,
        );
    }

    /**
     * @api
     *
     * Full-text search schools by name
     *
     * @param array{q: string, limit?: int, page?: int}|SchoolSearchParams $params
     *
     * @return BaseResponse<SchoolSearchResponse>
     *
     * @throws APIException
     */
    public function search(
        array|SchoolSearchParams $params,
        ?RequestOptions $requestOptions = null
    ): BaseResponse {
        [$parsed, $options] = SchoolSearchParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'v1/schools/search',
            query: $parsed,
            options: $options,
            convert: SchoolSearchResponse::class,
        );
    }
}
