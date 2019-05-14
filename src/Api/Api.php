<?php

namespace Pkboom\LaravelPlaidApi\Api;

use Pkboom\LaravelPlaidApi\Client;

class Api
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    protected function client()
    {
        return $this->client;
    }
}
