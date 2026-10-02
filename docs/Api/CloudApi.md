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
| [**cloudFloatingIpv4RdnsCreate()**](CloudApi.md#cloudFloatingIpv4RdnsCreate) | **POST** /api/cloud/floating-ipv4/{id}/rdns/ |  |
| [**cloudFloatingIpv4RdnsRetrieve()**](CloudApi.md#cloudFloatingIpv4RdnsRetrieve) | **GET** /api/cloud/floating-ipv4/{id}/rdns/ |  |
| [**cloudFloatingIpv4Retrieve()**](CloudApi.md#cloudFloatingIpv4Retrieve) | **GET** /api/cloud/floating-ipv4/{id}/ |  |
| [**cloudFloatingIpv4UnauthorizeCreate()**](CloudApi.md#cloudFloatingIpv4UnauthorizeCreate) | **POST** /api/cloud/floating-ipv4/{id}/unauthorize/ |  |
| [**cloudFloatingIpv6AuthorizationsList()**](CloudApi.md#cloudFloatingIpv6AuthorizationsList) | **GET** /api/cloud/floating-ipv6/{id}/authorizations/ |  |
| [**cloudFloatingIpv6AuthorizeCreate()**](CloudApi.md#cloudFloatingIpv6AuthorizeCreate) | **POST** /api/cloud/floating-ipv6/{id}/authorize/ |  |
| [**cloudFloatingIpv6Create()**](CloudApi.md#cloudFloatingIpv6Create) | **POST** /api/cloud/floating-ipv6/ |  |
| [**cloudFloatingIpv6Destroy()**](CloudApi.md#cloudFloatingIpv6Destroy) | **DELETE** /api/cloud/floating-ipv6/{id}/ |  |
| [**cloudFloatingIpv6List()**](CloudApi.md#cloudFloatingIpv6List) | **GET** /api/cloud/floating-ipv6/ |  |
| [**cloudFloatingIpv6RdnsCreate()**](CloudApi.md#cloudFloatingIpv6RdnsCreate) | **POST** /api/cloud/floating-ipv6/{id}/rdns/ |  |
| [**cloudFloatingIpv6RdnsRetrieve()**](CloudApi.md#cloudFloatingIpv6RdnsRetrieve) | **GET** /api/cloud/floating-ipv6/{id}/rdns/ |  |
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
| [**cloudServersBootIsosList()**](CloudApi.md#cloudServersBootIsosList) | **GET** /api/cloud/servers/{id}/boot-isos/ |  |
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
| [**cloudServersRescueEnterCreate()**](CloudApi.md#cloudServersRescueEnterCreate) | **POST** /api/cloud/servers/{id}/rescue/enter/ |  |
| [**cloudServersRescueExitCreate()**](CloudApi.md#cloudServersRescueExitCreate) | **POST** /api/cloud/servers/{id}/rescue/exit/ |  |
| [**cloudServersRetrieve()**](CloudApi.md#cloudServersRetrieve) | **GET** /api/cloud/servers/{id}/ |  |
| [**cloudServersRetryProvisionCreate()**](CloudApi.md#cloudServersRetryProvisionCreate) | **POST** /api/cloud/servers/{id}/retry-provision/ |  |
| [**cloudServersSnapshotsCreate()**](CloudApi.md#cloudServersSnapshotsCreate) | **POST** /api/cloud/servers/{id}/snapshots/ |  |
| [**cloudServersSnapshotsDestroy()**](CloudApi.md#cloudServersSnapshotsDestroy) | **DELETE** /api/cloud/servers/{id}/snapshots/{snapshot_name}/ |  |
| [**cloudServersSnapshotsList()**](CloudApi.md#cloudServersSnapshotsList) | **GET** /api/cloud/servers/{id}/snapshots/ |  |
| [**cloudServersSnapshotsRollbackCreate()**](CloudApi.md#cloudServersSnapshotsRollbackCreate) | **POST** /api/cloud/servers/{id}/snapshots/{snapshot_name}/rollback/ |  |
| [**cloudServersTrafficRetrieve()**](CloudApi.md#cloudServersTrafficRetrieve) | **GET** /api/cloud/servers/{id}/traffic/ |  |
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
cloudBucketsCreate($bucket_create_request): \PidginHost\Sdk\Model\Bucket
```



Create a bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_create_request = new \PidginHost\Sdk\Model\BucketCreateRequest(); // \PidginHost\Sdk\Model\BucketCreateRequest

try {
    $result = $apiInstance->cloudBucketsCreate($bucket_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket_create_request** | [**\PidginHost\Sdk\Model\BucketCreateRequest**](../Model/BucketCreateRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsCredentialsRevealCreate()`

```php
cloudBucketsCredentialsRevealCreate($id): \PidginHost\Sdk\Model\BucketCredentials
```



Reveal bucket credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.

try {
    $result = $apiInstance->cloudBucketsCredentialsRevealCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsCredentialsRevealCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |

### Return type

[**\PidginHost\Sdk\Model\BucketCredentials**](../Model/BucketCredentials.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsCredentialsRotateCreate()`

```php
cloudBucketsCredentialsRotateCreate($id): \PidginHost\Sdk\Model\BucketCredentials
```



Rotate bucket credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.

try {
    $result = $apiInstance->cloudBucketsCredentialsRotateCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsCredentialsRotateCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |

### Return type

[**\PidginHost\Sdk\Model\BucketCredentials**](../Model/BucketCredentials.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsDestroy()`

```php
cloudBucketsDestroy($id): \PidginHost\Sdk\Model\BucketCancelResponse
```



Cancel a bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.

try {
    $result = $apiInstance->cloudBucketsDestroy($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |

### Return type

[**\PidginHost\Sdk\Model\BucketCancelResponse**](../Model/BucketCancelResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsList()`

```php
cloudBucketsList(): \PidginHost\Sdk\Model\Bucket[]
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsResizeCreate()`

```php
cloudBucketsResizeCreate($id, $bucket_resize_request): \PidginHost\Sdk\Model\Bucket
```



Resize a bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.
$bucket_resize_request = new \PidginHost\Sdk\Model\BucketResizeRequest(); // \PidginHost\Sdk\Model\BucketResizeRequest

try {
    $result = $apiInstance->cloudBucketsResizeCreate($id, $bucket_resize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsResizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |
| **bucket_resize_request** | [**\PidginHost\Sdk\Model\BucketResizeRequest**](../Model/BucketResizeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsVisibilityCreate()`

```php
cloudBucketsVisibilityCreate($id, $bucket_visibility_request): \PidginHost\Sdk\Model\Bucket
```



Set bucket visibility

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.
$bucket_visibility_request = new \PidginHost\Sdk\Model\BucketVisibilityRequest(); // \PidginHost\Sdk\Model\BucketVisibilityRequest

try {
    $result = $apiInstance->cloudBucketsVisibilityCreate($id, $bucket_visibility_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsVisibilityCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |
| **bucket_visibility_request** | [**\PidginHost\Sdk\Model\BucketVisibilityRequest**](../Model/BucketVisibilityRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetCreate()`

```php
cloudFirewallRulesSetCreate($firewall_rules_set_request): \PidginHost\Sdk\Model\FirewallRulesSet
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_rules_set_request = new \PidginHost\Sdk\Model\FirewallRulesSetRequest(); // \PidginHost\Sdk\Model\FirewallRulesSetRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetCreate($firewall_rules_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_rules_set_request** | [**\PidginHost\Sdk\Model\FirewallRulesSetRequest**](../Model/FirewallRulesSetRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetPartialUpdate()`

```php
cloudFirewallRulesSetPartialUpdate($id, $patched_firewall_rules_set_request): \PidginHost\Sdk\Model\FirewallRulesSet
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this firewall rules set.
$patched_firewall_rules_set_request = new \PidginHost\Sdk\Model\PatchedFirewallRulesSetRequest(); // \PidginHost\Sdk\Model\PatchedFirewallRulesSetRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetPartialUpdate($id, $patched_firewall_rules_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this firewall rules set. | |
| **patched_firewall_rules_set_request** | [**\PidginHost\Sdk\Model\PatchedFirewallRulesSetRequest**](../Model/PatchedFirewallRulesSetRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesCreate()`

```php
cloudFirewallRulesSetRulesCreate($rules_set_id, $firewall_rule_request): \PidginHost\Sdk\Model\FirewallRule
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rules_set_id = 'rules_set_id_example'; // string
$firewall_rule_request = new \PidginHost\Sdk\Model\FirewallRuleRequest(); // \PidginHost\Sdk\Model\FirewallRuleRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesCreate($rules_set_id, $firewall_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rules_set_id** | **string**|  | |
| **firewall_rule_request** | [**\PidginHost\Sdk\Model\FirewallRuleRequest**](../Model/FirewallRuleRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesPartialUpdate()`

```php
cloudFirewallRulesSetRulesPartialUpdate($rule_id, $rules_set_id, $patched_firewall_rule_request): \PidginHost\Sdk\Model\FirewallRule
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$rules_set_id = 'rules_set_id_example'; // string
$patched_firewall_rule_request = new \PidginHost\Sdk\Model\PatchedFirewallRuleRequest(); // \PidginHost\Sdk\Model\PatchedFirewallRuleRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesPartialUpdate($rule_id, $rules_set_id, $patched_firewall_rule_request);
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
| **patched_firewall_rule_request** | [**\PidginHost\Sdk\Model\PatchedFirewallRuleRequest**](../Model/PatchedFirewallRuleRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesUpdate()`

```php
cloudFirewallRulesSetRulesUpdate($rule_id, $rules_set_id, $firewall_rule_request): \PidginHost\Sdk\Model\FirewallRule
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$rules_set_id = 'rules_set_id_example'; // string
$firewall_rule_request = new \PidginHost\Sdk\Model\FirewallRuleRequest(); // \PidginHost\Sdk\Model\FirewallRuleRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesUpdate($rule_id, $rules_set_id, $firewall_rule_request);
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
| **firewall_rule_request** | [**\PidginHost\Sdk\Model\FirewallRuleRequest**](../Model/FirewallRuleRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetUpdate()`

```php
cloudFirewallRulesSetUpdate($id, $firewall_rules_set_request): \PidginHost\Sdk\Model\FirewallRulesSet
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this firewall rules set.
$firewall_rules_set_request = new \PidginHost\Sdk\Model\FirewallRulesSetRequest(); // \PidginHost\Sdk\Model\FirewallRulesSetRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetUpdate($id, $firewall_rules_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this firewall rules set. | |
| **firewall_rules_set_request** | [**\PidginHost\Sdk\Model\FirewallRulesSetRequest**](../Model/FirewallRulesSetRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4Create()`

```php
cloudFloatingIpv4Create($floating_ipv4_create_request): \PidginHost\Sdk\Model\FloatingIPv4
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$floating_ipv4_create_request = new \PidginHost\Sdk\Model\FloatingIPv4CreateRequest(); // \PidginHost\Sdk\Model\FloatingIPv4CreateRequest

try {
    $result = $apiInstance->cloudFloatingIpv4Create($floating_ipv4_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **floating_ipv4_create_request** | [**\PidginHost\Sdk\Model\FloatingIPv4CreateRequest**](../Model/FloatingIPv4CreateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv4**](../Model/FloatingIPv4.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4RdnsCreate()`

```php
cloudFloatingIpv4RdnsCreate($id, $reverse_dns_request): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for the IPv4 address wrapped by this floating IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.
$reverse_dns_request = new \PidginHost\Sdk\Model\ReverseDNSRequest(); // \PidginHost\Sdk\Model\ReverseDNSRequest

try {
    $result = $apiInstance->cloudFloatingIpv4RdnsCreate($id, $reverse_dns_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4RdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |
| **reverse_dns_request** | [**\PidginHost\Sdk\Model\ReverseDNSRequest**](../Model/ReverseDNSRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4RdnsRetrieve()`

```php
cloudFloatingIpv4RdnsRetrieve($id): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for the IPv4 address wrapped by this floating IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.

try {
    $result = $apiInstance->cloudFloatingIpv4RdnsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4RdnsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6Create()`

```php
cloudFloatingIpv6Create($floating_ipv6_create_request): \PidginHost\Sdk\Model\FloatingIPv6
```



Manage floating IPv6 addresses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$floating_ipv6_create_request = new \PidginHost\Sdk\Model\FloatingIPv6CreateRequest(); // \PidginHost\Sdk\Model\FloatingIPv6CreateRequest

try {
    $result = $apiInstance->cloudFloatingIpv6Create($floating_ipv6_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **floating_ipv6_create_request** | [**\PidginHost\Sdk\Model\FloatingIPv6CreateRequest**](../Model/FloatingIPv6CreateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv6**](../Model/FloatingIPv6.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6RdnsCreate()`

```php
cloudFloatingIpv6RdnsCreate($id, $reverse_dns_request): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for the IPv6 address wrapped by this floating IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.
$reverse_dns_request = new \PidginHost\Sdk\Model\ReverseDNSRequest(); // \PidginHost\Sdk\Model\ReverseDNSRequest

try {
    $result = $apiInstance->cloudFloatingIpv6RdnsCreate($id, $reverse_dns_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6RdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |
| **reverse_dns_request** | [**\PidginHost\Sdk\Model\ReverseDNSRequest**](../Model/ReverseDNSRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6RdnsRetrieve()`

```php
cloudFloatingIpv6RdnsRetrieve($id): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for the IPv6 address wrapped by this floating IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.

try {
    $result = $apiInstance->cloudFloatingIpv6RdnsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6RdnsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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

Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4Create()`

```php
cloudIpv4Create(): \PidginHost\Sdk\Model\PublicIPv4
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudIpv4Create();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\PublicIPv4**](../Model/PublicIPv4.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4Destroy()`

```php
cloudIpv4Destroy($id)
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4DetachCreate()`

```php
cloudIpv4DetachCreate($id): \PidginHost\Sdk\Model\DetachIPv4Response
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.

try {
    $result = $apiInstance->cloudIpv4DetachCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4DetachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |

### Return type

[**\PidginHost\Sdk\Model\DetachIPv4Response**](../Model/DetachIPv4Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4List()`

```php
cloudIpv4List($page): \PidginHost\Sdk\Model\PaginatedPublicIPv4List
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4RdnsCreate()`

```php
cloudIpv4RdnsCreate($id, $reverse_dns_request): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for this IPv4 address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.
$reverse_dns_request = new \PidginHost\Sdk\Model\ReverseDNSRequest(); // \PidginHost\Sdk\Model\ReverseDNSRequest

try {
    $result = $apiInstance->cloudIpv4RdnsCreate($id, $reverse_dns_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4RdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |
| **reverse_dns_request** | [**\PidginHost\Sdk\Model\ReverseDNSRequest**](../Model/ReverseDNSRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6Create()`

```php
cloudIpv6Create(): \PidginHost\Sdk\Model\PublicIPv6
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudIpv6Create();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\PublicIPv6**](../Model/PublicIPv6.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6Destroy()`

```php
cloudIpv6Destroy($id)
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6DetachCreate()`

```php
cloudIpv6DetachCreate($id): \PidginHost\Sdk\Model\DetachIPv6Response
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.

try {
    $result = $apiInstance->cloudIpv6DetachCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6DetachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |

### Return type

[**\PidginHost\Sdk\Model\DetachIPv6Response**](../Model/DetachIPv6Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6List()`

```php
cloudIpv6List($page): \PidginHost\Sdk\Model\PaginatedPublicIPv6List
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6RdnsCreate()`

```php
cloudIpv6RdnsCreate($id, $reverse_dns_request): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for this IPv6 address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.
$reverse_dns_request = new \PidginHost\Sdk\Model\ReverseDNSRequest(); // \PidginHost\Sdk\Model\ReverseDNSRequest

try {
    $result = $apiInstance->cloudIpv6RdnsCreate($id, $reverse_dns_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6RdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |
| **reverse_dns_request** | [**\PidginHost\Sdk\Model\ReverseDNSRequest**](../Model/ReverseDNSRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksAddServerCreate()`

```php
cloudPrivateNetworksAddServerCreate($id, $private_network_add_host_request): \PidginHost\Sdk\Model\AddServerResponse
```



Manage private networks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$private_network_add_host_request = new \PidginHost\Sdk\Model\PrivateNetworkAddHostRequest(); // \PidginHost\Sdk\Model\PrivateNetworkAddHostRequest

try {
    $result = $apiInstance->cloudPrivateNetworksAddServerCreate($id, $private_network_add_host_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksAddServerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **private_network_add_host_request** | [**\PidginHost\Sdk\Model\PrivateNetworkAddHostRequest**](../Model/PrivateNetworkAddHostRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AddServerResponse**](../Model/AddServerResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksCreate()`

```php
cloudPrivateNetworksCreate($private_network_request): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$private_network_request = new \PidginHost\Sdk\Model\PrivateNetworkRequest(); // \PidginHost\Sdk\Model\PrivateNetworkRequest

try {
    $result = $apiInstance->cloudPrivateNetworksCreate($private_network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **private_network_request** | [**\PidginHost\Sdk\Model\PrivateNetworkRequest**](../Model/PrivateNetworkRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksPartialUpdate()`

```php
cloudPrivateNetworksPartialUpdate($id, $patched_private_network_update_request): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$patched_private_network_update_request = new \PidginHost\Sdk\Model\PatchedPrivateNetworkUpdateRequest(); // \PidginHost\Sdk\Model\PatchedPrivateNetworkUpdateRequest

try {
    $result = $apiInstance->cloudPrivateNetworksPartialUpdate($id, $patched_private_network_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **patched_private_network_update_request** | [**\PidginHost\Sdk\Model\PatchedPrivateNetworkUpdateRequest**](../Model/PatchedPrivateNetworkUpdateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksRemoveServerCreate()`

```php
cloudPrivateNetworksRemoveServerCreate($id, $private_network_remove_host_request): \PidginHost\Sdk\Model\RemoveServerResponse
```



Manage private networks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$private_network_remove_host_request = new \PidginHost\Sdk\Model\PrivateNetworkRemoveHostRequest(); // \PidginHost\Sdk\Model\PrivateNetworkRemoveHostRequest

try {
    $result = $apiInstance->cloudPrivateNetworksRemoveServerCreate($id, $private_network_remove_host_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksRemoveServerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **private_network_remove_host_request** | [**\PidginHost\Sdk\Model\PrivateNetworkRemoveHostRequest**](../Model/PrivateNetworkRemoveHostRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\RemoveServerResponse**](../Model/RemoveServerResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksUpdate()`

```php
cloudPrivateNetworksUpdate($id, $private_network_update_request): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$private_network_update_request = new \PidginHost\Sdk\Model\PrivateNetworkUpdateRequest(); // \PidginHost\Sdk\Model\PrivateNetworkUpdateRequest

try {
    $result = $apiInstance->cloudPrivateNetworksUpdate($id, $private_network_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **private_network_update_request** | [**\PidginHost\Sdk\Model\PrivateNetworkUpdateRequest**](../Model/PrivateNetworkUpdateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServerPackagesList()`

```php
cloudServerPackagesList($generation, $page): \PidginHost\Sdk\Model\PaginatedServerProductList
```



List of available server products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generation = 'generation_example'; // string | Filter packages available on the given hardware generation (slug). Excludes free-tier-only packages when the generation is not free-tier eligible.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudServerPackagesList($generation, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServerPackagesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generation** | **string**| Filter packages available on the given hardware generation (slug). Excludes free-tier-only packages when the generation is not free-tier eligible. | [optional] |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedServerProductList**](../Model/PaginatedServerProductList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersAttachIpv4Create()`

```php
cloudServersAttachIpv4Create($id, $attach_ipv4_request): \PidginHost\Sdk\Model\AttachIPv4Response
```



Attach IPv4 address to server. The first attach lands on the primary NIC; subsequent attaches add a new secondary NIC carrying just that IPv4. The address is written to the machine's network configuration, which the guest OS only reads while booting: a running server answers `reboot_required: true` and stays unreachable on that address until it is restarted. Send `reboot: true` to have the restart issued here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$attach_ipv4_request = new \PidginHost\Sdk\Model\AttachIPv4Request(); // \PidginHost\Sdk\Model\AttachIPv4Request

try {
    $result = $apiInstance->cloudServersAttachIpv4Create($id, $attach_ipv4_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersAttachIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **attach_ipv4_request** | [**\PidginHost\Sdk\Model\AttachIPv4Request**](../Model/AttachIPv4Request.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AttachIPv4Response**](../Model/AttachIPv4Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersAttachIpv6Create()`

```php
cloudServersAttachIpv6Create($id, $attach_ipv6_request): \PidginHost\Sdk\Model\AttachIPv6Response
```



Attach IPv6 address to server. Like IPv4, the address is written to the machine's network configuration and the guest OS reads it while booting: a running server answers `reboot_required: true` until it is restarted. Send `reboot: true` to have the restart issued here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$attach_ipv6_request = new \PidginHost\Sdk\Model\AttachIPv6Request(); // \PidginHost\Sdk\Model\AttachIPv6Request

try {
    $result = $apiInstance->cloudServersAttachIpv6Create($id, $attach_ipv6_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersAttachIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **attach_ipv6_request** | [**\PidginHost\Sdk\Model\AttachIPv6Request**](../Model/AttachIPv6Request.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AttachIPv6Response**](../Model/AttachIPv6Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersBootIsosList()`

```php
cloudServersBootIsosList($id): \PidginHost\Sdk\Model\BootISO[]
```



List the ISO catalog entries visible to this user and their package compatibility.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersBootIsosList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersBootIsosList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\BootISO[]**](../Model/BootISO.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersConsoleCreate()`

```php
cloudServersConsoleCreate($id): \PidginHost\Sdk\Model\ConsoleToken
```



Get a VNC console token for browser-based access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersConsoleCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersConsoleCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ConsoleToken**](../Model/ConsoleToken.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersCreate()`

```php
cloudServersCreate($server_add_request): \PidginHost\Sdk\Model\ServerAddResponse
```



Create new server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_add_request = new \PidginHost\Sdk\Model\ServerAddRequest(); // \PidginHost\Sdk\Model\ServerAddRequest

try {
    $result = $apiInstance->cloudServersCreate($server_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_add_request** | [**\PidginHost\Sdk\Model\ServerAddRequest**](../Model/ServerAddRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ServerAddResponse**](../Model/ServerAddResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersDestroyProtectionCreate()`

```php
cloudServersDestroyProtectionCreate($id, $destroy_protection_request): \PidginHost\Sdk\Model\DestroyProtectionResponse
```



Enable or disable destroy protection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$destroy_protection_request = new \PidginHost\Sdk\Model\DestroyProtectionRequest(); // \PidginHost\Sdk\Model\DestroyProtectionRequest

try {
    $result = $apiInstance->cloudServersDestroyProtectionCreate($id, $destroy_protection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDestroyProtectionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **destroy_protection_request** | [**\PidginHost\Sdk\Model\DestroyProtectionRequest**](../Model/DestroyProtectionRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\DestroyProtectionResponse**](../Model/DestroyProtectionResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersDetachIpv4Create()`

```php
cloudServersDetachIpv4Create($id, $ipv4): \PidginHost\Sdk\Model\ServerDetachIPv4Response
```



Detach IPv4 from server. Without `ipv4`, the primary NIC's IPv4 is detached. Pass `ipv4=<id|slug>` to target a specific attached address (required when the server has more than one IPv4).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$ipv4 = 'ipv4_example'; // string | ID or slug of the IPv4 address to detach.

try {
    $result = $apiInstance->cloudServersDetachIpv4Create($id, $ipv4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDetachIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **ipv4** | **string**| ID or slug of the IPv4 address to detach. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\ServerDetachIPv4Response**](../Model/ServerDetachIPv4Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersDetachIpv6Create()`

```php
cloudServersDetachIpv6Create($id): \PidginHost\Sdk\Model\DetachIPv6
```



Detach IPv6 from server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersDetachIpv6Create($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDetachIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\DetachIPv6**](../Model/DetachIPv6.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersModifyPackageCreate()`

```php
cloudServersModifyPackageCreate($id, $server_product_upgrade_request): \PidginHost\Sdk\Model\ServerUpgradeResponse
```



Modify server package: downgrade available only for packages with the same disk size.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server_product_upgrade_request = new \PidginHost\Sdk\Model\ServerProductUpgradeRequest(); // \PidginHost\Sdk\Model\ServerProductUpgradeRequest

try {
    $result = $apiInstance->cloudServersModifyPackageCreate($id, $server_product_upgrade_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersModifyPackageCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server_product_upgrade_request** | [**\PidginHost\Sdk\Model\ServerProductUpgradeRequest**](../Model/ServerProductUpgradeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ServerUpgradeResponse**](../Model/ServerUpgradeResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPartialUpdate()`

```php
cloudServersPartialUpdate($id, $patched_server_detail_request): \PidginHost\Sdk\Model\ServerDetail
```



Cloud servers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$patched_server_detail_request = new \PidginHost\Sdk\Model\PatchedServerDetailRequest(); // \PidginHost\Sdk\Model\PatchedServerDetailRequest

try {
    $result = $apiInstance->cloudServersPartialUpdate($id, $patched_server_detail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **patched_server_detail_request** | [**\PidginHost\Sdk\Model\PatchedServerDetailRequest**](../Model/PatchedServerDetailRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\ServerDetail**](../Model/ServerDetail.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPublicInterfaceCreate()`

```php
cloudServersPublicInterfaceCreate($id, $public_interface_request): \PidginHost\Sdk\Model\PublicInterface
```



Public interface

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$public_interface_request = new \PidginHost\Sdk\Model\PublicInterfaceRequest(); // \PidginHost\Sdk\Model\PublicInterfaceRequest

try {
    $result = $apiInstance->cloudServersPublicInterfaceCreate($id, $public_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPublicInterfaceCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **public_interface_request** | [**\PidginHost\Sdk\Model\PublicInterfaceRequest**](../Model/PublicInterfaceRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PublicInterface**](../Model/PublicInterface.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersRescueEnterCreate()`

```php
cloudServersRescueEnterCreate($id, $iso_boot_request): \PidginHost\Sdk\Model\RescueEnterQueued
```



Boot the server from the default rescue image or a catalog ISO. The server is powered off first; use the console to complete the repair or installation. Not available for HA servers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$iso_boot_request = new \PidginHost\Sdk\Model\IsoBootRequest(); // \PidginHost\Sdk\Model\IsoBootRequest

try {
    $result = $apiInstance->cloudServersRescueEnterCreate($id, $iso_boot_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersRescueEnterCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **iso_boot_request** | [**\PidginHost\Sdk\Model\IsoBootRequest**](../Model/IsoBootRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\RescueEnterQueued**](../Model/RescueEnterQueued.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersRescueExitCreate()`

```php
cloudServersRescueExitCreate($id): \PidginHost\Sdk\Model\RescueExitQueued
```



Exit rescue mode: detach the rescue ISO, restore the original boot order, and boot normally.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersRescueExitCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersRescueExitCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\RescueExitQueued**](../Model/RescueExitQueued.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersRetryProvisionCreate()`

```php
cloudServersRetryProvisionCreate($id): \PidginHost\Sdk\Model\RetryProvision
```



Retry provision in case of a failed server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersRetryProvisionCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersRetryProvisionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\RetryProvision**](../Model/RetryProvision.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsCreate()`

```php
cloudServersSnapshotsCreate($id, $snapshot_create_request): \PidginHost\Sdk\Model\SnapshotCreateQueued
```



Cloud servers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$snapshot_create_request = new \PidginHost\Sdk\Model\SnapshotCreateRequest(); // \PidginHost\Sdk\Model\SnapshotCreateRequest

try {
    $result = $apiInstance->cloudServersSnapshotsCreate($id, $snapshot_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersSnapshotsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **snapshot_create_request** | [**\PidginHost\Sdk\Model\SnapshotCreateRequest**](../Model/SnapshotCreateRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\SnapshotCreateQueued**](../Model/SnapshotCreateQueued.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsList()`

```php
cloudServersSnapshotsList($id): \PidginHost\Sdk\Model\Snapshot[]
```



List snapshots for this server or queue a new snapshot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersSnapshotsList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersSnapshotsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\Snapshot[]**](../Model/Snapshot.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsRollbackCreate()`

```php
cloudServersSnapshotsRollbackCreate($id, $snapshot_name): \PidginHost\Sdk\Model\SnapshotRollbackQueued
```



Rollback the server to a specific snapshot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$snapshot_name = 'snapshot_name_example'; // string

try {
    $result = $apiInstance->cloudServersSnapshotsRollbackCreate($id, $snapshot_name);
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

### Return type

[**\PidginHost\Sdk\Model\SnapshotRollbackQueued**](../Model/SnapshotRollbackQueued.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersTrafficRetrieve()`

```php
cloudServersTrafficRetrieve($id): \PidginHost\Sdk\Model\ServerTrafficResponse
```



Get this month's traffic usage for a server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersTrafficRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersTrafficRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ServerTrafficResponse**](../Model/ServerTrafficResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersUpdate()`

```php
cloudServersUpdate($id, $server_detail_request): \PidginHost\Sdk\Model\ServerDetail
```



Cloud servers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server_detail_request = new \PidginHost\Sdk\Model\ServerDetailRequest(); // \PidginHost\Sdk\Model\ServerDetailRequest

try {
    $result = $apiInstance->cloudServersUpdate($id, $server_detail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server_detail_request** | [**\PidginHost\Sdk\Model\ServerDetailRequest**](../Model/ServerDetailRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\ServerDetail**](../Model/ServerDetail.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesCreate()`

```php
cloudServersVolumesCreate($server_id, $volume_request): \PidginHost\Sdk\Model\Volume
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_request = new \PidginHost\Sdk\Model\VolumeRequest(); // \PidginHost\Sdk\Model\VolumeRequest

try {
    $result = $apiInstance->cloudServersVolumesCreate($server_id, $volume_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume_request** | [**\PidginHost\Sdk\Model\VolumeRequest**](../Model/VolumeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesPartialUpdate()`

```php
cloudServersVolumesPartialUpdate($server_id, $volume_id, $patched_volume_update_request): \PidginHost\Sdk\Model\Volume
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_id = 'volume_id_example'; // string
$patched_volume_update_request = new \PidginHost\Sdk\Model\PatchedVolumeUpdateRequest(); // \PidginHost\Sdk\Model\PatchedVolumeUpdateRequest

try {
    $result = $apiInstance->cloudServersVolumesPartialUpdate($server_id, $volume_id, $patched_volume_update_request);
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
| **patched_volume_update_request** | [**\PidginHost\Sdk\Model\PatchedVolumeUpdateRequest**](../Model/PatchedVolumeUpdateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesUpdate()`

```php
cloudServersVolumesUpdate($server_id, $volume_id, $volume_update_request): \PidginHost\Sdk\Model\Volume
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_id = 'volume_id_example'; // string
$volume_update_request = new \PidginHost\Sdk\Model\VolumeUpdateRequest(); // \PidginHost\Sdk\Model\VolumeUpdateRequest

try {
    $result = $apiInstance->cloudServersVolumesUpdate($server_id, $volume_id, $volume_update_request);
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
| **volume_update_request** | [**\PidginHost\Sdk\Model\VolumeUpdateRequest**](../Model/VolumeUpdateRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesAttachCreate()`

```php
cloudVolumesAttachCreate($id, $attach_volume_request): \PidginHost\Sdk\Model\AttachVolume
```



Attach existing volume to a server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.
$attach_volume_request = new \PidginHost\Sdk\Model\AttachVolumeRequest(); // \PidginHost\Sdk\Model\AttachVolumeRequest

try {
    $result = $apiInstance->cloudVolumesAttachCreate($id, $attach_volume_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesAttachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |
| **attach_volume_request** | [**\PidginHost\Sdk\Model\AttachVolumeRequest**](../Model/AttachVolumeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AttachVolume**](../Model/AttachVolume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesDetachCreate()`

```php
cloudVolumesDetachCreate($id): \PidginHost\Sdk\Model\DetachVolume
```



Detach volume from server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.

try {
    $result = $apiInstance->cloudVolumesDetachCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesDetachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |

### Return type

[**\PidginHost\Sdk\Model\DetachVolume**](../Model/DetachVolume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesPartialUpdate()`

```php
cloudVolumesPartialUpdate($id, $patched_volume_update_request): \PidginHost\Sdk\Model\Volume
```



Volumes management

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.
$patched_volume_update_request = new \PidginHost\Sdk\Model\PatchedVolumeUpdateRequest(); // \PidginHost\Sdk\Model\PatchedVolumeUpdateRequest

try {
    $result = $apiInstance->cloudVolumesPartialUpdate($id, $patched_volume_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |
| **patched_volume_update_request** | [**\PidginHost\Sdk\Model\PatchedVolumeUpdateRequest**](../Model/PatchedVolumeUpdateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

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


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


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

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesUpdate()`

```php
cloudVolumesUpdate($id, $volume_update_request): \PidginHost\Sdk\Model\Volume
```



Volumes management

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.
$volume_update_request = new \PidginHost\Sdk\Model\VolumeUpdateRequest(); // \PidginHost\Sdk\Model\VolumeUpdateRequest

try {
    $result = $apiInstance->cloudVolumesUpdate($id, $volume_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |
| **volume_update_request** | [**\PidginHost\Sdk\Model\VolumeUpdateRequest**](../Model/VolumeUpdateRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
