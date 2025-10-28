<?php

final class Supabase
{
    private $url;
    private $apiKey;

    public function __construct(
        string $url,
        string $apiKey
    )
    {
        $this->url = $url;
        $this->apiKey = $apiKey;
    }
}
