<?php

require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/lib/Configuration.php');
error_reporting(E_ALL);

use Swagger\Client\Configuration;
use Swagger\Client\Api\SecretApi;
use GuzzleHttp\Client;

//$config = Configuration::getDefaultConfiguration()->setHost('http://swagger.localhost');


$apiInstance = new SecretApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    $config =new Client([
        'base_uri' => 'http://swagger.localhost/SwaggerClient-php',
        'timeout'  => 2.0
    ])
);
$secret = "secret_example"; // string | This text will be saved as a secret
$expire_after_views = 0; // int | The secret won't be available after the given number of views. It must be greater than 0.
$expire_after = 0; // int | The secret won't be available after the given time. The value is provided in minutes. 0 means never expires

try {
    $result = $apiInstance->addSecret($secret, $expire_after_views, $expire_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretApi->addSecret: ', $e->getMessage(), PHP_EOL;
}