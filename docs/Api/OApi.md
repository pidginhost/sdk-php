# PidginHost\Sdk\OApi



All URIs are relative to https://www.pidginhost.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oMobileDashboardRetrieve()**](OApi.md#oMobileDashboardRetrieve) | **GET** /o/mobile/dashboard/ |  |
| [**oMobileSessionRetrieve()**](OApi.md#oMobileSessionRetrieve) | **GET** /o/mobile/session/ |  |
| [**oRegisterCreate()**](OApi.md#oRegisterCreate) | **POST** /o/register |  |


## `oMobileDashboardRetrieve()`

```php
oMobileDashboardRetrieve(): \PidginHost\Sdk\Model\Dashboard
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PidginHost\Sdk\Api\OApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oMobileDashboardRetrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OApi->oMobileDashboardRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\Dashboard**](../Model/Dashboard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oMobileSessionRetrieve()`

```php
oMobileSessionRetrieve(): \PidginHost\Sdk\Model\MobileOAuthSession
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PidginHost\Sdk\Api\OApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oMobileSessionRetrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OApi->oMobileSessionRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\MobileOAuthSession**](../Model/MobileOAuthSession.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oRegisterCreate()`

```php
oRegisterCreate()
```



RFC 7591 dynamic client registration (open, throttled).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PidginHost\Sdk\Api\OApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->oRegisterCreate();
} catch (Exception $e) {
    echo 'Exception when calling OApi->oRegisterCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
