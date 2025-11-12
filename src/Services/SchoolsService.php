<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
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
use Schools\ServiceContracts\SchoolsContract;

final class SchoolsService implements SchoolsContract
{
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Get school by School ID
     *
     * @throws APIException
     */
    public function retrieve(
        string $schoolID,
        ?RequestOptions $requestOptions = null
    ): SchoolGetResponse {
        // @phpstan-ignore-next-line;
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
     *   org_type?: string,
     *   page?: int,
     *   status?: string,
     *   suburb?: string,
     * }|SchoolListParams $params
     *
     * @throws APIException
     */
    public function list(
        array|SchoolListParams $params,
        ?RequestOptions $requestOptions = null
    ): SchoolListResponse {
        [$parsed, $options] = SchoolListParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line;
        return $this->client->request(
            method: 'get',
            path: 'v1/schools',
            query: $parsed,
            options: $options,
            convert: SchoolListResponse::class,
        );
    }

    /**
     * @api
     *
     * Get schools by authority
     *
     * @param array{limit?: int, page?: int}|SchoolByAuthorityParams $params
     *
     * @throws APIException
     */
    public function byAuthority(
        string $authority,
        array|SchoolByAuthorityParams $params,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        [$parsed, $options] = SchoolByAuthorityParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line;
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
     * @param array{limit?: int, page?: int}|SchoolByCityParams $params
     *
     * @throws APIException
     */
    public function byCity(
        string $city,
        array|SchoolByCityParams $params,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        [$parsed, $options] = SchoolByCityParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line;
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
     * @param array{limit?: int, page?: int}|SchoolByStatusParams $params
     *
     * @throws APIException
     */
    public function byStatus(
        string $status,
        array|SchoolByStatusParams $params,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        [$parsed, $options] = SchoolByStatusParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line;
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
     * @param array{limit?: int, page?: int}|SchoolBySuburbParams $params
     *
     * @throws APIException
     */
    public function bySuburb(
        string $suburb,
        array|SchoolBySuburbParams $params,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        [$parsed, $options] = SchoolBySuburbParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line;
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
     * @throws APIException
     */
    public function search(
        array|SchoolSearchParams $params,
        ?RequestOptions $requestOptions = null
    ): SchoolSearchResponse {
        [$parsed, $options] = SchoolSearchParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line;
        return $this->client->request(
            method: 'get',
            path: 'v1/schools/search',
            query: $parsed,
            options: $options,
            convert: SchoolSearchResponse::class,
        );
    }
}
