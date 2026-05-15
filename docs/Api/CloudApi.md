# PidginHost\Sdk\CloudApi



All URIs are relative to https://www.pidginhost.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloudBucketsCreate()**](CloudApi.md#cloudBucketsCreate) | **POST** /api/cloud/buckets/ |  |
| [**cloudBucketsCredentialsRevealCreate()**](CloudApi.md#cloudBucketsCredentialsRevealCreate) | **POST** /api/cloud/buckets/{id}/credentials/reveal/ |  |
| [**cloudBucketsCredentialsRotateCreate()**](CloudApi.md#cloudBucketsCredentialsRotateCreate) | **POST** /api/cloud/buckets/{id}/credentials/rotate/ |  |
| [**cloudBucketsDestroy()**](CloudApi.md#cloudBucketsDestroy) | **DELETE** /api/cloud/buckets/{id}/ |  |
| [**cloudBucketsList()**](CloudApi.md#cloudBucketsList) | **GET** /api/cloud/buckets/ |  |
| [**cloudBucketsResizeCreate()**](CloudApi.md#cloudBucketsResizeCreate) | **POST** /api/cloud/buckets/{id}/resize/ |  |
| [**cloudBucketsRetrieve()**](CloudApi.md#cloudBucketsRetrieve) | **GET** /api/cloud/buckets/{id}/ |  |
| [**cloudBucketsVisibilityCreate()**](CloudApi.md#cloudBucketsVisibilityCreate) | **POST** /api/cloud/buckets/{id}/visibility/ |  |
| [**cloudFirewallRulesSetCreate()**](CloudApi.md#cloudFirewallRulesSetCreate) | **POST** /api/cloud/firewall-rules-set/ |  |
| [**cloudFirewallRulesSetDestroy()**](CloudApi.md#cloudFirewallRulesSetDestroy) | **DELETE** /api/cloud/firewall-rules-set/{id}/ |  |
| [**cloudFirewallRulesSetList()**](CloudApi.md#cloudFirewallRulesSetList) | **GET** /api/cloud/firewall-rules-set/ |  |
| [**cloudFirewallRulesSetPartialUpdate()**](CloudApi.md#cloudFirewallRulesSetPartialUpdate) | **PATCH** /api/cloud/firewall-rules-set/{id}/ |  |
| [**cloudFirewallRulesSetRetrieve()**](CloudApi.md#cloudFirewallRulesSetRetrieve) | **GET** /api/cloud/firewall-rules-set/{id}/ |  |
| [**cloudFirewallRulesSetRulesCreate()**](CloudApi.md#cloudFirewallRulesSetRulesCreate) | **POST** /api/cloud/firewall-rules-set/{rules_set_id}/rules/ |  |
| [**cloudFirewallRulesSetRulesDestroy()**](CloudApi.md#cloudFirewallRulesSetRulesDestroy) | **DELETE** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ |  |
| [**cloudFirewallRulesSetRulesList()**](CloudApi.md#cloudFirewallRulesSetRulesList) | **GET** /api/cloud/firewall-rules-set/{rules_set_id}/rules/ |  |
| [**cloudFirewallRulesSetRulesPartialUpdate()**](CloudApi.md#cloudFirewallRulesSetRulesPartialUpdate) | **PATCH** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ |  |
| [**cloudFirewallRulesSetRulesRetrieve()**](CloudApi.md#cloudFirewallRulesSetRulesRetrieve) | **GET** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ |  |
| [**cloudFirewallRulesSetRulesUpdate()**](CloudApi.md#cloudFirewallRulesSetRulesUpdate) | **PUT** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ |  |
| [**cloudFirewallRulesSetUpdate()**](CloudApi.md#cloudFirewallRulesSetUpdate) | **PUT** /api/cloud/firewall-rules-set/{id}/ |  |
| [**cloudFloatingIpv4AuthorizationsList()**](CloudApi.md#cloudFloatingIpv4AuthorizationsList) | **GET** /api/cloud/floating-ipv4/{id}/authorizations/ |  |
| [**cloudFloatingIpv4AuthorizeCreate()**](CloudApi.md#cloudFloatingIpv4AuthorizeCreate) | **POST** /api/cloud/floating-ipv4/{id}/authorize/ |  |
| [**cloudFloatingIpv4Create()**](CloudApi.md#cloudFloatingIpv4Create) | **POST** /api/cloud/floating-ipv4/ |  |
| [**cloudFloatingIpv4Destroy()**](CloudApi.md#cloudFloatingIpv4Destroy) | **DELETE** /api/cloud/floating-ipv4/{id}/ |  |
| [**cloudFloatingIpv4List()**](CloudApi.md#cloudFloatingIpv4List) | **GET** /api/cloud/floating-ipv4/ |  |
| [**cloudFloatingIpv4Retrieve()**](CloudApi.md#cloudFloatingIpv4Retrieve) | **GET** /api/cloud/floating-ipv4/{id}/ |  |
| [**cloudFloatingIpv4UnauthorizeCreate()**](CloudApi.md#cloudFloatingIpv4UnauthorizeCreate) | **POST** /api/cloud/floating-ipv4/{id}/unauthorize/ |  |
| [**cloudFloatingIpv6AuthorizationsList()**](CloudApi.md#cloudFloatingIpv6AuthorizationsList) | **GET** /api/cloud/floating-ipv6/{id}/authorizations/ |  |
| [**cloudFloatingIpv6AuthorizeCreate()**](CloudApi.md#cloudFloatingIpv6AuthorizeCreate) | **POST** /api/cloud/floating-ipv6/{id}/authorize/ |  |
| [**cloudFloatingIpv6Create()**](CloudApi.md#cloudFloatingIpv6Create) | **POST** /api/cloud/floating-ipv6/ |  |
| [**cloudFloatingIpv6Destroy()**](CloudApi.md#cloudFloatingIpv6Destroy) | **DELETE** /api/cloud/floating-ipv6/{id}/ |  |
| [**cloudFloatingIpv6List()**](CloudApi.md#cloudFloatingIpv6List) | **GET** /api/cloud/floating-ipv6/ |  |
| [**cloudFloatingIpv6Retrieve()**](CloudApi.md#cloudFloatingIpv6Retrieve) | **GET** /api/cloud/floating-ipv6/{id}/ |  |
| [**cloudFloatingIpv6UnauthorizeCreate()**](CloudApi.md#cloudFloatingIpv6UnauthorizeCreate) | **POST** /api/cloud/floating-ipv6/{id}/unauthorize/ |  |
| [**cloudGenerationsList()**](CloudApi.md#cloudGenerationsList) | **GET** /api/cloud/generations/ | List hardware generations |
| [**cloudGenerationsRetrieve()**](CloudApi.md#cloudGenerationsRetrieve) | **GET** /api/cloud/generations/{slug}/ |  |
| [**cloudImagesList()**](CloudApi.md#cloudImagesList) | **GET** /api/cloud/images/ |  |
| [**cloudImagesRetrieve()**](CloudApi.md#cloudImagesRetrieve) | **GET** /api/cloud/images/{id}/ |  |
| [**cloudIpv4Create()**](CloudApi.md#cloudIpv4Create) | **POST** /api/cloud/ipv4/ |  |
| [**cloudIpv4Destroy()**](CloudApi.md#cloudIpv4Destroy) | **DELETE** /api/cloud/ipv4/{id}/ |  |
| [**cloudIpv4DetachCreate()**](CloudApi.md#cloudIpv4DetachCreate) | **POST** /api/cloud/ipv4/{id}/detach/ |  |
| [**cloudIpv4List()**](CloudApi.md#cloudIpv4List) | **GET** /api/cloud/ipv4/ |  |
| [**cloudIpv4RdnsCreate()**](CloudApi.md#cloudIpv4RdnsCreate) | **POST** /api/cloud/ipv4/{id}/rdns/ |  |
| [**cloudIpv4RdnsRetrieve()**](CloudApi.md#cloudIpv4RdnsRetrieve) | **GET** /api/cloud/ipv4/{id}/rdns/ |  |
| [**cloudIpv4Retrieve()**](CloudApi.md#cloudIpv4Retrieve) | **GET** /api/cloud/ipv4/{id}/ |  |
| [**cloudIpv6Create()**](CloudApi.md#cloudIpv6Create) | **POST** /api/cloud/ipv6/ |  |
| [**cloudIpv6Destroy()**](CloudApi.md#cloudIpv6Destroy) | **DELETE** /api/cloud/ipv6/{id}/ |  |
| [**cloudIpv6DetachCreate()**](CloudApi.md#cloudIpv6DetachCreate) | **POST** /api/cloud/ipv6/{id}/detach/ |  |
| [**cloudIpv6List()**](CloudApi.md#cloudIpv6List) | **GET** /api/cloud/ipv6/ |  |
| [**cloudIpv6RdnsCreate()**](CloudApi.md#cloudIpv6RdnsCreate) | **POST** /api/cloud/ipv6/{id}/rdns/ |  |
| [**cloudIpv6RdnsRetrieve()**](CloudApi.md#cloudIpv6RdnsRetrieve) | **GET** /api/cloud/ipv6/{id}/rdns/ |  |
| [**cloudIpv6Retrieve()**](CloudApi.md#cloudIpv6Retrieve) | **GET** /api/cloud/ipv6/{id}/ |  |
| [**cloudPrivateNetworksAddServerCreate()**](CloudApi.md#cloudPrivateNetworksAddServerCreate) | **POST** /api/cloud/private-networks/{id}/add-server/ |  |
| [**cloudPrivateNetworksCreate()**](CloudApi.md#cloudPrivateNetworksCreate) | **POST** /api/cloud/private-networks/ |  |
| [**cloudPrivateNetworksDestroy()**](CloudApi.md#cloudPrivateNetworksDestroy) | **DELETE** /api/cloud/private-networks/{id}/ |  |
| [**cloudPrivateNetworksList()**](CloudApi.md#cloudPrivateNetworksList) | **GET** /api/cloud/private-networks/ |  |
| [**cloudPrivateNetworksPartialUpdate()**](CloudApi.md#cloudPrivateNetworksPartialUpdate) | **PATCH** /api/cloud/private-networks/{id}/ |  |
| [**cloudPrivateNetworksRemoveServerCreate()**](CloudApi.md#cloudPrivateNetworksRemoveServerCreate) | **POST** /api/cloud/private-networks/{id}/remove-server/ |  |
| [**cloudPrivateNetworksRetrieve()**](CloudApi.md#cloudPrivateNetworksRetrieve) | **GET** /api/cloud/private-networks/{id}/ |  |
| [**cloudPrivateNetworksUpdate()**](CloudApi.md#cloudPrivateNetworksUpdate) | **PUT** /api/cloud/private-networks/{id}/ |  |
| [**cloudServerPackagesByGenerationRetrieve()**](CloudApi.md#cloudServerPackagesByGenerationRetrieve) | **GET** /api/cloud/server-packages/by-generation/ |  |
| [**cloudServerPackagesList()**](CloudApi.md#cloudServerPackagesList) | **GET** /api/cloud/server-packages/ |  |
| [**cloudServerPackagesRetrieve()**](CloudApi.md#cloudServerPackagesRetrieve) | **GET** /api/cloud/server-packages/{id}/ |  |
| [**cloudServersActivityRetrieve()**](CloudApi.md#cloudServersActivityRetrieve) | **GET** /api/cloud/servers/{id}/activity/ |  |
| [**cloudServersAttachIpv4Create()**](CloudApi.md#cloudServersAttachIpv4Create) | **POST** /api/cloud/servers/{id}/attach-ipv4/ |  |
| [**cloudServersAttachIpv6Create()**](CloudApi.md#cloudServersAttachIpv6Create) | **POST** /api/cloud/servers/{id}/attach-ipv6/ |  |
| [**cloudServersConsoleCreate()**](CloudApi.md#cloudServersConsoleCreate) | **POST** /api/cloud/servers/{id}/console/ |  |
| [**cloudServersCreate()**](CloudApi.md#cloudServersCreate) | **POST** /api/cloud/servers/ |  |
| [**cloudServersDestroy()**](CloudApi.md#cloudServersDestroy) | **DELETE** /api/cloud/servers/{id}/ |  |
| [**cloudServersDestroyProtectionCreate()**](CloudApi.md#cloudServersDestroyProtectionCreate) | **POST** /api/cloud/servers/{id}/destroy-protection/ |  |
| [**cloudServersDetachIpv4Create()**](CloudApi.md#cloudServersDetachIpv4Create) | **POST** /api/cloud/servers/{id}/detach-ipv4/ |  |
| [**cloudServersDetachIpv6Create()**](CloudApi.md#cloudServersDetachIpv6Create) | **POST** /api/cloud/servers/{id}/detach-ipv6/ |  |
| [**cloudServersList()**](CloudApi.md#cloudServersList) | **GET** /api/cloud/servers/ |  |
| [**cloudServersModifyPackageCreate()**](CloudApi.md#cloudServersModifyPackageCreate) | **POST** /api/cloud/servers/{id}/modify-package/ |  |
| [**cloudServersPartialUpdate()**](CloudApi.md#cloudServersPartialUpdate) | **PATCH** /api/cloud/servers/{id}/ |  |
| [**cloudServersPowerManagementCreate()**](CloudApi.md#cloudServersPowerManagementCreate) | **POST** /api/cloud/servers/{id}/power-management/ |  |
| [**cloudServersPowerManagementRetrieve()**](CloudApi.md#cloudServersPowerManagementRetrieve) | **GET** /api/cloud/servers/{id}/power-management/ |  |
| [**cloudServersPublicInterfaceCreate()**](CloudApi.md#cloudServersPublicInterfaceCreate) | **POST** /api/cloud/servers/{id}/public-interface/ |  |
| [**cloudServersPublicInterfaceDestroy()**](CloudApi.md#cloudServersPublicInterfaceDestroy) | **DELETE** /api/cloud/servers/{id}/public-interface/ |  |
| [**cloudServersPublicInterfaceRetrieve()**](CloudApi.md#cloudServersPublicInterfaceRetrieve) | **GET** /api/cloud/servers/{id}/public-interface/ |  |
| [**cloudServersRetrieve()**](CloudApi.md#cloudServersRetrieve) | **GET** /api/cloud/servers/{id}/ |  |
| [**cloudServersRetryProvisionCreate()**](CloudApi.md#cloudServersRetryProvisionCreate) | **POST** /api/cloud/servers/{id}/retry-provision/ |  |
| [**cloudServersSnapshotsCreate()**](CloudApi.md#cloudServersSnapshotsCreate) | **POST** /api/cloud/servers/{id}/snapshots/ |  |
| [**cloudServersSnapshotsDestroy()**](CloudApi.md#cloudServersSnapshotsDestroy) | **DELETE** /api/cloud/servers/{id}/snapshots/{snapshot_name}/ |  |
| [**cloudServersSnapshotsList()**](CloudApi.md#cloudServersSnapshotsList) | **GET** /api/cloud/servers/{id}/snapshots/ |  |
| [**cloudServersSnapshotsRollbackCreate()**](CloudApi.md#cloudServersSnapshotsRollbackCreate) | **POST** /api/cloud/servers/{id}/snapshots/{snapshot_name}/rollback/ |  |
| [**cloudServersUpdate()**](CloudApi.md#cloudServersUpdate) | **PUT** /api/cloud/servers/{id}/ |  |
| [**cloudServersUsageRetrieve()**](CloudApi.md#cloudServersUsageRetrieve) | **GET** /api/cloud/servers/{id}/usage/ |  |
| [**cloudServersVolumesCreate()**](CloudApi.md#cloudServersVolumesCreate) | **POST** /api/cloud/servers/{server_id}/volumes/ |  |
| [**cloudServersVolumesDestroy()**](CloudApi.md#cloudServersVolumesDestroy) | **DELETE** /api/cloud/servers/{server_id}/volumes/{volume_id}/ |  |
| [**cloudServersVolumesList()**](CloudApi.md#cloudServersVolumesList) | **GET** /api/cloud/servers/{server_id}/volumes/ |  |
| [**cloudServersVolumesPartialUpdate()**](CloudApi.md#cloudServersVolumesPartialUpdate) | **PATCH** /api/cloud/servers/{server_id}/volumes/{volume_id}/ |  |
| [**cloudServersVolumesRetrieve()**](CloudApi.md#cloudServersVolumesRetrieve) | **GET** /api/cloud/servers/{server_id}/volumes/{volume_id}/ |  |
| [**cloudServersVolumesUpdate()**](CloudApi.md#cloudServersVolumesUpdate) | **PUT** /api/cloud/servers/{server_id}/volumes/{volume_id}/ |  |
| [**cloudStorageProductsList()**](CloudApi.md#cloudStorageProductsList) | **GET** /api/cloud/storage-products/ |  |
| [**cloudStorageProductsRetrieve()**](CloudApi.md#cloudStorageProductsRetrieve) | **GET** /api/cloud/storage-products/{id}/ |  |
| [**cloudVolumesAttachCreate()**](CloudApi.md#cloudVolumesAttachCreate) | **POST** /api/cloud/volumes/{id}/attach/ |  |
| [**cloudVolumesDestroy()**](CloudApi.md#cloudVolumesDestroy) | **DELETE** /api/cloud/volumes/{id}/ |  |
| [**cloudVolumesDetachCreate()**](CloudApi.md#cloudVolumesDetachCreate) | **POST** /api/cloud/volumes/{id}/detach/ |  |
| [**cloudVolumesList()**](CloudApi.md#cloudVolumesList) | **GET** /api/cloud/volumes/ |  |
| [**cloudVolumesPartialUpdate()**](CloudApi.md#cloudVolumesPartialUpdate) | **PATCH** /api/cloud/volumes/{id}/ |  |
| [**cloudVolumesRetrieve()**](CloudApi.md#cloudVolumesRetrieve) | **GET** /api/cloud/volumes/{id}/ |  |
| [**cloudVolumesUpdate()**](CloudApi.md#cloudVolumesUpdate) | **PUT** /api/cloud/volumes/{id}/ |  |


## `cloudBucketsCreate()`

```php
cloudBucketsCreate($bucket): \PidginHost\Sdk\Model\Bucket
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket = new \PidginHost\Sdk\Model\Bucket(); // \PidginHost\Sdk\Model\Bucket

try {
    $result = $apiInstance->cloudBucketsCreate($bucket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket** | [**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsCredentialsRevealCreate()`

```php
cloudBucketsCredentialsRevealCreate($id, $bucket): \PidginHost\Sdk\Model\Bucket
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.
$bucket = new \PidginHost\Sdk\Model\Bucket(); // \PidginHost\Sdk\Model\Bucket

try {
    $result = $apiInstance->cloudBucketsCredentialsRevealCreate($id, $bucket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsCredentialsRevealCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |
| **bucket** | [**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsCredentialsRotateCreate()`

```php
cloudBucketsCredentialsRotateCreate($id, $bucket): \PidginHost\Sdk\Model\Bucket
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.
$bucket = new \PidginHost\Sdk\Model\Bucket(); // \PidginHost\Sdk\Model\Bucket

try {
    $result = $apiInstance->cloudBucketsCredentialsRotateCreate($id, $bucket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsCredentialsRotateCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |
| **bucket** | [**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsDestroy()`

```php
cloudBucketsDestroy($id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.

try {
    $apiInstance->cloudBucketsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |

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

## `cloudBucketsList()`

```php
cloudBucketsList(): \PidginHost\Sdk\Model\Bucket[]
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudBucketsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\Bucket[]**](../Model/Bucket.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsResizeCreate()`

```php
cloudBucketsResizeCreate($id, $bucket): \PidginHost\Sdk\Model\Bucket
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.
$bucket = new \PidginHost\Sdk\Model\Bucket(); // \PidginHost\Sdk\Model\Bucket

try {
    $result = $apiInstance->cloudBucketsResizeCreate($id, $bucket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsResizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |
| **bucket** | [**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsRetrieve()`

```php
cloudBucketsRetrieve($id): \PidginHost\Sdk\Model\Bucket
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.

try {
    $result = $apiInstance->cloudBucketsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsVisibilityCreate()`

```php
cloudBucketsVisibilityCreate($id, $bucket): \PidginHost\Sdk\Model\Bucket
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.
$bucket = new \PidginHost\Sdk\Model\Bucket(); // \PidginHost\Sdk\Model\Bucket

try {
    $result = $apiInstance->cloudBucketsVisibilityCreate($id, $bucket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsVisibilityCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |
| **bucket** | [**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetCreate()`

```php
cloudFirewallRulesSetCreate($firewall_rules_set): \PidginHost\Sdk\Model\FirewallRulesSet
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_rules_set = new \PidginHost\Sdk\Model\FirewallRulesSet(); // \PidginHost\Sdk\Model\FirewallRulesSet

try {
    $result = $apiInstance->cloudFirewallRulesSetCreate($firewall_rules_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_rules_set** | [**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetDestroy()`

```php
cloudFirewallRulesSetDestroy($id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this firewall rules set.

try {
    $apiInstance->cloudFirewallRulesSetDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this firewall rules set. | |

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

## `cloudFirewallRulesSetList()`

```php
cloudFirewallRulesSetList(): \PidginHost\Sdk\Model\FirewallRulesSet[]
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudFirewallRulesSetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet[]**](../Model/FirewallRulesSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetPartialUpdate()`

```php
cloudFirewallRulesSetPartialUpdate($id, $patched_firewall_rules_set): \PidginHost\Sdk\Model\FirewallRulesSet
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this firewall rules set.
$patched_firewall_rules_set = new \PidginHost\Sdk\Model\PatchedFirewallRulesSet(); // \PidginHost\Sdk\Model\PatchedFirewallRulesSet

try {
    $result = $apiInstance->cloudFirewallRulesSetPartialUpdate($id, $patched_firewall_rules_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this firewall rules set. | |
| **patched_firewall_rules_set** | [**\PidginHost\Sdk\Model\PatchedFirewallRulesSet**](../Model/PatchedFirewallRulesSet.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRetrieve()`

```php
cloudFirewallRulesSetRetrieve($id): \PidginHost\Sdk\Model\FirewallRulesSet
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this firewall rules set.

try {
    $result = $apiInstance->cloudFirewallRulesSetRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this firewall rules set. | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesCreate()`

```php
cloudFirewallRulesSetRulesCreate($rules_set_id, $firewall_rule): \PidginHost\Sdk\Model\FirewallRule
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rules_set_id = 'rules_set_id_example'; // string
$firewall_rule = new \PidginHost\Sdk\Model\FirewallRule(); // \PidginHost\Sdk\Model\FirewallRule

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesCreate($rules_set_id, $firewall_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rules_set_id** | **string**|  | |
| **firewall_rule** | [**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesDestroy()`

```php
cloudFirewallRulesSetRulesDestroy($rule_id, $rules_set_id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$rules_set_id = 'rules_set_id_example'; // string

try {
    $apiInstance->cloudFirewallRulesSetRulesDestroy($rule_id, $rules_set_id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |
| **rules_set_id** | **string**|  | |

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

## `cloudFirewallRulesSetRulesList()`

```php
cloudFirewallRulesSetRulesList($rules_set_id): \PidginHost\Sdk\Model\FirewallRule[]
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rules_set_id = 'rules_set_id_example'; // string

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesList($rules_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rules_set_id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule[]**](../Model/FirewallRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesPartialUpdate()`

```php
cloudFirewallRulesSetRulesPartialUpdate($rule_id, $rules_set_id, $patched_firewall_rule): \PidginHost\Sdk\Model\FirewallRule
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$rules_set_id = 'rules_set_id_example'; // string
$patched_firewall_rule = new \PidginHost\Sdk\Model\PatchedFirewallRule(); // \PidginHost\Sdk\Model\PatchedFirewallRule

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesPartialUpdate($rule_id, $rules_set_id, $patched_firewall_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |
| **rules_set_id** | **string**|  | |
| **patched_firewall_rule** | [**\PidginHost\Sdk\Model\PatchedFirewallRule**](../Model/PatchedFirewallRule.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesRetrieve()`

```php
cloudFirewallRulesSetRulesRetrieve($rule_id, $rules_set_id): \PidginHost\Sdk\Model\FirewallRule
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$rules_set_id = 'rules_set_id_example'; // string

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesRetrieve($rule_id, $rules_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |
| **rules_set_id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesUpdate()`

```php
cloudFirewallRulesSetRulesUpdate($rule_id, $rules_set_id, $firewall_rule): \PidginHost\Sdk\Model\FirewallRule
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$rules_set_id = 'rules_set_id_example'; // string
$firewall_rule = new \PidginHost\Sdk\Model\FirewallRule(); // \PidginHost\Sdk\Model\FirewallRule

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesUpdate($rule_id, $rules_set_id, $firewall_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |
| **rules_set_id** | **string**|  | |
| **firewall_rule** | [**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetUpdate()`

```php
cloudFirewallRulesSetUpdate($id, $firewall_rules_set): \PidginHost\Sdk\Model\FirewallRulesSet
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this firewall rules set.
$firewall_rules_set = new \PidginHost\Sdk\Model\FirewallRulesSet(); // \PidginHost\Sdk\Model\FirewallRulesSet

try {
    $result = $apiInstance->cloudFirewallRulesSetUpdate($id, $firewall_rules_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this firewall rules set. | |
| **firewall_rules_set** | [**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4AuthorizationsList()`

```php
cloudFloatingIpv4AuthorizationsList($id, $page): \PidginHost\Sdk\Model\PaginatedFloatingIPAuthorizationList
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudFloatingIpv4AuthorizationsList($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4AuthorizationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedFloatingIPAuthorizationList**](../Model/PaginatedFloatingIPAuthorizationList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4AuthorizeCreate()`

```php
cloudFloatingIpv4AuthorizeCreate($id, $floating_ip_authorize_request): \PidginHost\Sdk\Model\FloatingIPv4AuthorizeResponse
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.
$floating_ip_authorize_request = new \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest(); // \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest

try {
    $result = $apiInstance->cloudFloatingIpv4AuthorizeCreate($id, $floating_ip_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4AuthorizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |
| **floating_ip_authorize_request** | [**\PidginHost\Sdk\Model\FloatingIPAuthorizeRequest**](../Model/FloatingIPAuthorizeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv4AuthorizeResponse**](../Model/FloatingIPv4AuthorizeResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4Create()`

```php
cloudFloatingIpv4Create($floating_ipv4_create): \PidginHost\Sdk\Model\FloatingIPv4
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$floating_ipv4_create = new \PidginHost\Sdk\Model\FloatingIPv4Create(); // \PidginHost\Sdk\Model\FloatingIPv4Create

try {
    $result = $apiInstance->cloudFloatingIpv4Create($floating_ipv4_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **floating_ipv4_create** | [**\PidginHost\Sdk\Model\FloatingIPv4Create**](../Model/FloatingIPv4Create.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv4**](../Model/FloatingIPv4.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4Destroy()`

```php
cloudFloatingIpv4Destroy($id)
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.

try {
    $apiInstance->cloudFloatingIpv4Destroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4Destroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |

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

## `cloudFloatingIpv4List()`

```php
cloudFloatingIpv4List($page): \PidginHost\Sdk\Model\PaginatedFloatingIPv4List
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudFloatingIpv4List($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4List: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedFloatingIPv4List**](../Model/PaginatedFloatingIPv4List.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4Retrieve()`

```php
cloudFloatingIpv4Retrieve($id): \PidginHost\Sdk\Model\FloatingIPv4
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.

try {
    $result = $apiInstance->cloudFloatingIpv4Retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4Retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv4**](../Model/FloatingIPv4.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4UnauthorizeCreate()`

```php
cloudFloatingIpv4UnauthorizeCreate($id, $floating_ip_authorize_request): \PidginHost\Sdk\Model\FloatingIPv4UnauthorizeResponse
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.
$floating_ip_authorize_request = new \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest(); // \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest

try {
    $result = $apiInstance->cloudFloatingIpv4UnauthorizeCreate($id, $floating_ip_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4UnauthorizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |
| **floating_ip_authorize_request** | [**\PidginHost\Sdk\Model\FloatingIPAuthorizeRequest**](../Model/FloatingIPAuthorizeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv4UnauthorizeResponse**](../Model/FloatingIPv4UnauthorizeResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6AuthorizationsList()`

```php
cloudFloatingIpv6AuthorizationsList($id, $page): \PidginHost\Sdk\Model\PaginatedFloatingIPAuthorizationList
```



Manage floating IPv6 addresses.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudFloatingIpv6AuthorizationsList($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6AuthorizationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedFloatingIPAuthorizationList**](../Model/PaginatedFloatingIPAuthorizationList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6AuthorizeCreate()`

```php
cloudFloatingIpv6AuthorizeCreate($id, $floating_ip_authorize_request): \PidginHost\Sdk\Model\FloatingIPv6AuthorizeResponse
```



Manage floating IPv6 addresses.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.
$floating_ip_authorize_request = new \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest(); // \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest

try {
    $result = $apiInstance->cloudFloatingIpv6AuthorizeCreate($id, $floating_ip_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6AuthorizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |
| **floating_ip_authorize_request** | [**\PidginHost\Sdk\Model\FloatingIPAuthorizeRequest**](../Model/FloatingIPAuthorizeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv6AuthorizeResponse**](../Model/FloatingIPv6AuthorizeResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6Create()`

```php
cloudFloatingIpv6Create($floating_ipv6_create): \PidginHost\Sdk\Model\FloatingIPv6
```



Manage floating IPv6 addresses.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$floating_ipv6_create = new \PidginHost\Sdk\Model\FloatingIPv6Create(); // \PidginHost\Sdk\Model\FloatingIPv6Create

try {
    $result = $apiInstance->cloudFloatingIpv6Create($floating_ipv6_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **floating_ipv6_create** | [**\PidginHost\Sdk\Model\FloatingIPv6Create**](../Model/FloatingIPv6Create.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv6**](../Model/FloatingIPv6.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6Destroy()`

```php
cloudFloatingIpv6Destroy($id)
```



Manage floating IPv6 addresses.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.

try {
    $apiInstance->cloudFloatingIpv6Destroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6Destroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |

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

## `cloudFloatingIpv6List()`

```php
cloudFloatingIpv6List($page): \PidginHost\Sdk\Model\PaginatedFloatingIPv6List
```



Manage floating IPv6 addresses.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudFloatingIpv6List($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6List: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedFloatingIPv6List**](../Model/PaginatedFloatingIPv6List.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6Retrieve()`

```php
cloudFloatingIpv6Retrieve($id): \PidginHost\Sdk\Model\FloatingIPv6
```



Manage floating IPv6 addresses.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.

try {
    $result = $apiInstance->cloudFloatingIpv6Retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6Retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv6**](../Model/FloatingIPv6.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6UnauthorizeCreate()`

```php
cloudFloatingIpv6UnauthorizeCreate($id, $floating_ip_authorize_request): \PidginHost\Sdk\Model\FloatingIPv6UnauthorizeResponse
```



Manage floating IPv6 addresses.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.
$floating_ip_authorize_request = new \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest(); // \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest

try {
    $result = $apiInstance->cloudFloatingIpv6UnauthorizeCreate($id, $floating_ip_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6UnauthorizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |
| **floating_ip_authorize_request** | [**\PidginHost\Sdk\Model\FloatingIPAuthorizeRequest**](../Model/FloatingIPAuthorizeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv6UnauthorizeResponse**](../Model/FloatingIPv6UnauthorizeResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGenerationsList()`

```php
cloudGenerationsList(): \PidginHost\Sdk\Model\HardwareGeneration[]
```

List hardware generations

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudGenerationsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGenerationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\HardwareGeneration[]**](../Model/HardwareGeneration.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGenerationsRetrieve()`

```php
cloudGenerationsRetrieve($slug): \PidginHost\Sdk\Model\HardwareGeneration
```



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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->cloudGenerationsRetrieve($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGenerationsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\HardwareGeneration**](../Model/HardwareGeneration.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudImagesList()`

```php
cloudImagesList($page): \PidginHost\Sdk\Model\PaginatedOSImageList
```



List of available OS images

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudImagesList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudImagesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedOSImageList**](../Model/PaginatedOSImageList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudImagesRetrieve()`

```php
cloudImagesRetrieve($id): \PidginHost\Sdk\Model\OSImage
```



List of available OS images

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this operating system.

try {
    $result = $apiInstance->cloudImagesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudImagesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this operating system. | |

### Return type

[**\PidginHost\Sdk\Model\OSImage**](../Model/OSImage.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4Create()`

```php
cloudIpv4Create($public_ipv4): \PidginHost\Sdk\Model\PublicIPv4
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_ipv4 = new \PidginHost\Sdk\Model\PublicIPv4(); // \PidginHost\Sdk\Model\PublicIPv4

try {
    $result = $apiInstance->cloudIpv4Create($public_ipv4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_ipv4** | [**\PidginHost\Sdk\Model\PublicIPv4**](../Model/PublicIPv4.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PublicIPv4**](../Model/PublicIPv4.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4Destroy()`

```php
cloudIpv4Destroy($id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.

try {
    $apiInstance->cloudIpv4Destroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4Destroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |

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

## `cloudIpv4DetachCreate()`

```php
cloudIpv4DetachCreate($id, $public_ipv4): \PidginHost\Sdk\Model\DetachIPv4Response
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.
$public_ipv4 = new \PidginHost\Sdk\Model\PublicIPv4(); // \PidginHost\Sdk\Model\PublicIPv4

try {
    $result = $apiInstance->cloudIpv4DetachCreate($id, $public_ipv4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4DetachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |
| **public_ipv4** | [**\PidginHost\Sdk\Model\PublicIPv4**](../Model/PublicIPv4.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\DetachIPv4Response**](../Model/DetachIPv4Response.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4List()`

```php
cloudIpv4List($page): \PidginHost\Sdk\Model\PaginatedPublicIPv4List
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudIpv4List($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4List: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedPublicIPv4List**](../Model/PaginatedPublicIPv4List.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4RdnsCreate()`

```php
cloudIpv4RdnsCreate($id, $reverse_dns): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for this IPv4 address.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.
$reverse_dns = new \PidginHost\Sdk\Model\ReverseDNS(); // \PidginHost\Sdk\Model\ReverseDNS

try {
    $result = $apiInstance->cloudIpv4RdnsCreate($id, $reverse_dns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4RdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |
| **reverse_dns** | [**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4RdnsRetrieve()`

```php
cloudIpv4RdnsRetrieve($id): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for this IPv4 address.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.

try {
    $result = $apiInstance->cloudIpv4RdnsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4RdnsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4Retrieve()`

```php
cloudIpv4Retrieve($id): \PidginHost\Sdk\Model\PublicIPv4
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.

try {
    $result = $apiInstance->cloudIpv4Retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4Retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |

### Return type

[**\PidginHost\Sdk\Model\PublicIPv4**](../Model/PublicIPv4.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6Create()`

```php
cloudIpv6Create($public_ipv6): \PidginHost\Sdk\Model\PublicIPv6
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_ipv6 = new \PidginHost\Sdk\Model\PublicIPv6(); // \PidginHost\Sdk\Model\PublicIPv6

try {
    $result = $apiInstance->cloudIpv6Create($public_ipv6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_ipv6** | [**\PidginHost\Sdk\Model\PublicIPv6**](../Model/PublicIPv6.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PublicIPv6**](../Model/PublicIPv6.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6Destroy()`

```php
cloudIpv6Destroy($id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.

try {
    $apiInstance->cloudIpv6Destroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6Destroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |

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

## `cloudIpv6DetachCreate()`

```php
cloudIpv6DetachCreate($id, $public_ipv6): \PidginHost\Sdk\Model\DetachIPv6Response
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.
$public_ipv6 = new \PidginHost\Sdk\Model\PublicIPv6(); // \PidginHost\Sdk\Model\PublicIPv6

try {
    $result = $apiInstance->cloudIpv6DetachCreate($id, $public_ipv6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6DetachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |
| **public_ipv6** | [**\PidginHost\Sdk\Model\PublicIPv6**](../Model/PublicIPv6.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\DetachIPv6Response**](../Model/DetachIPv6Response.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6List()`

```php
cloudIpv6List($page): \PidginHost\Sdk\Model\PaginatedPublicIPv6List
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudIpv6List($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6List: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedPublicIPv6List**](../Model/PaginatedPublicIPv6List.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6RdnsCreate()`

```php
cloudIpv6RdnsCreate($id, $reverse_dns): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for this IPv6 address.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.
$reverse_dns = new \PidginHost\Sdk\Model\ReverseDNS(); // \PidginHost\Sdk\Model\ReverseDNS

try {
    $result = $apiInstance->cloudIpv6RdnsCreate($id, $reverse_dns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6RdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |
| **reverse_dns** | [**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6RdnsRetrieve()`

```php
cloudIpv6RdnsRetrieve($id): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for this IPv6 address.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.

try {
    $result = $apiInstance->cloudIpv6RdnsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6RdnsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6Retrieve()`

```php
cloudIpv6Retrieve($id): \PidginHost\Sdk\Model\PublicIPv6
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.

try {
    $result = $apiInstance->cloudIpv6Retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6Retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |

### Return type

[**\PidginHost\Sdk\Model\PublicIPv6**](../Model/PublicIPv6.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksAddServerCreate()`

```php
cloudPrivateNetworksAddServerCreate($id, $private_network_add_host): \PidginHost\Sdk\Model\AddServerResponse
```



Manage private networks

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$private_network_add_host = new \PidginHost\Sdk\Model\PrivateNetworkAddHost(); // \PidginHost\Sdk\Model\PrivateNetworkAddHost

try {
    $result = $apiInstance->cloudPrivateNetworksAddServerCreate($id, $private_network_add_host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksAddServerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **private_network_add_host** | [**\PidginHost\Sdk\Model\PrivateNetworkAddHost**](../Model/PrivateNetworkAddHost.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AddServerResponse**](../Model/AddServerResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksCreate()`

```php
cloudPrivateNetworksCreate($private_network): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$private_network = new \PidginHost\Sdk\Model\PrivateNetwork(); // \PidginHost\Sdk\Model\PrivateNetwork

try {
    $result = $apiInstance->cloudPrivateNetworksCreate($private_network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **private_network** | [**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksDestroy()`

```php
cloudPrivateNetworksDestroy($id)
```



Manage private networks

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.

try {
    $apiInstance->cloudPrivateNetworksDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |

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

## `cloudPrivateNetworksList()`

```php
cloudPrivateNetworksList($page): \PidginHost\Sdk\Model\PaginatedPrivateNetworkList
```



Manage private networks

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudPrivateNetworksList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedPrivateNetworkList**](../Model/PaginatedPrivateNetworkList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksPartialUpdate()`

```php
cloudPrivateNetworksPartialUpdate($id, $patched_private_network): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$patched_private_network = new \PidginHost\Sdk\Model\PatchedPrivateNetwork(); // \PidginHost\Sdk\Model\PatchedPrivateNetwork

try {
    $result = $apiInstance->cloudPrivateNetworksPartialUpdate($id, $patched_private_network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **patched_private_network** | [**\PidginHost\Sdk\Model\PatchedPrivateNetwork**](../Model/PatchedPrivateNetwork.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksRemoveServerCreate()`

```php
cloudPrivateNetworksRemoveServerCreate($id, $private_network_remove_host): \PidginHost\Sdk\Model\RemoveServerResponse
```



Manage private networks

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$private_network_remove_host = new \PidginHost\Sdk\Model\PrivateNetworkRemoveHost(); // \PidginHost\Sdk\Model\PrivateNetworkRemoveHost

try {
    $result = $apiInstance->cloudPrivateNetworksRemoveServerCreate($id, $private_network_remove_host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksRemoveServerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **private_network_remove_host** | [**\PidginHost\Sdk\Model\PrivateNetworkRemoveHost**](../Model/PrivateNetworkRemoveHost.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\RemoveServerResponse**](../Model/RemoveServerResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksRetrieve()`

```php
cloudPrivateNetworksRetrieve($id): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.

try {
    $result = $apiInstance->cloudPrivateNetworksRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksUpdate()`

```php
cloudPrivateNetworksUpdate($id, $private_network): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$private_network = new \PidginHost\Sdk\Model\PrivateNetwork(); // \PidginHost\Sdk\Model\PrivateNetwork

try {
    $result = $apiInstance->cloudPrivateNetworksUpdate($id, $private_network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **private_network** | [**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServerPackagesByGenerationRetrieve()`

```php
cloudServerPackagesByGenerationRetrieve(): \PidginHost\Sdk\Model\ServerProduct
```



List of available server products

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudServerPackagesByGenerationRetrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServerPackagesByGenerationRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\ServerProduct**](../Model/ServerProduct.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServerPackagesList()`

```php
cloudServerPackagesList($page): \PidginHost\Sdk\Model\PaginatedServerProductList
```



List of available server products

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudServerPackagesList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServerPackagesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedServerProductList**](../Model/PaginatedServerProductList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServerPackagesRetrieve()`

```php
cloudServerPackagesRetrieve($id): \PidginHost\Sdk\Model\ServerProduct
```



List of available server products

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this metered product.

try {
    $result = $apiInstance->cloudServerPackagesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServerPackagesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this metered product. | |

### Return type

[**\PidginHost\Sdk\Model\ServerProduct**](../Model/ServerProduct.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersActivityRetrieve()`

```php
cloudServersActivityRetrieve($id): \PidginHost\Sdk\Model\ActivityLogResponse
```



Get activity log for a server.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersActivityRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersActivityRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ActivityLogResponse**](../Model/ActivityLogResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersAttachIpv4Create()`

```php
cloudServersAttachIpv4Create($id, $attach_ipv4): \PidginHost\Sdk\Model\AttachIPv4
```



Attach IPv4 address to server.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$attach_ipv4 = new \PidginHost\Sdk\Model\AttachIPv4(); // \PidginHost\Sdk\Model\AttachIPv4

try {
    $result = $apiInstance->cloudServersAttachIpv4Create($id, $attach_ipv4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersAttachIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **attach_ipv4** | [**\PidginHost\Sdk\Model\AttachIPv4**](../Model/AttachIPv4.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AttachIPv4**](../Model/AttachIPv4.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersAttachIpv6Create()`

```php
cloudServersAttachIpv6Create($id, $attach_ipv6): \PidginHost\Sdk\Model\AttachIPv6
```



Attach IPv6 address to server.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$attach_ipv6 = new \PidginHost\Sdk\Model\AttachIPv6(); // \PidginHost\Sdk\Model\AttachIPv6

try {
    $result = $apiInstance->cloudServersAttachIpv6Create($id, $attach_ipv6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersAttachIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **attach_ipv6** | [**\PidginHost\Sdk\Model\AttachIPv6**](../Model/AttachIPv6.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AttachIPv6**](../Model/AttachIPv6.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersConsoleCreate()`

```php
cloudServersConsoleCreate($id, $server): \PidginHost\Sdk\Model\ConsoleToken
```



Get a VNC console token for browser-based access.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server = new \PidginHost\Sdk\Model\Server(); // \PidginHost\Sdk\Model\Server

try {
    $result = $apiInstance->cloudServersConsoleCreate($id, $server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersConsoleCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server** | [**\PidginHost\Sdk\Model\Server**](../Model/Server.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\ConsoleToken**](../Model/ConsoleToken.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersCreate()`

```php
cloudServersCreate($server_add): \PidginHost\Sdk\Model\ServerAddResponse
```



Create new server

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_add = new \PidginHost\Sdk\Model\ServerAdd(); // \PidginHost\Sdk\Model\ServerAdd

try {
    $result = $apiInstance->cloudServersCreate($server_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_add** | [**\PidginHost\Sdk\Model\ServerAdd**](../Model/ServerAdd.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ServerAddResponse**](../Model/ServerAddResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersDestroy()`

```php
cloudServersDestroy($id)
```



Cloud servers

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $apiInstance->cloudServersDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

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

## `cloudServersDestroyProtectionCreate()`

```php
cloudServersDestroyProtectionCreate($id, $destroy_protection): \PidginHost\Sdk\Model\DestroyProtection
```



Enable or disable destroy protection.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$destroy_protection = new \PidginHost\Sdk\Model\DestroyProtection(); // \PidginHost\Sdk\Model\DestroyProtection

try {
    $result = $apiInstance->cloudServersDestroyProtectionCreate($id, $destroy_protection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDestroyProtectionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **destroy_protection** | [**\PidginHost\Sdk\Model\DestroyProtection**](../Model/DestroyProtection.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\DestroyProtection**](../Model/DestroyProtection.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersDetachIpv4Create()`

```php
cloudServersDetachIpv4Create($id, $server): \PidginHost\Sdk\Model\DetachIPv4
```



Detach IPv4 from server

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server = new \PidginHost\Sdk\Model\Server(); // \PidginHost\Sdk\Model\Server

try {
    $result = $apiInstance->cloudServersDetachIpv4Create($id, $server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDetachIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server** | [**\PidginHost\Sdk\Model\Server**](../Model/Server.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\DetachIPv4**](../Model/DetachIPv4.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersDetachIpv6Create()`

```php
cloudServersDetachIpv6Create($id, $server): \PidginHost\Sdk\Model\DetachIPv6
```



Detach IPv6 from server

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server = new \PidginHost\Sdk\Model\Server(); // \PidginHost\Sdk\Model\Server

try {
    $result = $apiInstance->cloudServersDetachIpv6Create($id, $server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDetachIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server** | [**\PidginHost\Sdk\Model\Server**](../Model/Server.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\DetachIPv6**](../Model/DetachIPv6.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersList()`

```php
cloudServersList($page): \PidginHost\Sdk\Model\PaginatedServerList
```



Cloud servers

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudServersList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedServerList**](../Model/PaginatedServerList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersModifyPackageCreate()`

```php
cloudServersModifyPackageCreate($id, $server_product_upgrade): \PidginHost\Sdk\Model\ServerUpgradeResponse
```



Modify server package: downgrade available only for packages with the same disk size.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server_product_upgrade = new \PidginHost\Sdk\Model\ServerProductUpgrade(); // \PidginHost\Sdk\Model\ServerProductUpgrade

try {
    $result = $apiInstance->cloudServersModifyPackageCreate($id, $server_product_upgrade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersModifyPackageCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server_product_upgrade** | [**\PidginHost\Sdk\Model\ServerProductUpgrade**](../Model/ServerProductUpgrade.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ServerUpgradeResponse**](../Model/ServerUpgradeResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPartialUpdate()`

```php
cloudServersPartialUpdate($id, $patched_server_detail): \PidginHost\Sdk\Model\ServerDetail
```



Cloud servers

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$patched_server_detail = new \PidginHost\Sdk\Model\PatchedServerDetail(); // \PidginHost\Sdk\Model\PatchedServerDetail

try {
    $result = $apiInstance->cloudServersPartialUpdate($id, $patched_server_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **patched_server_detail** | [**\PidginHost\Sdk\Model\PatchedServerDetail**](../Model/PatchedServerDetail.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\ServerDetail**](../Model/ServerDetail.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPowerManagementCreate()`

```php
cloudServersPowerManagementCreate($id, $power_management_request): \PidginHost\Sdk\Model\PowerManagement
```



Server power management

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$power_management_request = new \PidginHost\Sdk\Model\PowerManagementRequest(); // \PidginHost\Sdk\Model\PowerManagementRequest

try {
    $result = $apiInstance->cloudServersPowerManagementCreate($id, $power_management_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPowerManagementCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **power_management_request** | [**\PidginHost\Sdk\Model\PowerManagementRequest**](../Model/PowerManagementRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\PowerManagement**](../Model/PowerManagement.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPowerManagementRetrieve()`

```php
cloudServersPowerManagementRetrieve($id): \PidginHost\Sdk\Model\PowerManagement
```



Server power management

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersPowerManagementRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPowerManagementRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\PowerManagement**](../Model/PowerManagement.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPublicInterfaceCreate()`

```php
cloudServersPublicInterfaceCreate($id, $public_interface): \PidginHost\Sdk\Model\PublicInterface
```



Public interface

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$public_interface = new \PidginHost\Sdk\Model\PublicInterface(); // \PidginHost\Sdk\Model\PublicInterface

try {
    $result = $apiInstance->cloudServersPublicInterfaceCreate($id, $public_interface);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPublicInterfaceCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **public_interface** | [**\PidginHost\Sdk\Model\PublicInterface**](../Model/PublicInterface.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PublicInterface**](../Model/PublicInterface.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPublicInterfaceDestroy()`

```php
cloudServersPublicInterfaceDestroy($id)
```



Public interface

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $apiInstance->cloudServersPublicInterfaceDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPublicInterfaceDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

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

## `cloudServersPublicInterfaceRetrieve()`

```php
cloudServersPublicInterfaceRetrieve($id): \PidginHost\Sdk\Model\PublicInterface
```



Public interface

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersPublicInterfaceRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPublicInterfaceRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\PublicInterface**](../Model/PublicInterface.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersRetrieve()`

```php
cloudServersRetrieve($id): \PidginHost\Sdk\Model\ServerDetail
```



Cloud servers

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ServerDetail**](../Model/ServerDetail.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersRetryProvisionCreate()`

```php
cloudServersRetryProvisionCreate($id, $server): \PidginHost\Sdk\Model\RetryProvision
```



Retry provision in case of a failed server

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server = new \PidginHost\Sdk\Model\Server(); // \PidginHost\Sdk\Model\Server

try {
    $result = $apiInstance->cloudServersRetryProvisionCreate($id, $server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersRetryProvisionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server** | [**\PidginHost\Sdk\Model\Server**](../Model/Server.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\RetryProvision**](../Model/RetryProvision.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsCreate()`

```php
cloudServersSnapshotsCreate($id, $snapshot_create, $page): \PidginHost\Sdk\Model\PaginatedSnapshotList
```



List snapshots for this server or queue a new snapshot.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$snapshot_create = new \PidginHost\Sdk\Model\SnapshotCreate(); // \PidginHost\Sdk\Model\SnapshotCreate
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudServersSnapshotsCreate($id, $snapshot_create, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersSnapshotsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **snapshot_create** | [**\PidginHost\Sdk\Model\SnapshotCreate**](../Model/SnapshotCreate.md)|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedSnapshotList**](../Model/PaginatedSnapshotList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsDestroy()`

```php
cloudServersSnapshotsDestroy($id, $snapshot_name): \PidginHost\Sdk\Model\SnapshotDeleteQueued
```



Delete a snapshot.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$snapshot_name = 'snapshot_name_example'; // string

try {
    $result = $apiInstance->cloudServersSnapshotsDestroy($id, $snapshot_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersSnapshotsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **snapshot_name** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\SnapshotDeleteQueued**](../Model/SnapshotDeleteQueued.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsList()`

```php
cloudServersSnapshotsList($id, $page): \PidginHost\Sdk\Model\PaginatedSnapshotList
```



List snapshots for this server or queue a new snapshot.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudServersSnapshotsList($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersSnapshotsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedSnapshotList**](../Model/PaginatedSnapshotList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsRollbackCreate()`

```php
cloudServersSnapshotsRollbackCreate($id, $snapshot_name, $server): \PidginHost\Sdk\Model\SnapshotRollbackQueued
```



Rollback the server to a specific snapshot.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$snapshot_name = 'snapshot_name_example'; // string
$server = new \PidginHost\Sdk\Model\Server(); // \PidginHost\Sdk\Model\Server

try {
    $result = $apiInstance->cloudServersSnapshotsRollbackCreate($id, $snapshot_name, $server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersSnapshotsRollbackCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **snapshot_name** | **string**|  | |
| **server** | [**\PidginHost\Sdk\Model\Server**](../Model/Server.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\SnapshotRollbackQueued**](../Model/SnapshotRollbackQueued.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersUpdate()`

```php
cloudServersUpdate($id, $server_detail): \PidginHost\Sdk\Model\ServerDetail
```



Cloud servers

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server_detail = new \PidginHost\Sdk\Model\ServerDetail(); // \PidginHost\Sdk\Model\ServerDetail

try {
    $result = $apiInstance->cloudServersUpdate($id, $server_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server_detail** | [**\PidginHost\Sdk\Model\ServerDetail**](../Model/ServerDetail.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\ServerDetail**](../Model/ServerDetail.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersUsageRetrieve()`

```php
cloudServersUsageRetrieve($id): \PidginHost\Sdk\Model\ServerUsageResponse
```



Get current resource usage for a server.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersUsageRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersUsageRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ServerUsageResponse**](../Model/ServerUsageResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesCreate()`

```php
cloudServersVolumesCreate($server_id, $volume): \PidginHost\Sdk\Model\Volume
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume = new \PidginHost\Sdk\Model\Volume(); // \PidginHost\Sdk\Model\Volume

try {
    $result = $apiInstance->cloudServersVolumesCreate($server_id, $volume);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume** | [**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesDestroy()`

```php
cloudServersVolumesDestroy($server_id, $volume_id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_id = 'volume_id_example'; // string

try {
    $apiInstance->cloudServersVolumesDestroy($server_id, $volume_id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume_id** | **string**|  | |

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

## `cloudServersVolumesList()`

```php
cloudServersVolumesList($server_id): \PidginHost\Sdk\Model\Volume[]
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string

try {
    $result = $apiInstance->cloudServersVolumesList($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume[]**](../Model/Volume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesPartialUpdate()`

```php
cloudServersVolumesPartialUpdate($server_id, $volume_id, $patched_volume): \PidginHost\Sdk\Model\Volume
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_id = 'volume_id_example'; // string
$patched_volume = new \PidginHost\Sdk\Model\PatchedVolume(); // \PidginHost\Sdk\Model\PatchedVolume

try {
    $result = $apiInstance->cloudServersVolumesPartialUpdate($server_id, $volume_id, $patched_volume);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume_id** | **string**|  | |
| **patched_volume** | [**\PidginHost\Sdk\Model\PatchedVolume**](../Model/PatchedVolume.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesRetrieve()`

```php
cloudServersVolumesRetrieve($server_id, $volume_id): \PidginHost\Sdk\Model\Volume
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_id = 'volume_id_example'; // string

try {
    $result = $apiInstance->cloudServersVolumesRetrieve($server_id, $volume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume_id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesUpdate()`

```php
cloudServersVolumesUpdate($server_id, $volume_id, $volume): \PidginHost\Sdk\Model\Volume
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_id = 'volume_id_example'; // string
$volume = new \PidginHost\Sdk\Model\Volume(); // \PidginHost\Sdk\Model\Volume

try {
    $result = $apiInstance->cloudServersVolumesUpdate($server_id, $volume_id, $volume);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume_id** | **string**|  | |
| **volume** | [**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudStorageProductsList()`

```php
cloudStorageProductsList($page): \PidginHost\Sdk\Model\PaginatedStorageProductList
```



List of available storage products

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudStorageProductsList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudStorageProductsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedStorageProductList**](../Model/PaginatedStorageProductList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudStorageProductsRetrieve()`

```php
cloudStorageProductsRetrieve($id): \PidginHost\Sdk\Model\StorageProduct
```



List of available storage products

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this metered product.

try {
    $result = $apiInstance->cloudStorageProductsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudStorageProductsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this metered product. | |

### Return type

[**\PidginHost\Sdk\Model\StorageProduct**](../Model/StorageProduct.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesAttachCreate()`

```php
cloudVolumesAttachCreate($id, $attach_volume): \PidginHost\Sdk\Model\AttachVolume
```



Attach existing volume to a server

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.
$attach_volume = new \PidginHost\Sdk\Model\AttachVolume(); // \PidginHost\Sdk\Model\AttachVolume

try {
    $result = $apiInstance->cloudVolumesAttachCreate($id, $attach_volume);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesAttachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |
| **attach_volume** | [**\PidginHost\Sdk\Model\AttachVolume**](../Model/AttachVolume.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AttachVolume**](../Model/AttachVolume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesDestroy()`

```php
cloudVolumesDestroy($id)
```



Volumes management

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.

try {
    $apiInstance->cloudVolumesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |

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

## `cloudVolumesDetachCreate()`

```php
cloudVolumesDetachCreate($id, $volume): \PidginHost\Sdk\Model\DetachVolume
```



Detach volume from server

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.
$volume = new \PidginHost\Sdk\Model\Volume(); // \PidginHost\Sdk\Model\Volume

try {
    $result = $apiInstance->cloudVolumesDetachCreate($id, $volume);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesDetachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |
| **volume** | [**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\DetachVolume**](../Model/DetachVolume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesList()`

```php
cloudVolumesList(): \PidginHost\Sdk\Model\Volume[]
```



Volumes management

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudVolumesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\Volume[]**](../Model/Volume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesPartialUpdate()`

```php
cloudVolumesPartialUpdate($id, $patched_volume): \PidginHost\Sdk\Model\Volume
```



Volumes management

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.
$patched_volume = new \PidginHost\Sdk\Model\PatchedVolume(); // \PidginHost\Sdk\Model\PatchedVolume

try {
    $result = $apiInstance->cloudVolumesPartialUpdate($id, $patched_volume);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |
| **patched_volume** | [**\PidginHost\Sdk\Model\PatchedVolume**](../Model/PatchedVolume.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesRetrieve()`

```php
cloudVolumesRetrieve($id): \PidginHost\Sdk\Model\Volume
```



Volumes management

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.

try {
    $result = $apiInstance->cloudVolumesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesUpdate()`

```php
cloudVolumesUpdate($id, $volume): \PidginHost\Sdk\Model\Volume
```



Volumes management

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.
$volume = new \PidginHost\Sdk\Model\Volume(); // \PidginHost\Sdk\Model\Volume

try {
    $result = $apiInstance->cloudVolumesUpdate($id, $volume);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |
| **volume** | [**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
