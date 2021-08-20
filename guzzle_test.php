<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://www.practo.com',
]);

$response = $client->request('GET', '/');
