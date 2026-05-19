# PidginHost\Sdk\FreednsApi



All URIs are relative to https://www.pidginhost.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**freednsDnsActivateCreate()**](FreednsApi.md#freednsDnsActivateCreate) | **POST** /api/freedns/dns/activate/ |  |
| [**freednsDnsAddRecordCreate()**](FreednsApi.md#freednsDnsAddRecordCreate) | **POST** /api/freedns/dns/add-record/ |  |
| [**freednsDnsDeactivateCreate()**](FreednsApi.md#freednsDnsDeactivateCreate) | **POST** /api/freedns/dns/deactivate/ |  |
| [**freednsDnsDeleteRecordCreate()**](FreednsApi.md#freednsDnsDeleteRecordCreate) | **POST** /api/freedns/dns/delete-record/ |  |
| [**freednsDnsList()**](FreednsApi.md#freednsDnsList) | **GET** /api/freedns/dns/ |  |
| [**freednsDnsRecordsList()**](FreednsApi.md#freednsDnsRecordsList) | **GET** /api/freedns/dns/records/ |  |


## `freednsDnsActivateCreate()`

```php
freednsDnsActivateCreate($activate_free_dns): \PidginHost\Sdk\Model\ActivateFreeDNSResponse
```



Activate FreeDNS for a domain. For internal domains the nameservers are changed to PidginHost NS. A default zone is created on the cPanel node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\FreednsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activate_free_dns = new \PidginHost\Sdk\Model\ActivateFreeDNS(); // \PidginHost\Sdk\Model\ActivateFreeDNS

try {
    $result = $apiInstance->freednsDnsActivateCreate($activate_free_dns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreednsApi->freednsDnsActivateCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activate_free_dns** | [**\PidginHost\Sdk\Model\ActivateFreeDNS**](../Model/ActivateFreeDNS.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ActivateFreeDNSResponse**](../Model/ActivateFreeDNSResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `freednsDnsAddRecordCreate()`

```php
freednsDnsAddRecordCreate($domain, $source, $dns_record_create): \PidginHost\Sdk\Model\DNSRecordMutateResponse
```



Add or edit a DNS record. To edit an existing record, include the 'line' field with its line number. Required type-specific fields depend on 'type': A/AAAA → address; CNAME → cname; MX → preference, exchange; SRV → priority, weight, port, target; TXT → txtdata, unencoded; TYPE257 (CAA) → flag, tag, value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\FreednsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain name or PK.
$source = 'source_example'; // string | 'internal' or 'external'.
$dns_record_create = new \PidginHost\Sdk\Model\DNSRecordCreate(); // \PidginHost\Sdk\Model\DNSRecordCreate

try {
    $result = $apiInstance->freednsDnsAddRecordCreate($domain, $source, $dns_record_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreednsApi->freednsDnsAddRecordCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name or PK. | |
| **source** | **string**| &#39;internal&#39; or &#39;external&#39;. | |
| **dns_record_create** | [**\PidginHost\Sdk\Model\DNSRecordCreate**](../Model/DNSRecordCreate.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\DNSRecordMutateResponse**](../Model/DNSRecordMutateResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `freednsDnsDeactivateCreate()`

```php
freednsDnsDeactivateCreate($deactivate_free_dns): \PidginHost\Sdk\Model\DeactivateFreeDNSResponse
```



Deactivate FreeDNS for a domain. The DNS zone is removed from the cPanel node and, for internal domains, the original nameservers are restored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\FreednsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deactivate_free_dns = new \PidginHost\Sdk\Model\DeactivateFreeDNS(); // \PidginHost\Sdk\Model\DeactivateFreeDNS

try {
    $result = $apiInstance->freednsDnsDeactivateCreate($deactivate_free_dns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreednsApi->freednsDnsDeactivateCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deactivate_free_dns** | [**\PidginHost\Sdk\Model\DeactivateFreeDNS**](../Model/DeactivateFreeDNS.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\DeactivateFreeDNSResponse**](../Model/DeactivateFreeDNSResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `freednsDnsDeleteRecordCreate()`

```php
freednsDnsDeleteRecordCreate($domain, $source, $delete_record): \PidginHost\Sdk\Model\DeleteRecordResponse
```



Delete a DNS record by its line number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\FreednsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain name or PK.
$source = 'source_example'; // string | 'internal' or 'external'.
$delete_record = new \PidginHost\Sdk\Model\DeleteRecord(); // \PidginHost\Sdk\Model\DeleteRecord

try {
    $result = $apiInstance->freednsDnsDeleteRecordCreate($domain, $source, $delete_record);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreednsApi->freednsDnsDeleteRecordCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name or PK. | |
| **source** | **string**| &#39;internal&#39; or &#39;external&#39;. | |
| **delete_record** | [**\PidginHost\Sdk\Model\DeleteRecord**](../Model/DeleteRecord.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\DeleteRecordResponse**](../Model/DeleteRecordResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `freednsDnsList()`

```php
freednsDnsList(): \PidginHost\Sdk\Model\FreeDNSDomain[]
```



List all domains with active FreeDNS for the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\FreednsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->freednsDnsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreednsApi->freednsDnsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\FreeDNSDomain[]**](../Model/FreeDNSDomain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `freednsDnsRecordsList()`

```php
freednsDnsRecordsList($domain, $source): \PidginHost\Sdk\Model\DNSRecord[]
```



List all DNS records for a domain with active FreeDNS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\FreednsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain name or PK.
$source = 'source_example'; // string | 'internal' or 'external'.

try {
    $result = $apiInstance->freednsDnsRecordsList($domain, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreednsApi->freednsDnsRecordsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name or PK. | |
| **source** | **string**| &#39;internal&#39; or &#39;external&#39;. | |

### Return type

[**\PidginHost\Sdk\Model\DNSRecord[]**](../Model/DNSRecord.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
