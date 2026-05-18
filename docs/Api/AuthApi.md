# PidginHost\Sdk\AuthApi



All URIs are relative to https://www.pidginhost.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authCliSessionCreate()**](AuthApi.md#authCliSessionCreate) | **POST** /api/auth/cli-session/ |  |
| [**authCliSessionRetrieve()**](AuthApi.md#authCliSessionRetrieve) | **GET** /api/auth/cli-session/{session_id}/ |  |


## `authCliSessionCreate()`

```php
authCliSessionCreate(): \PidginHost\Sdk\Model\CLISessionCreateResponse
```



Create a CLI authentication session for browser-based approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PidginHost\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->authCliSessionCreate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authCliSessionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\CLISessionCreateResponse**](../Model/CLISessionCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authCliSessionRetrieve()`

```php
authCliSessionRetrieve($session_id): \PidginHost\Sdk\Model\CLISessionPollResponse
```



Poll a CLI authentication session. Returns token when approved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PidginHost\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->authCliSessionRetrieve($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authCliSessionRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\CLISessionPollResponse**](../Model/CLISessionPollResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
