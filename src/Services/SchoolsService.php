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

use const Schools\Core\OMIT as omit;

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
    ): SchoolListResponse {
        $params = [
            'authority' => $authority,
            'city' => $city,
            'limit' => $limit,
            'name' => $name,
            'orgType' => $orgType,
            'page' => $page,
            'status' => $status,
            'suburb' => $suburb,
        ];

        return $this->listRaw($params, $requestOptions);
    }

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
    ): SchoolListResponse {
        [$parsed, $options] = SchoolListParams::parseRequest(
            $params,
            $requestOptions
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
    ): mixed {
        $params = ['limit' => $limit, 'page' => $page];

        return $this->byAuthorityRaw($authority, $params, $requestOptions);
    }

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
    ): mixed {
        [$parsed, $options] = SchoolByAuthorityParams::parseRequest(
            $params,
            $requestOptions
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
    ): mixed {
        $params = ['limit' => $limit, 'page' => $page];

        return $this->byCityRaw($city, $params, $requestOptions);
    }

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
    ): mixed {
        [$parsed, $options] = SchoolByCityParams::parseRequest(
            $params,
            $requestOptions
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
    ): mixed {
        $params = ['limit' => $limit, 'page' => $page];

        return $this->byStatusRaw($status, $params, $requestOptions);
    }

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
    ): mixed {
        [$parsed, $options] = SchoolByStatusParams::parseRequest(
            $params,
            $requestOptions
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
    ): mixed {
        $params = ['limit' => $limit, 'page' => $page];

        return $this->bySuburbRaw($suburb, $params, $requestOptions);
    }

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
    ): mixed {
        [$parsed, $options] = SchoolBySuburbParams::parseRequest(
            $params,
            $requestOptions
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
    ): SchoolSearchResponse {
        $params = ['q' => $q, 'limit' => $limit, 'page' => $page];

        return $this->searchRaw($params, $requestOptions);
    }

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
    ): SchoolSearchResponse {
        [$parsed, $options] = SchoolSearchParams::parseRequest(
            $params,
            $requestOptions
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
