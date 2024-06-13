<?php

require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/lib/Configuration.php');
error_reporting(E_ALL);

use Swagger\Client\Configuration;
use Swagger\Client\Api\SecretApi;
use GuzzleHttp\Client;

//$config = Configuration::getDefaultConfiguration()->setHost('http://localhost');


$apiInstance = new SecretApi(
    $config =new Client([
        'base_uri' => 'http://localhost/SwaggerClient-php',
        'timeout'  => 2.0
    ])
);

$secret = "secret_example";
$expire_after_views = 0;
$expire_after = 0;

try {
    $result = $apiInstance->addSecret($secret, $expire_after_views, $expire_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretApi->addSecret: ', $e->getMessage(), PHP_EOL;
}