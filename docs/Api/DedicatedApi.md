# PidginHost\\Sdk\DedicatedApi



All URIs are relative to https://www.pidginhost.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dedicatedServersList()**](DedicatedApi.md#dedicatedServersList) | **GET** /api/dedicated/servers/ |  |
| [**dedicatedServersPowerCreate()**](DedicatedApi.md#dedicatedServersPowerCreate) | **POST** /api/dedicated/servers/{id}/power/ |  |
| [**dedicatedServersRdnsCreate()**](DedicatedApi.md#dedicatedServersRdnsCreate) | **POST** /api/dedicated/servers/{id}/rdns/ |  |
| [**dedicatedServersReinstallCreate()**](DedicatedApi.md#dedicatedServersReinstallCreate) | **POST** /api/dedicated/servers/{id}/reinstall/ |  |
| [**dedicatedServersRetrieve()**](DedicatedApi.md#dedicatedServersRetrieve) | **GET** /api/dedicated/servers/{id}/ |  |


## `dedicatedServersList()`

```php
dedicatedServersList($page): \PidginHost\\Sdk\Model\PaginatedDedicatedServerList
```



List and manage dedicated server services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\\Sdk\Api\DedicatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->dedicatedServersList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedApi->dedicatedServersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedDedicatedServerList**](../Model/PaginatedDedicatedServerList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dedicatedServersPowerCreate()`

```php
dedicatedServersPowerCreate($id, $power_action): \PidginHost\\Sdk\Model\PowerActionResponse
```



Execute a power management action (start, stop, restart, shutdown).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\\Sdk\Api\DedicatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$power_action = new \PidginHost\\Sdk\Model\PowerAction(); // \PidginHost\\Sdk\Model\PowerAction

try {
    $result = $apiInstance->dedicatedServersPowerCreate($id, $power_action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedApi->dedicatedServersPowerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **power_action** | [**\PidginHost\\Sdk\Model\PowerAction**](../Model/PowerAction.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\PowerActionResponse**](../Model/PowerActionResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dedicatedServersRdnsCreate()`

```php
dedicatedServersRdnsCreate($id, $dedicated_rdns): \PidginHost\\Sdk\Model\RDNSUpdateResponse
```



Update reverse DNS for a dedicated server IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\\Sdk\Api\DedicatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dedicated_rdns = new \PidginHost\\Sdk\Model\DedicatedRDNS(); // \PidginHost\\Sdk\Model\DedicatedRDNS

try {
    $result = $apiInstance->dedicatedServersRdnsCreate($id, $dedicated_rdns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedApi->dedicatedServersRdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **dedicated_rdns** | [**\PidginHost\\Sdk\Model\DedicatedRDNS**](../Model/DedicatedRDNS.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\RDNSUpdateResponse**](../Model/RDNSUpdateResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dedicatedServersReinstallCreate()`

```php
dedicatedServersReinstallCreate($id, $reinstall): \PidginHost\\Sdk\Model\ReinstallResponse
```



Reinstall the dedicated server with a new operating system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\\Sdk\Api\DedicatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$reinstall = new \PidginHost\\Sdk\Model\Reinstall(); // \PidginHost\\Sdk\Model\Reinstall

try {
    $result = $apiInstance->dedicatedServersReinstallCreate($id, $reinstall);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedApi->dedicatedServersReinstallCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **reinstall** | [**\PidginHost\\Sdk\Model\Reinstall**](../Model/Reinstall.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\ReinstallResponse**](../Model/ReinstallResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dedicatedServersRetrieve()`

```php
dedicatedServersRetrieve($id): \PidginHost\\Sdk\Model\DedicatedServer
```



List and manage dedicated server services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\\Sdk\Api\DedicatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->dedicatedServersRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedApi->dedicatedServersRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\DedicatedServer**](../Model/DedicatedServer.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
