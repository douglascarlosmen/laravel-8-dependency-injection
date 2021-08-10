<?php

namespace App\Services;

use App\Contracts\ExternalApiDataInterface;

class UsersDataService implements ExternalApiDataInterface
{
    protected $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function getData(string $endpoint)
    {
        return $this->client->get('/api/users');
    }
}
