<?php

declare(strict_types=1);

namespace Schools;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Schools\Core\BaseClient;
use Schools\Core\Util;
use Schools\Services\HealthService;
use Schools\Services\RootService;
use Schools\Services\SchoolsService;
use Schools\Services\SyncService;

/**
 * @phpstan-import-type NormalizedRequest from \Schools\Core\BaseClient
 * @phpstan-import-type RequestOpts from \Schools\RequestOptions
 */
class Client extends BaseClient
{
    public string $apiKey;

    /**
     * @api
     */
    public HealthService $health;

    /**
     * @api
     */
    public RootService $root;

    /**
     * @api
     */
    public SchoolsService $schools;

    /**
     * @api
     */
    public SyncService $sync;

    /**
     * @param RequestOpts|null $requestOptions
     */
    public function __construct(
        ?string $apiKey = null,
        ?string $baseUrl = null,
        RequestOptions|array|null $requestOptions = null,
    ) {
        $this->apiKey = (string) ($apiKey ?? getenv('SCHOOLS_API_KEY'));

        $baseUrl ??= getenv('SCHOOLS_BASE_URL') ?: 'https://schools.tom.so';

        $options = RequestOptions::parse(
            RequestOptions::with(
                uriFactory: Psr17FactoryDiscovery::findUriFactory(),
                streamFactory: Psr17FactoryDiscovery::findStreamFactory(),
                requestFactory: Psr17FactoryDiscovery::findRequestFactory(),
                transporter: Psr18ClientDiscovery::find(),
            ),
            $requestOptions,
        );

        parent::__construct(
            headers: [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => sprintf('schools/PHP %s', '0.4.0'),
                'X-Stainless-Lang' => 'php',
                'X-Stainless-Package-Version' => '0.4.0',
                'X-Stainless-OS' => $this->getNormalizedOS(),
                'X-Stainless-Arch' => $this->getNormalizedArchitecture(),
                'X-Stainless-Runtime' => 'php',
                'X-Stainless-Runtime-Version' => phpversion(),
            ],
            baseUrl: $baseUrl,
            options: $options
        );

        $this->health = new HealthService($this);
        $this->root = new RootService($this);
        $this->schools = new SchoolsService($this);
        $this->sync = new SyncService($this);
    }

    /** @return array<string,string> */
    protected function authHeaders(): array
    {
        return $this->apiKey ? ['Authorization' => "Bearer {$this->apiKey}"] : [];
    }

    /**
     * @internal
     *
     * @param string|list<string> $path
     * @param array<string,mixed> $query
     * @param array<string,string|int|list<string|int>|null> $headers
     * @param RequestOpts|null $opts
     *
     * @return array{NormalizedRequest, RequestOptions}
     */
    protected function buildRequest(
        string $method,
        string|array $path,
        array $query,
        array $headers,
        mixed $body,
        RequestOptions|array|null $opts,
    ): array {
        return parent::buildRequest(
            method: $method,
            path: $path,
            query: $query,
            headers: [...$this->authHeaders(), ...$headers],
            body: $body,
            opts: $opts,
        );
    }
}
