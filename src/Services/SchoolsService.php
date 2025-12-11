<?php

declare(strict_types=1);

namespace Schools\Services;

use Schools\Client;
use Schools\Core\Exceptions\APIException;
use Schools\Core\Util;
use Schools\RequestOptions;
use Schools\Schools\SchoolGetResponse;
use Schools\Schools\SchoolListResponse;
use Schools\Schools\SchoolSearchResponse;
use Schools\ServiceContracts\SchoolsContract;

final class SchoolsService implements SchoolsContract
{
    /**
     * @api
     */
    public SchoolsRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new SchoolsRawService($client);
    }

    /**
     * @api
     *
     * Get school by School ID
     *
     * @param string $schoolID School ID
     *
     * @throws APIException
     */
    public function retrieve(
        string $schoolID,
        ?RequestOptions $requestOptions = null
    ): SchoolGetResponse {
        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->retrieve($schoolID, requestOptions: $requestOptions);

        return $response->parse();
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
        ?string $authority = null,
        ?string $city = null,
        ?int $limit = null,
        ?string $name = null,
        ?string $orgType = null,
        ?int $page = null,
        ?string $status = null,
        ?string $suburb = null,
        ?RequestOptions $requestOptions = null,
    ): SchoolListResponse {
        $params = Util::removeNulls(
            [
                'authority' => $authority,
                'city' => $city,
                'limit' => $limit,
                'name' => $name,
                'orgType' => $orgType,
                'page' => $page,
                'status' => $status,
                'suburb' => $suburb,
            ],
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->list(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Get schools by authority
     *
     * @param string $authority Education authority
     *
     * @throws APIException
     */
    public function byAuthority(
        string $authority,
        ?int $limit = null,
        ?int $page = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $params = Util::removeNulls(['limit' => $limit, 'page' => $page]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->byAuthority($authority, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Get schools by city
     *
     * @param string $city City name
     *
     * @throws APIException
     */
    public function byCity(
        string $city,
        ?int $limit = null,
        ?int $page = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $params = Util::removeNulls(['limit' => $limit, 'page' => $page]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->byCity($city, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Get schools by status
     *
     * @param string $status School status
     *
     * @throws APIException
     */
    public function byStatus(
        string $status,
        ?int $limit = null,
        ?int $page = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $params = Util::removeNulls(['limit' => $limit, 'page' => $page]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->byStatus($status, params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }

    /**
     * @api
     *
     * Get schools by suburb
     *
     * @param string $suburb Suburb name
     *
     * @throws APIException
     */
    public function bySuburb(
        string $suburb,
        ?int $limit = null,
        ?int $page = null,
        ?RequestOptions $requestOptions = null,
    ): mixed {
        $params = Util::removeNulls(['limit' => $limit, 'page' => $page]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->bySuburb($suburb, params: $params, requestOptions: $requestOptions);

        return $response->parse();
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
        string $q,
        ?int $limit = null,
        ?int $page = null,
        ?RequestOptions $requestOptions = null,
    ): SchoolSearchResponse {
        $params = Util::removeNulls(
            ['q' => $q, 'limit' => $limit, 'page' => $page]
        );

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->search(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
