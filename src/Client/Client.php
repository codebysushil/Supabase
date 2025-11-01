<?php

declare(strict_types=1);

namespace Supabase\Client;

final class Client
{
    private readonly string $url;

    private readonly string $apiKey;

    public string $table;

    public function __construct(
        string $url,
        string $apiKey
    ) {
        $this->url = $url;
        $this->apiKey = $apiKey;
    }

    public function execute(): mixed
    {

        $endpoint = $this->url.'/rest/v1/'.$this->table;

        $headers = [
            'Authorization: Bearer '.$this->apiKey,
            'apikey: '.$this->apiKey,
        ];

        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        // $data = json_decode($result, true);

        return $result;
    }

    public function from(string $table): string
    {
        return $this->table = $table;
    }
}
