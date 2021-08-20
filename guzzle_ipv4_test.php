<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://www.practo.com',
    'force_ip_resolve' => 'v4'
]);

$response = $client->request('GET', '/');
