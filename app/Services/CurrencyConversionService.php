<?php
// CurrencyConversionService.php

namespace App\Services;

use GuzzleHttp\Client;

class CurrencyConversionService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function convertCurrency()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.exchangerate-api.com/v4/latest/USD');
        $data = json_decode($response->getBody(), true);

        // Convert USD to GEL
        $curencyRate = $data['rates']['GEL'];
        return($curencyRate);
    }
}
