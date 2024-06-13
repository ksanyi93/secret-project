# Swagger\Client\SecretApi

All URIs are relative to *http://api.your-secret-server.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSecret**](SecretApi.md#addSecret) | **POST** /secret | Add a new secret
[**getSecretByHash**](SecretApi.md#getSecretByHash) | **GET** /secret/{hash} | Find a secret by hash


# **addSecret**
> \Swagger\Client\Model\Secret addSecret($secret, $expire_after_views, $expire_after)

Add a new secret



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecretApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$secret = "secret_example"; // string | This text will be saved as a secret
$expire_after_views = 56; // int | The secret won't be available after the given number of views. It must be greater than 0.
$expire_after = 56; // int | The secret won't be available after the given time. The value is provided in minutes. 0 means never expires

try {
    $result = $apiInstance->addSecret($secret, $expire_after_views, $expire_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretApi->addSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **secret** | **string**| This text will be saved as a secret |
 **expire_after_views** | **int**| The secret won&#39;t be available after the given number of views. It must be greater than 0. |
 **expire_after** | **int**| The secret won&#39;t be available after the given time. The value is provided in minutes. 0 means never expires |

### Return type

[**\Swagger\Client\Model\Secret**](../Model/Secret.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSecretByHash**
> \Swagger\Client\Model\Secret getSecretByHash($hash)

Find a secret by hash

Returns a single secret

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecretApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = "hash_example"; // string | Unique hash to identify the secret

try {
    $result = $apiInstance->getSecretByHash($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretApi->getSecretByHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Unique hash to identify the secret |

### Return type

[**\Swagger\Client\Model\Secret**](../Model/Secret.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

