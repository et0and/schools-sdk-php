<?php

namespace Tests\Services;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Schools\Client;
use Schools\Sync\SyncGetStatusResponse;
use Schools\Sync\SyncTriggerResponse;
use Tests\UnsupportedMockTests;

/**
 * @internal
 */
#[CoversNothing]
final class SyncTest extends TestCase
{
    protected Client $client;

    protected function setUp(): void
    {
        parent::setUp();

        $testUrl = getenv('TEST_API_BASE_URL') ?: 'http://127.0.0.1:4010';
        $client = new Client(apiKey: 'My API Key', baseUrl: $testUrl);

        $this->client = $client;
    }

    #[Test]
    public function testGetStatus(): void
    {
        if (UnsupportedMockTests::$skip) {
            $this->markTestSkipped('Prism tests are disabled');
        }

        $result = $this->client->sync->getStatus();

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertInstanceOf(SyncGetStatusResponse::class, $result);
    }

    #[Test]
    public function testTrigger(): void
    {
        if (UnsupportedMockTests::$skip) {
            $this->markTestSkipped('Prism tests are disabled');
        }

        $result = $this->client->sync->trigger();

        // @phpstan-ignore-next-line method.alreadyNarrowedType
        $this->assertInstanceOf(SyncTriggerResponse::class, $result);
    }
}
