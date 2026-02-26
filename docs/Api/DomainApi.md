# PidginHost\\Sdk\DomainApi

All URIs are relative to https://www.pidginhost.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainDomainCheckAvailabilityCreate()**](DomainApi.md#domainDomainCheckAvailabilityCreate) | **POST** /api/domain/domain/check-availability/ |  |
| [**domainDomainCheckAvailabilityCreate2()**](DomainApi.md#domainDomainCheckAvailabilityCreate2) | **POST** /api/v1/domain/domain/check-availability/ |  |
| [**domainDomainCreate()**](DomainApi.md#domainDomainCreate) | **POST** /api/domain/domain/ |  |
| [**domainDomainCreate2()**](DomainApi.md#domainDomainCreate2) | **POST** /api/v1/domain/domain/ |  |
| [**domainDomainList()**](DomainApi.md#domainDomainList) | **GET** /api/domain/domain/ |  |
| [**domainDomainList2()**](DomainApi.md#domainDomainList2) | **GET** /api/v1/domain/domain/ |  |
| [**domainDomainPartialUpdate()**](DomainApi.md#domainDomainPartialUpdate) | **PATCH** /api/domain/domain/{domain}/ |  |
| [**domainDomainPartialUpdate2()**](DomainApi.md#domainDomainPartialUpdate2) | **PATCH** /api/v1/domain/domain/{domain}/ |  |
| [**domainDomainRenewCreate()**](DomainApi.md#domainDomainRenewCreate) | **POST** /api/domain/domain/{domain}/renew/ |  |
| [**domainDomainRenewCreate2()**](DomainApi.md#domainDomainRenewCreate2) | **POST** /api/v1/domain/domain/{domain}/renew/ |  |
| [**domainDomainRetrieve()**](DomainApi.md#domainDomainRetrieve) | **GET** /api/domain/domain/{domain}/ |  |
| [**domainDomainRetrieve2()**](DomainApi.md#domainDomainRetrieve2) | **GET** /api/v1/domain/domain/{domain}/ |  |
| [**domainDomainTransferRoDomainCreate()**](DomainApi.md#domainDomainTransferRoDomainCreate) | **POST** /api/domain/domain/transfer-ro-domain/ |  |
| [**domainDomainTransferRoDomainCreate2()**](DomainApi.md#domainDomainTransferRoDomainCreate2) | **POST** /api/v1/domain/domain/transfer-ro-domain/ |  |
| [**domainDomainUpdate()**](DomainApi.md#domainDomainUpdate) | **PUT** /api/domain/domain/{domain}/ |  |
| [**domainDomainUpdate2()**](DomainApi.md#domainDomainUpdate2) | **PUT** /api/v1/domain/domain/{domain}/ |  |
| [**domainRegistrantsCreate()**](DomainApi.md#domainRegistrantsCreate) | **POST** /api/domain/registrants/ |  |
| [**domainRegistrantsCreate2()**](DomainApi.md#domainRegistrantsCreate2) | **POST** /api/v1/domain/registrants/ |  |
| [**domainRegistrantsDestroy()**](DomainApi.md#domainRegistrantsDestroy) | **DELETE** /api/domain/registrants/{id}/ |  |
| [**domainRegistrantsDestroy2()**](DomainApi.md#domainRegistrantsDestroy2) | **DELETE** /api/v1/domain/registrants/{id}/ |  |
| [**domainRegistrantsList()**](DomainApi.md#domainRegistrantsList) | **GET** /api/domain/registrants/ |  |
| [**domainRegistrantsList2()**](DomainApi.md#domainRegistrantsList2) | **GET** /api/v1/domain/registrants/ |  |
| [**domainRegistrantsPartialUpdate()**](DomainApi.md#domainRegistrantsPartialUpdate) | **PATCH** /api/domain/registrants/{id}/ |  |
| [**domainRegistrantsPartialUpdate2()**](DomainApi.md#domainRegistrantsPartialUpdate2) | **PATCH** /api/v1/domain/registrants/{id}/ |  |
| [**domainRegistrantsRetrieve()**](DomainApi.md#domainRegistrantsRetrieve) | **GET** /api/domain/registrants/{id}/ |  |
| [**domainRegistrantsRetrieve2()**](DomainApi.md#domainRegistrantsRetrieve2) | **GET** /api/v1/domain/registrants/{id}/ |  |
| [**domainRegistrantsUpdate()**](DomainApi.md#domainRegistrantsUpdate) | **PUT** /api/domain/registrants/{id}/ |  |
| [**domainRegistrantsUpdate2()**](DomainApi.md#domainRegistrantsUpdate2) | **PUT** /api/v1/domain/registrants/{id}/ |  |
| [**domainTldList()**](DomainApi.md#domainTldList) | **GET** /api/domain/tld/ |  |
| [**domainTldList2()**](DomainApi.md#domainTldList2) | **GET** /api/v1/domain/tld/ |  |
| [**domainTldRetrieve()**](DomainApi.md#domainTldRetrieve) | **GET** /api/domain/tld/{id}/ |  |
| [**domainTldRetrieve2()**](DomainApi.md#domainTldRetrieve2) | **GET** /api/v1/domain/tld/{id}/ |  |


## `domainDomainCheckAvailabilityCreate()`

```php
domainDomainCheckAvailabilityCreate($check_availability): \PidginHost\\Sdk\Model\CheckAvailability
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_availability = new \PidginHost\\Sdk\Model\CheckAvailability(); // \PidginHost\\Sdk\Model\CheckAvailability

try {
    $result = $apiInstance->domainDomainCheckAvailabilityCreate($check_availability);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainCheckAvailabilityCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_availability** | [**\PidginHost\\Sdk\Model\CheckAvailability**](../Model/CheckAvailability.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\CheckAvailability**](../Model/CheckAvailability.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainCheckAvailabilityCreate2()`

```php
domainDomainCheckAvailabilityCreate2($check_availability): \PidginHost\\Sdk\Model\CheckAvailability
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_availability = new \PidginHost\\Sdk\Model\CheckAvailability(); // \PidginHost\\Sdk\Model\CheckAvailability

try {
    $result = $apiInstance->domainDomainCheckAvailabilityCreate2($check_availability);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainCheckAvailabilityCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_availability** | [**\PidginHost\\Sdk\Model\CheckAvailability**](../Model/CheckAvailability.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\CheckAvailability**](../Model/CheckAvailability.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainCreate()`

```php
domainDomainCreate($domain_create): \PidginHost\\Sdk\Model\DomainCreate
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_create = new \PidginHost\\Sdk\Model\DomainCreate(); // \PidginHost\\Sdk\Model\DomainCreate

try {
    $result = $apiInstance->domainDomainCreate($domain_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_create** | [**\PidginHost\\Sdk\Model\DomainCreate**](../Model/DomainCreate.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\DomainCreate**](../Model/DomainCreate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainCreate2()`

```php
domainDomainCreate2($domain_create): \PidginHost\\Sdk\Model\DomainCreate
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_create = new \PidginHost\\Sdk\Model\DomainCreate(); // \PidginHost\\Sdk\Model\DomainCreate

try {
    $result = $apiInstance->domainDomainCreate2($domain_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_create** | [**\PidginHost\\Sdk\Model\DomainCreate**](../Model/DomainCreate.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\DomainCreate**](../Model/DomainCreate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainList()`

```php
domainDomainList($page): \PidginHost\\Sdk\Model\PaginatedDomainList
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->domainDomainList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedDomainList**](../Model/PaginatedDomainList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainList2()`

```php
domainDomainList2($page): \PidginHost\\Sdk\Model\PaginatedDomainList
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->domainDomainList2($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainList2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedDomainList**](../Model/PaginatedDomainList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainPartialUpdate()`

```php
domainDomainPartialUpdate($domain, $patched_domain): \PidginHost\\Sdk\Model\Domain
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$patched_domain = new \PidginHost\\Sdk\Model\PatchedDomain(); // \PidginHost\\Sdk\Model\PatchedDomain

try {
    $result = $apiInstance->domainDomainPartialUpdate($domain, $patched_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |
| **patched_domain** | [**\PidginHost\\Sdk\Model\PatchedDomain**](../Model/PatchedDomain.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\Domain**](../Model/Domain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainPartialUpdate2()`

```php
domainDomainPartialUpdate2($domain, $patched_domain): \PidginHost\\Sdk\Model\Domain
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$patched_domain = new \PidginHost\\Sdk\Model\PatchedDomain(); // \PidginHost\\Sdk\Model\PatchedDomain

try {
    $result = $apiInstance->domainDomainPartialUpdate2($domain, $patched_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainPartialUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |
| **patched_domain** | [**\PidginHost\\Sdk\Model\PatchedDomain**](../Model/PatchedDomain.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\Domain**](../Model/Domain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainRenewCreate()`

```php
domainDomainRenewCreate($domain, $renew_domain): \PidginHost\\Sdk\Model\RenewDomain
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$renew_domain = new \PidginHost\\Sdk\Model\RenewDomain(); // \PidginHost\\Sdk\Model\RenewDomain

try {
    $result = $apiInstance->domainDomainRenewCreate($domain, $renew_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainRenewCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |
| **renew_domain** | [**\PidginHost\\Sdk\Model\RenewDomain**](../Model/RenewDomain.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\RenewDomain**](../Model/RenewDomain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainRenewCreate2()`

```php
domainDomainRenewCreate2($domain, $renew_domain): \PidginHost\\Sdk\Model\RenewDomain
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$renew_domain = new \PidginHost\\Sdk\Model\RenewDomain(); // \PidginHost\\Sdk\Model\RenewDomain

try {
    $result = $apiInstance->domainDomainRenewCreate2($domain, $renew_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainRenewCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |
| **renew_domain** | [**\PidginHost\\Sdk\Model\RenewDomain**](../Model/RenewDomain.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\RenewDomain**](../Model/RenewDomain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainRetrieve()`

```php
domainDomainRetrieve($domain): \PidginHost\\Sdk\Model\Domain
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string

try {
    $result = $apiInstance->domainDomainRetrieve($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\Domain**](../Model/Domain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainRetrieve2()`

```php
domainDomainRetrieve2($domain): \PidginHost\\Sdk\Model\Domain
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string

try {
    $result = $apiInstance->domainDomainRetrieve2($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\Domain**](../Model/Domain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainTransferRoDomainCreate()`

```php
domainDomainTransferRoDomainCreate($transfer_ro_domain): \PidginHost\\Sdk\Model\TransferRoDomain
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_ro_domain = new \PidginHost\\Sdk\Model\TransferRoDomain(); // \PidginHost\\Sdk\Model\TransferRoDomain

try {
    $result = $apiInstance->domainDomainTransferRoDomainCreate($transfer_ro_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainTransferRoDomainCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_ro_domain** | [**\PidginHost\\Sdk\Model\TransferRoDomain**](../Model/TransferRoDomain.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\TransferRoDomain**](../Model/TransferRoDomain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainTransferRoDomainCreate2()`

```php
domainDomainTransferRoDomainCreate2($transfer_ro_domain): \PidginHost\\Sdk\Model\TransferRoDomain
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_ro_domain = new \PidginHost\\Sdk\Model\TransferRoDomain(); // \PidginHost\\Sdk\Model\TransferRoDomain

try {
    $result = $apiInstance->domainDomainTransferRoDomainCreate2($transfer_ro_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainTransferRoDomainCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_ro_domain** | [**\PidginHost\\Sdk\Model\TransferRoDomain**](../Model/TransferRoDomain.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\TransferRoDomain**](../Model/TransferRoDomain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainUpdate()`

```php
domainDomainUpdate($domain, $domain2): \PidginHost\\Sdk\Model\Domain
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$domain2 = new \PidginHost\\Sdk\Model\Domain(); // \PidginHost\\Sdk\Model\Domain

try {
    $result = $apiInstance->domainDomainUpdate($domain, $domain2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |
| **domain2** | [**\PidginHost\\Sdk\Model\Domain**](../Model/Domain.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\Domain**](../Model/Domain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainDomainUpdate2()`

```php
domainDomainUpdate2($domain, $domain2): \PidginHost\\Sdk\Model\Domain
```



Manage your domains

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$domain2 = new \PidginHost\\Sdk\Model\Domain(); // \PidginHost\\Sdk\Model\Domain

try {
    $result = $apiInstance->domainDomainUpdate2($domain, $domain2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDomainUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |
| **domain2** | [**\PidginHost\\Sdk\Model\Domain**](../Model/Domain.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\Domain**](../Model/Domain.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsCreate()`

```php
domainRegistrantsCreate($domain_registrant): \PidginHost\\Sdk\Model\DomainRegistrant
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_registrant = new \PidginHost\\Sdk\Model\DomainRegistrant(); // \PidginHost\\Sdk\Model\DomainRegistrant

try {
    $result = $apiInstance->domainRegistrantsCreate($domain_registrant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_registrant** | [**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsCreate2()`

```php
domainRegistrantsCreate2($domain_registrant): \PidginHost\\Sdk\Model\DomainRegistrant
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_registrant = new \PidginHost\\Sdk\Model\DomainRegistrant(); // \PidginHost\\Sdk\Model\DomainRegistrant

try {
    $result = $apiInstance->domainRegistrantsCreate2($domain_registrant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_registrant** | [**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsDestroy()`

```php
domainRegistrantsDestroy($id)
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->domainRegistrantsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsDestroy2()`

```php
domainRegistrantsDestroy2($id)
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->domainRegistrantsDestroy2($id);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsDestroy2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsList()`

```php
domainRegistrantsList($page): \PidginHost\\Sdk\Model\PaginatedDomainRegistrantList
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->domainRegistrantsList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedDomainRegistrantList**](../Model/PaginatedDomainRegistrantList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsList2()`

```php
domainRegistrantsList2($page): \PidginHost\\Sdk\Model\PaginatedDomainRegistrantList
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->domainRegistrantsList2($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsList2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedDomainRegistrantList**](../Model/PaginatedDomainRegistrantList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsPartialUpdate()`

```php
domainRegistrantsPartialUpdate($id, $patched_domain_registrant): \PidginHost\\Sdk\Model\DomainRegistrant
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$patched_domain_registrant = new \PidginHost\\Sdk\Model\PatchedDomainRegistrant(); // \PidginHost\\Sdk\Model\PatchedDomainRegistrant

try {
    $result = $apiInstance->domainRegistrantsPartialUpdate($id, $patched_domain_registrant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **patched_domain_registrant** | [**\PidginHost\\Sdk\Model\PatchedDomainRegistrant**](../Model/PatchedDomainRegistrant.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsPartialUpdate2()`

```php
domainRegistrantsPartialUpdate2($id, $patched_domain_registrant): \PidginHost\\Sdk\Model\DomainRegistrant
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$patched_domain_registrant = new \PidginHost\\Sdk\Model\PatchedDomainRegistrant(); // \PidginHost\\Sdk\Model\PatchedDomainRegistrant

try {
    $result = $apiInstance->domainRegistrantsPartialUpdate2($id, $patched_domain_registrant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsPartialUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **patched_domain_registrant** | [**\PidginHost\\Sdk\Model\PatchedDomainRegistrant**](../Model/PatchedDomainRegistrant.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsRetrieve()`

```php
domainRegistrantsRetrieve($id): \PidginHost\\Sdk\Model\DomainRegistrant
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->domainRegistrantsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsRetrieve2()`

```php
domainRegistrantsRetrieve2($id): \PidginHost\\Sdk\Model\DomainRegistrant
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->domainRegistrantsRetrieve2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsUpdate()`

```php
domainRegistrantsUpdate($id, $domain_registrant): \PidginHost\\Sdk\Model\DomainRegistrant
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$domain_registrant = new \PidginHost\\Sdk\Model\DomainRegistrant(); // \PidginHost\\Sdk\Model\DomainRegistrant

try {
    $result = $apiInstance->domainRegistrantsUpdate($id, $domain_registrant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **domain_registrant** | [**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainRegistrantsUpdate2()`

```php
domainRegistrantsUpdate2($id, $domain_registrant): \PidginHost\\Sdk\Model\DomainRegistrant
```



Manage your domain registrant views

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$domain_registrant = new \PidginHost\\Sdk\Model\DomainRegistrant(); // \PidginHost\\Sdk\Model\DomainRegistrant

try {
    $result = $apiInstance->domainRegistrantsUpdate2($id, $domain_registrant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistrantsUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **domain_registrant** | [**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\DomainRegistrant**](../Model/DomainRegistrant.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainTldList()`

```php
domainTldList($page): \PidginHost\\Sdk\Model\PaginatedTLDList
```



Manage your TLDs

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->domainTldList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainTldList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedTLDList**](../Model/PaginatedTLDList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainTldList2()`

```php
domainTldList2($page): \PidginHost\\Sdk\Model\PaginatedTLDList
```



Manage your TLDs

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->domainTldList2($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainTldList2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedTLDList**](../Model/PaginatedTLDList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainTldRetrieve()`

```php
domainTldRetrieve($id): \PidginHost\\Sdk\Model\TLD
```



Manage your TLDs

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this top level domain.

try {
    $result = $apiInstance->domainTldRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainTldRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this top level domain. | |

### Return type

[**\PidginHost\\Sdk\Model\TLD**](../Model/TLD.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainTldRetrieve2()`

```php
domainTldRetrieve2($id): \PidginHost\\Sdk\Model\TLD
```



Manage your TLDs

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


$apiInstance = new PidginHost\\Sdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this top level domain.

try {
    $result = $apiInstance->domainTldRetrieve2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainTldRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this top level domain. | |

### Return type

[**\PidginHost\\Sdk\Model\TLD**](../Model/TLD.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
