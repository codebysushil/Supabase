<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Supabase\Client\Client;

final class SupabaseTest extends TestCase
{
    public Client $client;

    protected function setUp(): void
    {
        $url = 'example.com';
        $key = 'password';

        $this->client = new Client($url, $key);

    }

    public function test_get_data()
    {
        $this->client->from('user');
        $data = $this->client->execute();

        $this->assertIsString($data);
    }
}
