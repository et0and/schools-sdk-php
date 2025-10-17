<?php

declare(strict_types=1);

namespace Schools;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Schools\Core\BaseClient;
use Schools\Services\HealthService;
use Schools\Services\RootService;
use Schools\Services\SchoolsService;
use Schools\Services\SyncService;

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

    public function __construct(?string $apiKey = null, ?string $baseUrl = null)
    {
        $this->apiKey = (string) ($apiKey ?? getenv('SCHOOLS_API_KEY'));

        $baseUrl ??= getenv('SCHOOLS_BASE_URL') ?: 'https://schools.tom.so';

        $options = RequestOptions::with(
            uriFactory: Psr17FactoryDiscovery::findUriFactory(),
            streamFactory: Psr17FactoryDiscovery::findStreamFactory(),
            requestFactory: Psr17FactoryDiscovery::findRequestFactory(),
            transporter: Psr18ClientDiscovery::find(),
        );

        parent::__construct(
            headers: [
                'Content-Type' => 'application/json', 'Accept' => 'application/json',
            ],
            baseUrl: $baseUrl,
            options: $options,
        );

        $this->health = new HealthService($this);
        $this->root = new RootService($this);
        $this->schools = new SchoolsService($this);
        $this->sync = new SyncService($this);
    }

    /** @return array<string, string> */
    protected function authHeaders(): array
    {
        if (!$this->apiKey) {
            return [];
        }

        return ['Authorization' => "Bearer {$this->apiKey}"];
    }
}
