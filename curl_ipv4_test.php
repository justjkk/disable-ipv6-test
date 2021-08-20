<?php

$requestUri = 'https://www.practo.com';

$ch = curl_init();
curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_URL => $requestUri,
        CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4
]);
$result = curl_exec($ch);
