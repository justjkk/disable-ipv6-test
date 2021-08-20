<?php

$requestUri = 'https://www.practo.com';

$ch = curl_init();
curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_URL => $requestUri
]);
$result = curl_exec($ch);
