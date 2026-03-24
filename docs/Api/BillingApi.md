# PidginHost\\Sdk\BillingApi



All URIs are relative to https://www.pidginhost.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**billingDepositsCreate()**](BillingApi.md#billingDepositsCreate) | **POST** /api/billing/deposits/ |  |
| [**billingDepositsList()**](BillingApi.md#billingDepositsList) | **GET** /api/billing/deposits/ |  |
| [**billingDepositsRetrieve()**](BillingApi.md#billingDepositsRetrieve) | **GET** /api/billing/deposits/{id}/ |  |
| [**billingFundsList()**](BillingApi.md#billingFundsList) | **GET** /api/billing/funds/ |  |
| [**billingFundsLogList()**](BillingApi.md#billingFundsLogList) | **GET** /api/billing/funds-log/ |  |
| [**billingFundsNotificationSettingsCreate()**](BillingApi.md#billingFundsNotificationSettingsCreate) | **POST** /api/billing/funds/notification-settings/ |  |
| [**billingInvoicesList()**](BillingApi.md#billingInvoicesList) | **GET** /api/billing/invoices/ |  |
| [**billingInvoicesPayWithFundsCreate()**](BillingApi.md#billingInvoicesPayWithFundsCreate) | **POST** /api/billing/invoices/{id}/pay-with-funds/ |  |
| [**billingInvoicesPdfRetrieve()**](BillingApi.md#billingInvoicesPdfRetrieve) | **GET** /api/billing/invoices/{id}/pdf/ |  |
| [**billingInvoicesRetrieve()**](BillingApi.md#billingInvoicesRetrieve) | **GET** /api/billing/invoices/{id}/ |  |
| [**billingServicesCancelCreate()**](BillingApi.md#billingServicesCancelCreate) | **POST** /api/billing/services/{id}/cancel/ |  |
| [**billingServicesChangeBillingCycleCreate()**](BillingApi.md#billingServicesChangeBillingCycleCreate) | **POST** /api/billing/services/{id}/change-billing-cycle/ |  |
| [**billingServicesChangeCompanyCreate()**](BillingApi.md#billingServicesChangeCompanyCreate) | **POST** /api/billing/services/{id}/change-company/ |  |
| [**billingServicesList()**](BillingApi.md#billingServicesList) | **GET** /api/billing/services/ |  |
| [**billingServicesRetrieve()**](BillingApi.md#billingServicesRetrieve) | **GET** /api/billing/services/{id}/ |  |
| [**billingServicesToggleAutoPaymentCreate()**](BillingApi.md#billingServicesToggleAutoPaymentCreate) | **POST** /api/billing/services/{id}/toggle-auto-payment/ |  |
| [**billingSubscriptionsList()**](BillingApi.md#billingSubscriptionsList) | **GET** /api/billing/subscriptions/ |  |
| [**billingSubscriptionsRetrieve()**](BillingApi.md#billingSubscriptionsRetrieve) | **GET** /api/billing/subscriptions/{id}/ |  |


## `billingDepositsCreate()`

```php
billingDepositsCreate($deposit_create): \PidginHost\\Sdk\Model\Deposit
```



Create a new funds deposit.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deposit_create = new \PidginHost\\Sdk\Model\DepositCreate(); // \PidginHost\\Sdk\Model\DepositCreate

try {
    $result = $apiInstance->billingDepositsCreate($deposit_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingDepositsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deposit_create** | [**\PidginHost\\Sdk\Model\DepositCreate**](../Model/DepositCreate.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\Deposit**](../Model/Deposit.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingDepositsList()`

```php
billingDepositsList($page): \PidginHost\\Sdk\Model\PaginatedDepositList
```



List, create, and retrieve fund deposits.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->billingDepositsList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingDepositsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedDepositList**](../Model/PaginatedDepositList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingDepositsRetrieve()`

```php
billingDepositsRetrieve($id): \PidginHost\\Sdk\Model\Deposit
```



List, create, and retrieve fund deposits.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->billingDepositsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingDepositsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\Deposit**](../Model/Deposit.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingFundsList()`

```php
billingFundsList(): \PidginHost\\Sdk\Model\FundsBalanceResponse[]
```



Get current funds balance and notification settings.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->billingFundsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingFundsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\\Sdk\Model\FundsBalanceResponse[]**](../Model/FundsBalanceResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingFundsLogList()`

```php
billingFundsLogList($page): \PidginHost\\Sdk\Model\PaginatedFundsLogList
```



List funds log entries for the authenticated user.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->billingFundsLogList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingFundsLogList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedFundsLogList**](../Model/PaginatedFundsLogList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingFundsNotificationSettingsCreate()`

```php
billingFundsNotificationSettingsCreate($low_balance_settings): \PidginHost\\Sdk\Model\NotificationSettingsResponse
```



Update low-balance notification settings.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$low_balance_settings = new \PidginHost\\Sdk\Model\LowBalanceSettings(); // \PidginHost\\Sdk\Model\LowBalanceSettings

try {
    $result = $apiInstance->billingFundsNotificationSettingsCreate($low_balance_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingFundsNotificationSettingsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **low_balance_settings** | [**\PidginHost\\Sdk\Model\LowBalanceSettings**](../Model/LowBalanceSettings.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\NotificationSettingsResponse**](../Model/NotificationSettingsResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingInvoicesList()`

```php
billingInvoicesList($page): \PidginHost\\Sdk\Model\PaginatedInvoiceListList
```



List and retrieve invoices. Pay with funds or download PDF.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->billingInvoicesList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingInvoicesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedInvoiceListList**](../Model/PaginatedInvoiceListList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingInvoicesPayWithFundsCreate()`

```php
billingInvoicesPayWithFundsCreate($id): \PidginHost\\Sdk\Model\PayWithFundsResponse
```



Pay an unpaid/overdue invoice using account funds.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->billingInvoicesPayWithFundsCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingInvoicesPayWithFundsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\PayWithFundsResponse**](../Model/PayWithFundsResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingInvoicesPdfRetrieve()`

```php
billingInvoicesPdfRetrieve($id): \SplFileObject
```



Download invoice PDF. Use ?type=proforma or ?type=fiscal.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->billingInvoicesPdfRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingInvoicesPdfRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingInvoicesRetrieve()`

```php
billingInvoicesRetrieve($id): \PidginHost\\Sdk\Model\InvoiceDetail
```



List and retrieve invoices. Pay with funds or download PDF.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->billingInvoicesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingInvoicesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\InvoiceDetail**](../Model/InvoiceDetail.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingServicesCancelCreate()`

```php
billingServicesCancelCreate($id): \PidginHost\\Sdk\Model\CancelServiceResponse
```



Cancel a service. Pending services are cancelled immediately; active services are terminated.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->billingServicesCancelCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingServicesCancelCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\CancelServiceResponse**](../Model/CancelServiceResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingServicesChangeBillingCycleCreate()`

```php
billingServicesChangeBillingCycleCreate($id, $change_billing_cycle): \PidginHost\\Sdk\Model\ChangeBillingCycleResponse
```



Change the billing cycle of a service.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$change_billing_cycle = new \PidginHost\\Sdk\Model\ChangeBillingCycle(); // \PidginHost\\Sdk\Model\ChangeBillingCycle

try {
    $result = $apiInstance->billingServicesChangeBillingCycleCreate($id, $change_billing_cycle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingServicesChangeBillingCycleCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **change_billing_cycle** | [**\PidginHost\\Sdk\Model\ChangeBillingCycle**](../Model/ChangeBillingCycle.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\ChangeBillingCycleResponse**](../Model/ChangeBillingCycleResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingServicesChangeCompanyCreate()`

```php
billingServicesChangeCompanyCreate($id, $change_company): \PidginHost\\Sdk\Model\ChangeCompanyResponse
```



Change the company associated with a service.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$change_company = new \PidginHost\\Sdk\Model\ChangeCompany(); // \PidginHost\\Sdk\Model\ChangeCompany

try {
    $result = $apiInstance->billingServicesChangeCompanyCreate($id, $change_company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingServicesChangeCompanyCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **change_company** | [**\PidginHost\\Sdk\Model\ChangeCompany**](../Model/ChangeCompany.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\ChangeCompanyResponse**](../Model/ChangeCompanyResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingServicesList()`

```php
billingServicesList($page): \PidginHost\\Sdk\Model\PaginatedServiceListList
```



List and manage billing services.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->billingServicesList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingServicesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedServiceListList**](../Model/PaginatedServiceListList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingServicesRetrieve()`

```php
billingServicesRetrieve($id): \PidginHost\\Sdk\Model\ServiceList
```



List and manage billing services.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->billingServicesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingServicesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ServiceList**](../Model/ServiceList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingServicesToggleAutoPaymentCreate()`

```php
billingServicesToggleAutoPaymentCreate($id): \PidginHost\\Sdk\Model\ToggleAutoPaymentResponse
```



Toggle automatic payment for a service.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->billingServicesToggleAutoPaymentCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingServicesToggleAutoPaymentCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ToggleAutoPaymentResponse**](../Model/ToggleAutoPaymentResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingSubscriptionsList()`

```php
billingSubscriptionsList($page): \PidginHost\\Sdk\Model\PaginatedSubscriptionList
```



List and retrieve subscriptions.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->billingSubscriptionsList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingSubscriptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedSubscriptionList**](../Model/PaginatedSubscriptionList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingSubscriptionsRetrieve()`

```php
billingSubscriptionsRetrieve($id): \PidginHost\\Sdk\Model\Subscription
```



List and retrieve subscriptions.

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


$apiInstance = new PidginHost\\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->billingSubscriptionsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingSubscriptionsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\Subscription**](../Model/Subscription.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
