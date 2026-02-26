# PidginHost\\Sdk\KubernetesApi

All URIs are relative to https://www.pidginhost.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**kubernetesClusterTypesList()**](KubernetesApi.md#kubernetesClusterTypesList) | **GET** /api/kubernetes/cluster-types/ |  |
| [**kubernetesClusterTypesList2()**](KubernetesApi.md#kubernetesClusterTypesList2) | **GET** /api/v1/kubernetes/cluster-types/ |  |
| [**kubernetesClustersConnectVmCreate()**](KubernetesApi.md#kubernetesClustersConnectVmCreate) | **POST** /api/kubernetes/clusters/{id}/connect-vm/ |  |
| [**kubernetesClustersConnectVmCreate2()**](KubernetesApi.md#kubernetesClustersConnectVmCreate2) | **POST** /api/v1/kubernetes/clusters/{id}/connect-vm/ |  |
| [**kubernetesClustersConnectedVmsRetrieve()**](KubernetesApi.md#kubernetesClustersConnectedVmsRetrieve) | **GET** /api/kubernetes/clusters/{id}/connected-vms/ |  |
| [**kubernetesClustersConnectedVmsRetrieve2()**](KubernetesApi.md#kubernetesClustersConnectedVmsRetrieve2) | **GET** /api/v1/kubernetes/clusters/{id}/connected-vms/ |  |
| [**kubernetesClustersCreate()**](KubernetesApi.md#kubernetesClustersCreate) | **POST** /api/kubernetes/clusters/ |  |
| [**kubernetesClustersCreate2()**](KubernetesApi.md#kubernetesClustersCreate2) | **POST** /api/v1/kubernetes/clusters/ |  |
| [**kubernetesClustersDestroy()**](KubernetesApi.md#kubernetesClustersDestroy) | **DELETE** /api/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersDestroy2()**](KubernetesApi.md#kubernetesClustersDestroy2) | **DELETE** /api/v1/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersDisconnectVmCreate()**](KubernetesApi.md#kubernetesClustersDisconnectVmCreate) | **POST** /api/kubernetes/clusters/{id}/disconnect-vm/ |  |
| [**kubernetesClustersDisconnectVmCreate2()**](KubernetesApi.md#kubernetesClustersDisconnectVmCreate2) | **POST** /api/v1/kubernetes/clusters/{id}/disconnect-vm/ |  |
| [**kubernetesClustersHttproutesCreate()**](KubernetesApi.md#kubernetesClustersHttproutesCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/httproutes/ |  |
| [**kubernetesClustersHttproutesCreate2()**](KubernetesApi.md#kubernetesClustersHttproutesCreate2) | **POST** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/ |  |
| [**kubernetesClustersHttproutesDestroy()**](KubernetesApi.md#kubernetesClustersHttproutesDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersHttproutesDestroy2()**](KubernetesApi.md#kubernetesClustersHttproutesDestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersHttproutesPartialUpdate()**](KubernetesApi.md#kubernetesClustersHttproutesPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersHttproutesPartialUpdate2()**](KubernetesApi.md#kubernetesClustersHttproutesPartialUpdate2) | **PATCH** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersHttproutesRetrieve()**](KubernetesApi.md#kubernetesClustersHttproutesRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/httproutes/ |  |
| [**kubernetesClustersHttproutesRetrieve2()**](KubernetesApi.md#kubernetesClustersHttproutesRetrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersHttproutesRetrieve3()**](KubernetesApi.md#kubernetesClustersHttproutesRetrieve3) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/ |  |
| [**kubernetesClustersHttproutesRetrieve4()**](KubernetesApi.md#kubernetesClustersHttproutesRetrieve4) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersHttproutesUpdate()**](KubernetesApi.md#kubernetesClustersHttproutesUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersHttproutesUpdate2()**](KubernetesApi.md#kubernetesClustersHttproutesUpdate2) | **PUT** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersKubeVersionUpgradeCreate()**](KubernetesApi.md#kubernetesClustersKubeVersionUpgradeCreate) | **POST** /api/kubernetes/clusters/{id}/kube-version-upgrade/ |  |
| [**kubernetesClustersKubeVersionUpgradeCreate2()**](KubernetesApi.md#kubernetesClustersKubeVersionUpgradeCreate2) | **POST** /api/v1/kubernetes/clusters/{id}/kube-version-upgrade/ |  |
| [**kubernetesClustersKubeconfigCreate()**](KubernetesApi.md#kubernetesClustersKubeconfigCreate) | **POST** /api/kubernetes/clusters/{id}/kubeconfig/ |  |
| [**kubernetesClustersKubeconfigCreate2()**](KubernetesApi.md#kubernetesClustersKubeconfigCreate2) | **POST** /api/v1/kubernetes/clusters/{id}/kubeconfig/ |  |
| [**kubernetesClustersKubeconfigRetrieve()**](KubernetesApi.md#kubernetesClustersKubeconfigRetrieve) | **GET** /api/kubernetes/clusters/{id}/kubeconfig/ |  |
| [**kubernetesClustersKubeconfigRetrieve2()**](KubernetesApi.md#kubernetesClustersKubeconfigRetrieve2) | **GET** /api/v1/kubernetes/clusters/{id}/kubeconfig/ |  |
| [**kubernetesClustersList()**](KubernetesApi.md#kubernetesClustersList) | **GET** /api/kubernetes/clusters/ |  |
| [**kubernetesClustersList2()**](KubernetesApi.md#kubernetesClustersList2) | **GET** /api/v1/kubernetes/clusters/ |  |
| [**kubernetesClustersPartialUpdate()**](KubernetesApi.md#kubernetesClustersPartialUpdate) | **PATCH** /api/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersPartialUpdate2()**](KubernetesApi.md#kubernetesClustersPartialUpdate2) | **PATCH** /api/v1/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersPortForwardsCreate()**](KubernetesApi.md#kubernetesClustersPortForwardsCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/port-forwards/ |  |
| [**kubernetesClustersPortForwardsCreate2()**](KubernetesApi.md#kubernetesClustersPortForwardsCreate2) | **POST** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/ |  |
| [**kubernetesClustersPortForwardsDestroy()**](KubernetesApi.md#kubernetesClustersPortForwardsDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersPortForwardsDestroy2()**](KubernetesApi.md#kubernetesClustersPortForwardsDestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersPortForwardsPartialUpdate()**](KubernetesApi.md#kubernetesClustersPortForwardsPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersPortForwardsPartialUpdate2()**](KubernetesApi.md#kubernetesClustersPortForwardsPartialUpdate2) | **PATCH** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersPortForwardsRetrieve()**](KubernetesApi.md#kubernetesClustersPortForwardsRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/port-forwards/ |  |
| [**kubernetesClustersPortForwardsRetrieve2()**](KubernetesApi.md#kubernetesClustersPortForwardsRetrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersPortForwardsRetrieve3()**](KubernetesApi.md#kubernetesClustersPortForwardsRetrieve3) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/ |  |
| [**kubernetesClustersPortForwardsRetrieve4()**](KubernetesApi.md#kubernetesClustersPortForwardsRetrieve4) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersPortForwardsUpdate()**](KubernetesApi.md#kubernetesClustersPortForwardsUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersPortForwardsUpdate2()**](KubernetesApi.md#kubernetesClustersPortForwardsUpdate2) | **PUT** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersResourcePoolsCreate()**](KubernetesApi.md#kubernetesClustersResourcePoolsCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/resource-pools/ |  |
| [**kubernetesClustersResourcePoolsCreate2()**](KubernetesApi.md#kubernetesClustersResourcePoolsCreate2) | **POST** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/ |  |
| [**kubernetesClustersResourcePoolsDestroy()**](KubernetesApi.md#kubernetesClustersResourcePoolsDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersResourcePoolsDestroy2()**](KubernetesApi.md#kubernetesClustersResourcePoolsDestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersResourcePoolsList()**](KubernetesApi.md#kubernetesClustersResourcePoolsList) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/ |  |
| [**kubernetesClustersResourcePoolsList2()**](KubernetesApi.md#kubernetesClustersResourcePoolsList2) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/ |  |
| [**kubernetesClustersResourcePoolsNodesDestroy()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ |  |
| [**kubernetesClustersResourcePoolsNodesDestroy2()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesDestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ |  |
| [**kubernetesClustersResourcePoolsNodesList()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesList) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/ |  |
| [**kubernetesClustersResourcePoolsNodesList2()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesList2) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/ |  |
| [**kubernetesClustersResourcePoolsNodesRetrieve()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ |  |
| [**kubernetesClustersResourcePoolsNodesRetrieve2()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesRetrieve2) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ |  |
| [**kubernetesClustersResourcePoolsPartialUpdate()**](KubernetesApi.md#kubernetesClustersResourcePoolsPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersResourcePoolsPartialUpdate2()**](KubernetesApi.md#kubernetesClustersResourcePoolsPartialUpdate2) | **PATCH** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersResourcePoolsRetrieve()**](KubernetesApi.md#kubernetesClustersResourcePoolsRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersResourcePoolsRetrieve2()**](KubernetesApi.md#kubernetesClustersResourcePoolsRetrieve2) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersResourcePoolsUpdate()**](KubernetesApi.md#kubernetesClustersResourcePoolsUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersResourcePoolsUpdate2()**](KubernetesApi.md#kubernetesClustersResourcePoolsUpdate2) | **PUT** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersRetrieve()**](KubernetesApi.md#kubernetesClustersRetrieve) | **GET** /api/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersRetrieve2()**](KubernetesApi.md#kubernetesClustersRetrieve2) | **GET** /api/v1/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersTalosVersionUpgradeCreate()**](KubernetesApi.md#kubernetesClustersTalosVersionUpgradeCreate) | **POST** /api/kubernetes/clusters/{id}/talos-version-upgrade/ |  |
| [**kubernetesClustersTalosVersionUpgradeCreate2()**](KubernetesApi.md#kubernetesClustersTalosVersionUpgradeCreate2) | **POST** /api/v1/kubernetes/clusters/{id}/talos-version-upgrade/ |  |
| [**kubernetesClustersTcproutesCreate()**](KubernetesApi.md#kubernetesClustersTcproutesCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/tcproutes/ |  |
| [**kubernetesClustersTcproutesCreate2()**](KubernetesApi.md#kubernetesClustersTcproutesCreate2) | **POST** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/ |  |
| [**kubernetesClustersTcproutesDestroy()**](KubernetesApi.md#kubernetesClustersTcproutesDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersTcproutesDestroy2()**](KubernetesApi.md#kubernetesClustersTcproutesDestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersTcproutesPartialUpdate()**](KubernetesApi.md#kubernetesClustersTcproutesPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersTcproutesPartialUpdate2()**](KubernetesApi.md#kubernetesClustersTcproutesPartialUpdate2) | **PATCH** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersTcproutesRetrieve()**](KubernetesApi.md#kubernetesClustersTcproutesRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/tcproutes/ |  |
| [**kubernetesClustersTcproutesRetrieve2()**](KubernetesApi.md#kubernetesClustersTcproutesRetrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersTcproutesRetrieve3()**](KubernetesApi.md#kubernetesClustersTcproutesRetrieve3) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/ |  |
| [**kubernetesClustersTcproutesRetrieve4()**](KubernetesApi.md#kubernetesClustersTcproutesRetrieve4) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersTcproutesUpdate()**](KubernetesApi.md#kubernetesClustersTcproutesUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersTcproutesUpdate2()**](KubernetesApi.md#kubernetesClustersTcproutesUpdate2) | **PUT** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersUdproutesCreate()**](KubernetesApi.md#kubernetesClustersUdproutesCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/udproutes/ |  |
| [**kubernetesClustersUdproutesCreate2()**](KubernetesApi.md#kubernetesClustersUdproutesCreate2) | **POST** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/ |  |
| [**kubernetesClustersUdproutesDestroy()**](KubernetesApi.md#kubernetesClustersUdproutesDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUdproutesDestroy2()**](KubernetesApi.md#kubernetesClustersUdproutesDestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUdproutesPartialUpdate()**](KubernetesApi.md#kubernetesClustersUdproutesPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUdproutesPartialUpdate2()**](KubernetesApi.md#kubernetesClustersUdproutesPartialUpdate2) | **PATCH** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUdproutesRetrieve()**](KubernetesApi.md#kubernetesClustersUdproutesRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/udproutes/ |  |
| [**kubernetesClustersUdproutesRetrieve2()**](KubernetesApi.md#kubernetesClustersUdproutesRetrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUdproutesRetrieve3()**](KubernetesApi.md#kubernetesClustersUdproutesRetrieve3) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/ |  |
| [**kubernetesClustersUdproutesRetrieve4()**](KubernetesApi.md#kubernetesClustersUdproutesRetrieve4) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUdproutesUpdate()**](KubernetesApi.md#kubernetesClustersUdproutesUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUdproutesUpdate2()**](KubernetesApi.md#kubernetesClustersUdproutesUpdate2) | **PUT** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUpdate()**](KubernetesApi.md#kubernetesClustersUpdate) | **PUT** /api/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersUpdate2()**](KubernetesApi.md#kubernetesClustersUpdate2) | **PUT** /api/v1/kubernetes/clusters/{id}/ |  |


## `kubernetesClusterTypesList()`

```php
kubernetesClusterTypesList($page): \PidginHost\\Sdk\Model\PaginatedClusterTypeList
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->kubernetesClusterTypesList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClusterTypesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedClusterTypeList**](../Model/PaginatedClusterTypeList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClusterTypesList2()`

```php
kubernetesClusterTypesList2($page): \PidginHost\\Sdk\Model\PaginatedClusterTypeList
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->kubernetesClusterTypesList2($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClusterTypesList2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedClusterTypeList**](../Model/PaginatedClusterTypeList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersConnectVmCreate()`

```php
kubernetesClustersConnectVmCreate($id, $connect_vm_request): \PidginHost\\Sdk\Model\ConnectVMResponse
```



Connect a cloud VM to the cluster private network.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$connect_vm_request = new \PidginHost\\Sdk\Model\ConnectVMRequest(); // \PidginHost\\Sdk\Model\ConnectVMRequest

try {
    $result = $apiInstance->kubernetesClustersConnectVmCreate($id, $connect_vm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersConnectVmCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **connect_vm_request** | [**\PidginHost\\Sdk\Model\ConnectVMRequest**](../Model/ConnectVMRequest.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\ConnectVMResponse**](../Model/ConnectVMResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersConnectVmCreate2()`

```php
kubernetesClustersConnectVmCreate2($id, $connect_vm_request): \PidginHost\\Sdk\Model\ConnectVMResponse
```



Connect a cloud VM to the cluster private network.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$connect_vm_request = new \PidginHost\\Sdk\Model\ConnectVMRequest(); // \PidginHost\\Sdk\Model\ConnectVMRequest

try {
    $result = $apiInstance->kubernetesClustersConnectVmCreate2($id, $connect_vm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersConnectVmCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **connect_vm_request** | [**\PidginHost\\Sdk\Model\ConnectVMRequest**](../Model/ConnectVMRequest.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\ConnectVMResponse**](../Model/ConnectVMResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersConnectedVmsRetrieve()`

```php
kubernetesClustersConnectedVmsRetrieve($id): \PidginHost\\Sdk\Model\ConnectedVMsResponse
```



List cloud VMs connected to the cluster private network.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersConnectedVmsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersConnectedVmsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ConnectedVMsResponse**](../Model/ConnectedVMsResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersConnectedVmsRetrieve2()`

```php
kubernetesClustersConnectedVmsRetrieve2($id): \PidginHost\\Sdk\Model\ConnectedVMsResponse
```



List cloud VMs connected to the cluster private network.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersConnectedVmsRetrieve2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersConnectedVmsRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ConnectedVMsResponse**](../Model/ConnectedVMsResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersCreate()`

```php
kubernetesClustersCreate($cluster_add): \PidginHost\\Sdk\Model\ClusterAddResponse
```



Create new k8s cluster

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_add = new \PidginHost\\Sdk\Model\ClusterAdd(); // \PidginHost\\Sdk\Model\ClusterAdd

try {
    $result = $apiInstance->kubernetesClustersCreate($cluster_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_add** | [**\PidginHost\\Sdk\Model\ClusterAdd**](../Model/ClusterAdd.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\ClusterAddResponse**](../Model/ClusterAddResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersCreate2()`

```php
kubernetesClustersCreate2($cluster_add): \PidginHost\\Sdk\Model\ClusterAddResponse
```



Create new k8s cluster

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_add = new \PidginHost\\Sdk\Model\ClusterAdd(); // \PidginHost\\Sdk\Model\ClusterAdd

try {
    $result = $apiInstance->kubernetesClustersCreate2($cluster_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_add** | [**\PidginHost\\Sdk\Model\ClusterAdd**](../Model/ClusterAdd.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\ClusterAddResponse**](../Model/ClusterAddResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersDestroy()`

```php
kubernetesClustersDestroy($id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersDestroy: ', $e->getMessage(), PHP_EOL;
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

## `kubernetesClustersDestroy2()`

```php
kubernetesClustersDestroy2($id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersDestroy2($id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersDestroy2: ', $e->getMessage(), PHP_EOL;
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

## `kubernetesClustersDisconnectVmCreate()`

```php
kubernetesClustersDisconnectVmCreate($id, $disconnect_vm_request): \PidginHost\\Sdk\Model\DisconnectVMResponse
```



Disconnect a cloud VM from the cluster private network.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$disconnect_vm_request = new \PidginHost\\Sdk\Model\DisconnectVMRequest(); // \PidginHost\\Sdk\Model\DisconnectVMRequest

try {
    $result = $apiInstance->kubernetesClustersDisconnectVmCreate($id, $disconnect_vm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersDisconnectVmCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **disconnect_vm_request** | [**\PidginHost\\Sdk\Model\DisconnectVMRequest**](../Model/DisconnectVMRequest.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\DisconnectVMResponse**](../Model/DisconnectVMResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersDisconnectVmCreate2()`

```php
kubernetesClustersDisconnectVmCreate2($id, $disconnect_vm_request): \PidginHost\\Sdk\Model\DisconnectVMResponse
```



Disconnect a cloud VM from the cluster private network.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$disconnect_vm_request = new \PidginHost\\Sdk\Model\DisconnectVMRequest(); // \PidginHost\\Sdk\Model\DisconnectVMRequest

try {
    $result = $apiInstance->kubernetesClustersDisconnectVmCreate2($id, $disconnect_vm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersDisconnectVmCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **disconnect_vm_request** | [**\PidginHost\\Sdk\Model\DisconnectVMRequest**](../Model/DisconnectVMRequest.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\DisconnectVMResponse**](../Model/DisconnectVMResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersHttproutesCreate()`

```php
kubernetesClustersHttproutesCreate($cluster_id, $http_route): \PidginHost\\Sdk\Model\HTTPRoute
```



Create new HTTPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$http_route = new \PidginHost\\Sdk\Model\HTTPRoute(); // \PidginHost\\Sdk\Model\HTTPRoute

try {
    $result = $apiInstance->kubernetesClustersHttproutesCreate($cluster_id, $http_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **http_route** | [**\PidginHost\\Sdk\Model\HTTPRoute**](../Model/HTTPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\HTTPRoute**](../Model/HTTPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersHttproutesCreate2()`

```php
kubernetesClustersHttproutesCreate2($cluster_id, $http_route): \PidginHost\\Sdk\Model\HTTPRoute
```



Create new HTTPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$http_route = new \PidginHost\\Sdk\Model\HTTPRoute(); // \PidginHost\\Sdk\Model\HTTPRoute

try {
    $result = $apiInstance->kubernetesClustersHttproutesCreate2($cluster_id, $http_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **http_route** | [**\PidginHost\\Sdk\Model\HTTPRoute**](../Model/HTTPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\HTTPRoute**](../Model/HTTPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersHttproutesDestroy()`

```php
kubernetesClustersHttproutesDestroy($cluster_id, $id)
```



ViewSet for managing HTTPRoute resources.  HTTPRoutes expose HTTP/HTTPS services through the Gateway with optional automatic TLS certificate issuance.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersHttproutesDestroy($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersHttproutesDestroy2()`

```php
kubernetesClustersHttproutesDestroy2($cluster_id, $id)
```



ViewSet for managing HTTPRoute resources.  HTTPRoutes expose HTTP/HTTPS services through the Gateway with optional automatic TLS certificate issuance.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersHttproutesDestroy2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesDestroy2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersHttproutesPartialUpdate()`

```php
kubernetesClustersHttproutesPartialUpdate($cluster_id, $id, $patched_http_route): \PidginHost\\Sdk\Model\HTTPRoute
```



Partially update HTTPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$patched_http_route = new \PidginHost\\Sdk\Model\PatchedHTTPRoute(); // \PidginHost\\Sdk\Model\PatchedHTTPRoute

try {
    $result = $apiInstance->kubernetesClustersHttproutesPartialUpdate($cluster_id, $id, $patched_http_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **patched_http_route** | [**\PidginHost\\Sdk\Model\PatchedHTTPRoute**](../Model/PatchedHTTPRoute.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\HTTPRoute**](../Model/HTTPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersHttproutesPartialUpdate2()`

```php
kubernetesClustersHttproutesPartialUpdate2($cluster_id, $id, $patched_http_route): \PidginHost\\Sdk\Model\HTTPRoute
```



Partially update HTTPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$patched_http_route = new \PidginHost\\Sdk\Model\PatchedHTTPRoute(); // \PidginHost\\Sdk\Model\PatchedHTTPRoute

try {
    $result = $apiInstance->kubernetesClustersHttproutesPartialUpdate2($cluster_id, $id, $patched_http_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesPartialUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **patched_http_route** | [**\PidginHost\\Sdk\Model\PatchedHTTPRoute**](../Model/PatchedHTTPRoute.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\HTTPRoute**](../Model/HTTPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersHttproutesRetrieve()`

```php
kubernetesClustersHttproutesRetrieve($cluster_id)
```



ViewSet for managing HTTPRoute resources.  HTTPRoutes expose HTTP/HTTPS services through the Gateway with optional automatic TLS certificate issuance.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int

try {
    $apiInstance->kubernetesClustersHttproutesRetrieve($cluster_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |

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

## `kubernetesClustersHttproutesRetrieve2()`

```php
kubernetesClustersHttproutesRetrieve2($cluster_id, $id)
```



ViewSet for managing HTTPRoute resources.  HTTPRoutes expose HTTP/HTTPS services through the Gateway with optional automatic TLS certificate issuance.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersHttproutesRetrieve2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersHttproutesRetrieve3()`

```php
kubernetesClustersHttproutesRetrieve3($cluster_id)
```



ViewSet for managing HTTPRoute resources.  HTTPRoutes expose HTTP/HTTPS services through the Gateway with optional automatic TLS certificate issuance.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int

try {
    $apiInstance->kubernetesClustersHttproutesRetrieve3($cluster_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesRetrieve3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |

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

## `kubernetesClustersHttproutesRetrieve4()`

```php
kubernetesClustersHttproutesRetrieve4($cluster_id, $id)
```



ViewSet for managing HTTPRoute resources.  HTTPRoutes expose HTTP/HTTPS services through the Gateway with optional automatic TLS certificate issuance.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersHttproutesRetrieve4($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesRetrieve4: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersHttproutesUpdate()`

```php
kubernetesClustersHttproutesUpdate($cluster_id, $id, $http_route): \PidginHost\\Sdk\Model\HTTPRoute
```



Update HTTPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$http_route = new \PidginHost\\Sdk\Model\HTTPRoute(); // \PidginHost\\Sdk\Model\HTTPRoute

try {
    $result = $apiInstance->kubernetesClustersHttproutesUpdate($cluster_id, $id, $http_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **http_route** | [**\PidginHost\\Sdk\Model\HTTPRoute**](../Model/HTTPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\HTTPRoute**](../Model/HTTPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersHttproutesUpdate2()`

```php
kubernetesClustersHttproutesUpdate2($cluster_id, $id, $http_route): \PidginHost\\Sdk\Model\HTTPRoute
```



Update HTTPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$http_route = new \PidginHost\\Sdk\Model\HTTPRoute(); // \PidginHost\\Sdk\Model\HTTPRoute

try {
    $result = $apiInstance->kubernetesClustersHttproutesUpdate2($cluster_id, $id, $http_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersHttproutesUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **http_route** | [**\PidginHost\\Sdk\Model\HTTPRoute**](../Model/HTTPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\HTTPRoute**](../Model/HTTPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersKubeVersionUpgradeCreate()`

```php
kubernetesClustersKubeVersionUpgradeCreate($id): \PidginHost\\Sdk\Model\KubeUpgradeResponse
```



Upgrade kubernetes to the next available version.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersKubeVersionUpgradeCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersKubeVersionUpgradeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\KubeUpgradeResponse**](../Model/KubeUpgradeResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersKubeVersionUpgradeCreate2()`

```php
kubernetesClustersKubeVersionUpgradeCreate2($id): \PidginHost\\Sdk\Model\KubeUpgradeResponse
```



Upgrade kubernetes to the next available version.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersKubeVersionUpgradeCreate2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersKubeVersionUpgradeCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\KubeUpgradeResponse**](../Model/KubeUpgradeResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersKubeconfigCreate()`

```php
kubernetesClustersKubeconfigCreate($id): string
```



Download kubeconfig file. Use POST to generate a new kubeconfig.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersKubeconfigCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersKubeconfigCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**string**

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersKubeconfigCreate2()`

```php
kubernetesClustersKubeconfigCreate2($id): string
```



Download kubeconfig file. Use POST to generate a new kubeconfig.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersKubeconfigCreate2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersKubeconfigCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**string**

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersKubeconfigRetrieve()`

```php
kubernetesClustersKubeconfigRetrieve($id): string
```



Download kubeconfig file. Use POST to generate a new kubeconfig.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersKubeconfigRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersKubeconfigRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**string**

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersKubeconfigRetrieve2()`

```php
kubernetesClustersKubeconfigRetrieve2($id): string
```



Download kubeconfig file. Use POST to generate a new kubeconfig.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersKubeconfigRetrieve2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersKubeconfigRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**string**

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersList()`

```php
kubernetesClustersList($page): \PidginHost\\Sdk\Model\PaginatedClusterDetailList
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->kubernetesClustersList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedClusterDetailList**](../Model/PaginatedClusterDetailList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersList2()`

```php
kubernetesClustersList2($page): \PidginHost\\Sdk\Model\PaginatedClusterDetailList
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->kubernetesClustersList2($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersList2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedClusterDetailList**](../Model/PaginatedClusterDetailList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersPartialUpdate()`

```php
kubernetesClustersPartialUpdate($id, $patched_cluster_detail): \PidginHost\\Sdk\Model\ClusterDetail
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$patched_cluster_detail = new \PidginHost\\Sdk\Model\PatchedClusterDetail(); // \PidginHost\\Sdk\Model\PatchedClusterDetail

try {
    $result = $apiInstance->kubernetesClustersPartialUpdate($id, $patched_cluster_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **patched_cluster_detail** | [**\PidginHost\\Sdk\Model\PatchedClusterDetail**](../Model/PatchedClusterDetail.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\ClusterDetail**](../Model/ClusterDetail.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersPartialUpdate2()`

```php
kubernetesClustersPartialUpdate2($id, $patched_cluster_detail): \PidginHost\\Sdk\Model\ClusterDetail
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$patched_cluster_detail = new \PidginHost\\Sdk\Model\PatchedClusterDetail(); // \PidginHost\\Sdk\Model\PatchedClusterDetail

try {
    $result = $apiInstance->kubernetesClustersPartialUpdate2($id, $patched_cluster_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPartialUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **patched_cluster_detail** | [**\PidginHost\\Sdk\Model\PatchedClusterDetail**](../Model/PatchedClusterDetail.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\ClusterDetail**](../Model/ClusterDetail.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersPortForwardsCreate()`

```php
kubernetesClustersPortForwardsCreate($cluster_id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int

try {
    $apiInstance->kubernetesClustersPortForwardsCreate($cluster_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |

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

## `kubernetesClustersPortForwardsCreate2()`

```php
kubernetesClustersPortForwardsCreate2($cluster_id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int

try {
    $apiInstance->kubernetesClustersPortForwardsCreate2($cluster_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |

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

## `kubernetesClustersPortForwardsDestroy()`

```php
kubernetesClustersPortForwardsDestroy($cluster_id, $id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersPortForwardsDestroy($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersPortForwardsDestroy2()`

```php
kubernetesClustersPortForwardsDestroy2($cluster_id, $id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersPortForwardsDestroy2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsDestroy2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersPortForwardsPartialUpdate()`

```php
kubernetesClustersPortForwardsPartialUpdate($cluster_id, $id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersPortForwardsPartialUpdate($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersPortForwardsPartialUpdate2()`

```php
kubernetesClustersPortForwardsPartialUpdate2($cluster_id, $id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersPortForwardsPartialUpdate2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsPartialUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersPortForwardsRetrieve()`

```php
kubernetesClustersPortForwardsRetrieve($cluster_id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int

try {
    $apiInstance->kubernetesClustersPortForwardsRetrieve($cluster_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |

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

## `kubernetesClustersPortForwardsRetrieve2()`

```php
kubernetesClustersPortForwardsRetrieve2($cluster_id, $id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersPortForwardsRetrieve2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersPortForwardsRetrieve3()`

```php
kubernetesClustersPortForwardsRetrieve3($cluster_id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int

try {
    $apiInstance->kubernetesClustersPortForwardsRetrieve3($cluster_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsRetrieve3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |

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

## `kubernetesClustersPortForwardsRetrieve4()`

```php
kubernetesClustersPortForwardsRetrieve4($cluster_id, $id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersPortForwardsRetrieve4($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsRetrieve4: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersPortForwardsUpdate()`

```php
kubernetesClustersPortForwardsUpdate($cluster_id, $id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersPortForwardsUpdate($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersPortForwardsUpdate2()`

```php
kubernetesClustersPortForwardsUpdate2($cluster_id, $id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersPortForwardsUpdate2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersPortForwardsUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersResourcePoolsCreate()`

```php
kubernetesClustersResourcePoolsCreate($cluster_id, $resource_pool_add): \PidginHost\\Sdk\Model\ResourcePoolAddResponse
```



Create new resource pool

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$resource_pool_add = new \PidginHost\\Sdk\Model\ResourcePoolAdd(); // \PidginHost\\Sdk\Model\ResourcePoolAdd

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsCreate($cluster_id, $resource_pool_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **resource_pool_add** | [**\PidginHost\\Sdk\Model\ResourcePoolAdd**](../Model/ResourcePoolAdd.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\ResourcePoolAddResponse**](../Model/ResourcePoolAddResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsCreate2()`

```php
kubernetesClustersResourcePoolsCreate2($cluster_id, $resource_pool_add): \PidginHost\\Sdk\Model\ResourcePoolAddResponse
```



Create new resource pool

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$resource_pool_add = new \PidginHost\\Sdk\Model\ResourcePoolAdd(); // \PidginHost\\Sdk\Model\ResourcePoolAdd

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsCreate2($cluster_id, $resource_pool_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **resource_pool_add** | [**\PidginHost\\Sdk\Model\ResourcePoolAdd**](../Model/ResourcePoolAdd.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\ResourcePoolAddResponse**](../Model/ResourcePoolAddResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsDestroy()`

```php
kubernetesClustersResourcePoolsDestroy($cluster_id, $id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersResourcePoolsDestroy($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersResourcePoolsDestroy2()`

```php
kubernetesClustersResourcePoolsDestroy2($cluster_id, $id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersResourcePoolsDestroy2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsDestroy2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersResourcePoolsList()`

```php
kubernetesClustersResourcePoolsList($cluster_id, $page): \PidginHost\\Sdk\Model\PaginatedResourcePoolList
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsList($cluster_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedResourcePoolList**](../Model/PaginatedResourcePoolList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsList2()`

```php
kubernetesClustersResourcePoolsList2($cluster_id, $page): \PidginHost\\Sdk\Model\PaginatedResourcePoolList
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsList2($cluster_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsList2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedResourcePoolList**](../Model/PaginatedResourcePoolList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsNodesDestroy()`

```php
kubernetesClustersResourcePoolsNodesDestroy($cluster_id, $id, $pool_id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$pool_id = 56; // int

try {
    $apiInstance->kubernetesClustersResourcePoolsNodesDestroy($cluster_id, $id, $pool_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsNodesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **pool_id** | **int**|  | |

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

## `kubernetesClustersResourcePoolsNodesDestroy2()`

```php
kubernetesClustersResourcePoolsNodesDestroy2($cluster_id, $id, $pool_id)
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$pool_id = 56; // int

try {
    $apiInstance->kubernetesClustersResourcePoolsNodesDestroy2($cluster_id, $id, $pool_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsNodesDestroy2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **pool_id** | **int**|  | |

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

## `kubernetesClustersResourcePoolsNodesList()`

```php
kubernetesClustersResourcePoolsNodesList($cluster_id, $pool_id, $page): \PidginHost\\Sdk\Model\PaginatedResourcePoolNodeList
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$pool_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsNodesList($cluster_id, $pool_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsNodesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **pool_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedResourcePoolNodeList**](../Model/PaginatedResourcePoolNodeList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsNodesList2()`

```php
kubernetesClustersResourcePoolsNodesList2($cluster_id, $pool_id, $page): \PidginHost\\Sdk\Model\PaginatedResourcePoolNodeList
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$pool_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsNodesList2($cluster_id, $pool_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsNodesList2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **pool_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedResourcePoolNodeList**](../Model/PaginatedResourcePoolNodeList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsNodesRetrieve()`

```php
kubernetesClustersResourcePoolsNodesRetrieve($cluster_id, $id, $pool_id): \PidginHost\\Sdk\Model\ResourcePoolNode
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$pool_id = 56; // int

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsNodesRetrieve($cluster_id, $id, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsNodesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **pool_id** | **int**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ResourcePoolNode**](../Model/ResourcePoolNode.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsNodesRetrieve2()`

```php
kubernetesClustersResourcePoolsNodesRetrieve2($cluster_id, $id, $pool_id): \PidginHost\\Sdk\Model\ResourcePoolNode
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$pool_id = 56; // int

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsNodesRetrieve2($cluster_id, $id, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsNodesRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **pool_id** | **int**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ResourcePoolNode**](../Model/ResourcePoolNode.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsPartialUpdate()`

```php
kubernetesClustersResourcePoolsPartialUpdate($cluster_id, $id, $patched_resource_pool): \PidginHost\\Sdk\Model\ResourcePool
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$patched_resource_pool = new \PidginHost\\Sdk\Model\PatchedResourcePool(); // \PidginHost\\Sdk\Model\PatchedResourcePool

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsPartialUpdate($cluster_id, $id, $patched_resource_pool);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **patched_resource_pool** | [**\PidginHost\\Sdk\Model\PatchedResourcePool**](../Model/PatchedResourcePool.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\ResourcePool**](../Model/ResourcePool.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsPartialUpdate2()`

```php
kubernetesClustersResourcePoolsPartialUpdate2($cluster_id, $id, $patched_resource_pool): \PidginHost\\Sdk\Model\ResourcePool
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$patched_resource_pool = new \PidginHost\\Sdk\Model\PatchedResourcePool(); // \PidginHost\\Sdk\Model\PatchedResourcePool

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsPartialUpdate2($cluster_id, $id, $patched_resource_pool);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsPartialUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **patched_resource_pool** | [**\PidginHost\\Sdk\Model\PatchedResourcePool**](../Model/PatchedResourcePool.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\ResourcePool**](../Model/ResourcePool.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsRetrieve()`

```php
kubernetesClustersResourcePoolsRetrieve($cluster_id, $id): \PidginHost\\Sdk\Model\ResourcePool
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsRetrieve($cluster_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ResourcePool**](../Model/ResourcePool.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsRetrieve2()`

```php
kubernetesClustersResourcePoolsRetrieve2($cluster_id, $id): \PidginHost\\Sdk\Model\ResourcePool
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsRetrieve2($cluster_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ResourcePool**](../Model/ResourcePool.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsUpdate()`

```php
kubernetesClustersResourcePoolsUpdate($cluster_id, $id, $resource_pool): \PidginHost\\Sdk\Model\ResourcePool
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$resource_pool = new \PidginHost\\Sdk\Model\ResourcePool(); // \PidginHost\\Sdk\Model\ResourcePool

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsUpdate($cluster_id, $id, $resource_pool);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **resource_pool** | [**\PidginHost\\Sdk\Model\ResourcePool**](../Model/ResourcePool.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\ResourcePool**](../Model/ResourcePool.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersResourcePoolsUpdate2()`

```php
kubernetesClustersResourcePoolsUpdate2($cluster_id, $id, $resource_pool): \PidginHost\\Sdk\Model\ResourcePool
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$resource_pool = new \PidginHost\\Sdk\Model\ResourcePool(); // \PidginHost\\Sdk\Model\ResourcePool

try {
    $result = $apiInstance->kubernetesClustersResourcePoolsUpdate2($cluster_id, $id, $resource_pool);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **resource_pool** | [**\PidginHost\\Sdk\Model\ResourcePool**](../Model/ResourcePool.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\ResourcePool**](../Model/ResourcePool.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersRetrieve()`

```php
kubernetesClustersRetrieve($id): \PidginHost\\Sdk\Model\ClusterDetail
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ClusterDetail**](../Model/ClusterDetail.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersRetrieve2()`

```php
kubernetesClustersRetrieve2($id): \PidginHost\\Sdk\Model\ClusterDetail
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersRetrieve2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ClusterDetail**](../Model/ClusterDetail.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersTalosVersionUpgradeCreate()`

```php
kubernetesClustersTalosVersionUpgradeCreate($id): \PidginHost\\Sdk\Model\TalosUpgradeResponse
```



Upgrade Talos to the next available version.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersTalosVersionUpgradeCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTalosVersionUpgradeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\TalosUpgradeResponse**](../Model/TalosUpgradeResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersTalosVersionUpgradeCreate2()`

```php
kubernetesClustersTalosVersionUpgradeCreate2($id): \PidginHost\\Sdk\Model\TalosUpgradeResponse
```



Upgrade Talos to the next available version.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->kubernetesClustersTalosVersionUpgradeCreate2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTalosVersionUpgradeCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\TalosUpgradeResponse**](../Model/TalosUpgradeResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersTcproutesCreate()`

```php
kubernetesClustersTcproutesCreate($cluster_id, $tcp_route): \PidginHost\\Sdk\Model\TCPRoute
```



Create new TCPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$tcp_route = new \PidginHost\\Sdk\Model\TCPRoute(); // \PidginHost\\Sdk\Model\TCPRoute

try {
    $result = $apiInstance->kubernetesClustersTcproutesCreate($cluster_id, $tcp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **tcp_route** | [**\PidginHost\\Sdk\Model\TCPRoute**](../Model/TCPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\TCPRoute**](../Model/TCPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersTcproutesCreate2()`

```php
kubernetesClustersTcproutesCreate2($cluster_id, $tcp_route): \PidginHost\\Sdk\Model\TCPRoute
```



Create new TCPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$tcp_route = new \PidginHost\\Sdk\Model\TCPRoute(); // \PidginHost\\Sdk\Model\TCPRoute

try {
    $result = $apiInstance->kubernetesClustersTcproutesCreate2($cluster_id, $tcp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **tcp_route** | [**\PidginHost\\Sdk\Model\TCPRoute**](../Model/TCPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\TCPRoute**](../Model/TCPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersTcproutesDestroy()`

```php
kubernetesClustersTcproutesDestroy($cluster_id, $id)
```



ViewSet for managing TCPRoute resources.  TCPRoutes expose TCP services through the Gateway on specific external ports. Reserved ports (22, 6443, 50000, 50001) cannot be exposed.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersTcproutesDestroy($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersTcproutesDestroy2()`

```php
kubernetesClustersTcproutesDestroy2($cluster_id, $id)
```



ViewSet for managing TCPRoute resources.  TCPRoutes expose TCP services through the Gateway on specific external ports. Reserved ports (22, 6443, 50000, 50001) cannot be exposed.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersTcproutesDestroy2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesDestroy2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersTcproutesPartialUpdate()`

```php
kubernetesClustersTcproutesPartialUpdate($cluster_id, $id, $patched_tcp_route): \PidginHost\\Sdk\Model\TCPRoute
```



Partially update TCPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$patched_tcp_route = new \PidginHost\\Sdk\Model\PatchedTCPRoute(); // \PidginHost\\Sdk\Model\PatchedTCPRoute

try {
    $result = $apiInstance->kubernetesClustersTcproutesPartialUpdate($cluster_id, $id, $patched_tcp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **patched_tcp_route** | [**\PidginHost\\Sdk\Model\PatchedTCPRoute**](../Model/PatchedTCPRoute.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\TCPRoute**](../Model/TCPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersTcproutesPartialUpdate2()`

```php
kubernetesClustersTcproutesPartialUpdate2($cluster_id, $id, $patched_tcp_route): \PidginHost\\Sdk\Model\TCPRoute
```



Partially update TCPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$patched_tcp_route = new \PidginHost\\Sdk\Model\PatchedTCPRoute(); // \PidginHost\\Sdk\Model\PatchedTCPRoute

try {
    $result = $apiInstance->kubernetesClustersTcproutesPartialUpdate2($cluster_id, $id, $patched_tcp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesPartialUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **patched_tcp_route** | [**\PidginHost\\Sdk\Model\PatchedTCPRoute**](../Model/PatchedTCPRoute.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\TCPRoute**](../Model/TCPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersTcproutesRetrieve()`

```php
kubernetesClustersTcproutesRetrieve($cluster_id)
```



ViewSet for managing TCPRoute resources.  TCPRoutes expose TCP services through the Gateway on specific external ports. Reserved ports (22, 6443, 50000, 50001) cannot be exposed.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int

try {
    $apiInstance->kubernetesClustersTcproutesRetrieve($cluster_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |

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

## `kubernetesClustersTcproutesRetrieve2()`

```php
kubernetesClustersTcproutesRetrieve2($cluster_id, $id)
```



ViewSet for managing TCPRoute resources.  TCPRoutes expose TCP services through the Gateway on specific external ports. Reserved ports (22, 6443, 50000, 50001) cannot be exposed.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersTcproutesRetrieve2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersTcproutesRetrieve3()`

```php
kubernetesClustersTcproutesRetrieve3($cluster_id)
```



ViewSet for managing TCPRoute resources.  TCPRoutes expose TCP services through the Gateway on specific external ports. Reserved ports (22, 6443, 50000, 50001) cannot be exposed.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int

try {
    $apiInstance->kubernetesClustersTcproutesRetrieve3($cluster_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesRetrieve3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |

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

## `kubernetesClustersTcproutesRetrieve4()`

```php
kubernetesClustersTcproutesRetrieve4($cluster_id, $id)
```



ViewSet for managing TCPRoute resources.  TCPRoutes expose TCP services through the Gateway on specific external ports. Reserved ports (22, 6443, 50000, 50001) cannot be exposed.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersTcproutesRetrieve4($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesRetrieve4: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersTcproutesUpdate()`

```php
kubernetesClustersTcproutesUpdate($cluster_id, $id, $tcp_route): \PidginHost\\Sdk\Model\TCPRoute
```



Update TCPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$tcp_route = new \PidginHost\\Sdk\Model\TCPRoute(); // \PidginHost\\Sdk\Model\TCPRoute

try {
    $result = $apiInstance->kubernetesClustersTcproutesUpdate($cluster_id, $id, $tcp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **tcp_route** | [**\PidginHost\\Sdk\Model\TCPRoute**](../Model/TCPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\TCPRoute**](../Model/TCPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersTcproutesUpdate2()`

```php
kubernetesClustersTcproutesUpdate2($cluster_id, $id, $tcp_route): \PidginHost\\Sdk\Model\TCPRoute
```



Update TCPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$tcp_route = new \PidginHost\\Sdk\Model\TCPRoute(); // \PidginHost\\Sdk\Model\TCPRoute

try {
    $result = $apiInstance->kubernetesClustersTcproutesUpdate2($cluster_id, $id, $tcp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersTcproutesUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **tcp_route** | [**\PidginHost\\Sdk\Model\TCPRoute**](../Model/TCPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\TCPRoute**](../Model/TCPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersUdproutesCreate()`

```php
kubernetesClustersUdproutesCreate($cluster_id, $udp_route): \PidginHost\\Sdk\Model\UDPRoute
```



Create new UDPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$udp_route = new \PidginHost\\Sdk\Model\UDPRoute(); // \PidginHost\\Sdk\Model\UDPRoute

try {
    $result = $apiInstance->kubernetesClustersUdproutesCreate($cluster_id, $udp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **udp_route** | [**\PidginHost\\Sdk\Model\UDPRoute**](../Model/UDPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\UDPRoute**](../Model/UDPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersUdproutesCreate2()`

```php
kubernetesClustersUdproutesCreate2($cluster_id, $udp_route): \PidginHost\\Sdk\Model\UDPRoute
```



Create new UDPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$udp_route = new \PidginHost\\Sdk\Model\UDPRoute(); // \PidginHost\\Sdk\Model\UDPRoute

try {
    $result = $apiInstance->kubernetesClustersUdproutesCreate2($cluster_id, $udp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **udp_route** | [**\PidginHost\\Sdk\Model\UDPRoute**](../Model/UDPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\UDPRoute**](../Model/UDPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersUdproutesDestroy()`

```php
kubernetesClustersUdproutesDestroy($cluster_id, $id)
```



ViewSet for managing UDPRoute resources.  UDPRoutes expose UDP services through the Gateway on specific external ports.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersUdproutesDestroy($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersUdproutesDestroy2()`

```php
kubernetesClustersUdproutesDestroy2($cluster_id, $id)
```



ViewSet for managing UDPRoute resources.  UDPRoutes expose UDP services through the Gateway on specific external ports.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersUdproutesDestroy2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesDestroy2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersUdproutesPartialUpdate()`

```php
kubernetesClustersUdproutesPartialUpdate($cluster_id, $id, $patched_udp_route): \PidginHost\\Sdk\Model\UDPRoute
```



Partially update UDPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$patched_udp_route = new \PidginHost\\Sdk\Model\PatchedUDPRoute(); // \PidginHost\\Sdk\Model\PatchedUDPRoute

try {
    $result = $apiInstance->kubernetesClustersUdproutesPartialUpdate($cluster_id, $id, $patched_udp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **patched_udp_route** | [**\PidginHost\\Sdk\Model\PatchedUDPRoute**](../Model/PatchedUDPRoute.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\UDPRoute**](../Model/UDPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersUdproutesPartialUpdate2()`

```php
kubernetesClustersUdproutesPartialUpdate2($cluster_id, $id, $patched_udp_route): \PidginHost\\Sdk\Model\UDPRoute
```



Partially update UDPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$patched_udp_route = new \PidginHost\\Sdk\Model\PatchedUDPRoute(); // \PidginHost\\Sdk\Model\PatchedUDPRoute

try {
    $result = $apiInstance->kubernetesClustersUdproutesPartialUpdate2($cluster_id, $id, $patched_udp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesPartialUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **patched_udp_route** | [**\PidginHost\\Sdk\Model\PatchedUDPRoute**](../Model/PatchedUDPRoute.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\UDPRoute**](../Model/UDPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersUdproutesRetrieve()`

```php
kubernetesClustersUdproutesRetrieve($cluster_id)
```



ViewSet for managing UDPRoute resources.  UDPRoutes expose UDP services through the Gateway on specific external ports.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int

try {
    $apiInstance->kubernetesClustersUdproutesRetrieve($cluster_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |

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

## `kubernetesClustersUdproutesRetrieve2()`

```php
kubernetesClustersUdproutesRetrieve2($cluster_id, $id)
```



ViewSet for managing UDPRoute resources.  UDPRoutes expose UDP services through the Gateway on specific external ports.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersUdproutesRetrieve2($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesRetrieve2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersUdproutesRetrieve3()`

```php
kubernetesClustersUdproutesRetrieve3($cluster_id)
```



ViewSet for managing UDPRoute resources.  UDPRoutes expose UDP services through the Gateway on specific external ports.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int

try {
    $apiInstance->kubernetesClustersUdproutesRetrieve3($cluster_id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesRetrieve3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |

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

## `kubernetesClustersUdproutesRetrieve4()`

```php
kubernetesClustersUdproutesRetrieve4($cluster_id, $id)
```



ViewSet for managing UDPRoute resources.  UDPRoutes expose UDP services through the Gateway on specific external ports.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string

try {
    $apiInstance->kubernetesClustersUdproutesRetrieve4($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesRetrieve4: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
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

## `kubernetesClustersUdproutesUpdate()`

```php
kubernetesClustersUdproutesUpdate($cluster_id, $id, $udp_route): \PidginHost\\Sdk\Model\UDPRoute
```



Update UDPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$udp_route = new \PidginHost\\Sdk\Model\UDPRoute(); // \PidginHost\\Sdk\Model\UDPRoute

try {
    $result = $apiInstance->kubernetesClustersUdproutesUpdate($cluster_id, $id, $udp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **udp_route** | [**\PidginHost\\Sdk\Model\UDPRoute**](../Model/UDPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\UDPRoute**](../Model/UDPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersUdproutesUpdate2()`

```php
kubernetesClustersUdproutesUpdate2($cluster_id, $id, $udp_route): \PidginHost\\Sdk\Model\UDPRoute
```



Update UDPRoute

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_id = 56; // int
$id = 'id_example'; // string
$udp_route = new \PidginHost\\Sdk\Model\UDPRoute(); // \PidginHost\\Sdk\Model\UDPRoute

try {
    $result = $apiInstance->kubernetesClustersUdproutesUpdate2($cluster_id, $id, $udp_route);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUdproutesUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **udp_route** | [**\PidginHost\\Sdk\Model\UDPRoute**](../Model/UDPRoute.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\UDPRoute**](../Model/UDPRoute.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersUpdate()`

```php
kubernetesClustersUpdate($id, $cluster_detail): \PidginHost\\Sdk\Model\ClusterDetail
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$cluster_detail = new \PidginHost\\Sdk\Model\ClusterDetail(); // \PidginHost\\Sdk\Model\ClusterDetail

try {
    $result = $apiInstance->kubernetesClustersUpdate($id, $cluster_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **cluster_detail** | [**\PidginHost\\Sdk\Model\ClusterDetail**](../Model/ClusterDetail.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\ClusterDetail**](../Model/ClusterDetail.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersUpdate2()`

```php
kubernetesClustersUpdate2($id, $cluster_detail): \PidginHost\\Sdk\Model\ClusterDetail
```



Require complete user profile for provisioning (create) API actions.

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


$apiInstance = new PidginHost\\Sdk\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$cluster_detail = new \PidginHost\\Sdk\Model\ClusterDetail(); // \PidginHost\\Sdk\Model\ClusterDetail

try {
    $result = $apiInstance->kubernetesClustersUpdate2($id, $cluster_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUpdate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **cluster_detail** | [**\PidginHost\\Sdk\Model\ClusterDetail**](../Model/ClusterDetail.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\ClusterDetail**](../Model/ClusterDetail.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
