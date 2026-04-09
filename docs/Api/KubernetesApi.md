# PidginHost\\Sdk\KubernetesApi



All URIs are relative to https://www.pidginhost.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**kubernetesClusterTypesList()**](KubernetesApi.md#kubernetesClusterTypesList) | **GET** /api/kubernetes/cluster-types/ |  |
| [**kubernetesClustersConnectVmCreate()**](KubernetesApi.md#kubernetesClustersConnectVmCreate) | **POST** /api/kubernetes/clusters/{id}/connect-vm/ |  |
| [**kubernetesClustersConnectedVmsRetrieve()**](KubernetesApi.md#kubernetesClustersConnectedVmsRetrieve) | **GET** /api/kubernetes/clusters/{id}/connected-vms/ |  |
| [**kubernetesClustersCreate()**](KubernetesApi.md#kubernetesClustersCreate) | **POST** /api/kubernetes/clusters/ |  |
| [**kubernetesClustersDestroy()**](KubernetesApi.md#kubernetesClustersDestroy) | **DELETE** /api/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersDisconnectVmCreate()**](KubernetesApi.md#kubernetesClustersDisconnectVmCreate) | **POST** /api/kubernetes/clusters/{id}/disconnect-vm/ |  |
| [**kubernetesClustersEligibleVmsRetrieve()**](KubernetesApi.md#kubernetesClustersEligibleVmsRetrieve) | **GET** /api/kubernetes/clusters/{id}/eligible-vms/ |  |
| [**kubernetesClustersHttproutesCreate()**](KubernetesApi.md#kubernetesClustersHttproutesCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/httproutes/ |  |
| [**kubernetesClustersHttproutesDestroy()**](KubernetesApi.md#kubernetesClustersHttproutesDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersHttproutesPartialUpdate()**](KubernetesApi.md#kubernetesClustersHttproutesPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersHttproutesRetrieve()**](KubernetesApi.md#kubernetesClustersHttproutesRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/httproutes/ |  |
| [**kubernetesClustersHttproutesRetrieve2()**](KubernetesApi.md#kubernetesClustersHttproutesRetrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersHttproutesUpdate()**](KubernetesApi.md#kubernetesClustersHttproutesUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ |  |
| [**kubernetesClustersKubeVersionUpgradeCreate()**](KubernetesApi.md#kubernetesClustersKubeVersionUpgradeCreate) | **POST** /api/kubernetes/clusters/{id}/kube-version-upgrade/ |  |
| [**kubernetesClustersKubeconfigCreate()**](KubernetesApi.md#kubernetesClustersKubeconfigCreate) | **POST** /api/kubernetes/clusters/{id}/kubeconfig/ |  |
| [**kubernetesClustersKubeconfigRetrieve()**](KubernetesApi.md#kubernetesClustersKubeconfigRetrieve) | **GET** /api/kubernetes/clusters/{id}/kubeconfig/ |  |
| [**kubernetesClustersLbFirewallCreate()**](KubernetesApi.md#kubernetesClustersLbFirewallCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/lb-firewall/ |  |
| [**kubernetesClustersLbFirewallDestroy()**](KubernetesApi.md#kubernetesClustersLbFirewallDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/lb-firewall/{id}/ |  |
| [**kubernetesClustersLbFirewallList()**](KubernetesApi.md#kubernetesClustersLbFirewallList) | **GET** /api/kubernetes/clusters/{cluster_id}/lb-firewall/ |  |
| [**kubernetesClustersLbFirewallPartialUpdate()**](KubernetesApi.md#kubernetesClustersLbFirewallPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/lb-firewall/{id}/ |  |
| [**kubernetesClustersLbFirewallRetrieve()**](KubernetesApi.md#kubernetesClustersLbFirewallRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/lb-firewall/{id}/ |  |
| [**kubernetesClustersLbFirewallUpdate()**](KubernetesApi.md#kubernetesClustersLbFirewallUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/lb-firewall/{id}/ |  |
| [**kubernetesClustersList()**](KubernetesApi.md#kubernetesClustersList) | **GET** /api/kubernetes/clusters/ |  |
| [**kubernetesClustersPartialUpdate()**](KubernetesApi.md#kubernetesClustersPartialUpdate) | **PATCH** /api/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersPortForwardsCreate()**](KubernetesApi.md#kubernetesClustersPortForwardsCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/port-forwards/ |  |
| [**kubernetesClustersPortForwardsDestroy()**](KubernetesApi.md#kubernetesClustersPortForwardsDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersPortForwardsPartialUpdate()**](KubernetesApi.md#kubernetesClustersPortForwardsPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersPortForwardsRetrieve()**](KubernetesApi.md#kubernetesClustersPortForwardsRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/port-forwards/ |  |
| [**kubernetesClustersPortForwardsRetrieve2()**](KubernetesApi.md#kubernetesClustersPortForwardsRetrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersPortForwardsUpdate()**](KubernetesApi.md#kubernetesClustersPortForwardsUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ |  |
| [**kubernetesClustersResourcePoolsCreate()**](KubernetesApi.md#kubernetesClustersResourcePoolsCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/resource-pools/ |  |
| [**kubernetesClustersResourcePoolsDestroy()**](KubernetesApi.md#kubernetesClustersResourcePoolsDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersResourcePoolsList()**](KubernetesApi.md#kubernetesClustersResourcePoolsList) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/ |  |
| [**kubernetesClustersResourcePoolsNodesDestroy()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ |  |
| [**kubernetesClustersResourcePoolsNodesList()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesList) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/ |  |
| [**kubernetesClustersResourcePoolsNodesMetricsRetrieve()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesMetricsRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/metrics/ |  |
| [**kubernetesClustersResourcePoolsNodesRetrieve()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ |  |
| [**kubernetesClustersResourcePoolsNodesRrdRetrieve()**](KubernetesApi.md#kubernetesClustersResourcePoolsNodesRrdRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/rrd/ |  |
| [**kubernetesClustersResourcePoolsPartialUpdate()**](KubernetesApi.md#kubernetesClustersResourcePoolsPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersResourcePoolsRetrieve()**](KubernetesApi.md#kubernetesClustersResourcePoolsRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersResourcePoolsUpdate()**](KubernetesApi.md#kubernetesClustersResourcePoolsUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ |  |
| [**kubernetesClustersRetrieve()**](KubernetesApi.md#kubernetesClustersRetrieve) | **GET** /api/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersTalosVersionUpgradeCreate()**](KubernetesApi.md#kubernetesClustersTalosVersionUpgradeCreate) | **POST** /api/kubernetes/clusters/{id}/talos-version-upgrade/ |  |
| [**kubernetesClustersTcproutesCreate()**](KubernetesApi.md#kubernetesClustersTcproutesCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/tcproutes/ |  |
| [**kubernetesClustersTcproutesDestroy()**](KubernetesApi.md#kubernetesClustersTcproutesDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersTcproutesPartialUpdate()**](KubernetesApi.md#kubernetesClustersTcproutesPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersTcproutesRetrieve()**](KubernetesApi.md#kubernetesClustersTcproutesRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/tcproutes/ |  |
| [**kubernetesClustersTcproutesRetrieve2()**](KubernetesApi.md#kubernetesClustersTcproutesRetrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersTcproutesUpdate()**](KubernetesApi.md#kubernetesClustersTcproutesUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ |  |
| [**kubernetesClustersToggleCloudVmAccessCreate()**](KubernetesApi.md#kubernetesClustersToggleCloudVmAccessCreate) | **POST** /api/kubernetes/clusters/{id}/toggle-cloud-vm-access/ |  |
| [**kubernetesClustersUdproutesCreate()**](KubernetesApi.md#kubernetesClustersUdproutesCreate) | **POST** /api/kubernetes/clusters/{cluster_id}/udproutes/ |  |
| [**kubernetesClustersUdproutesDestroy()**](KubernetesApi.md#kubernetesClustersUdproutesDestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUdproutesPartialUpdate()**](KubernetesApi.md#kubernetesClustersUdproutesPartialUpdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUdproutesRetrieve()**](KubernetesApi.md#kubernetesClustersUdproutesRetrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/udproutes/ |  |
| [**kubernetesClustersUdproutesRetrieve2()**](KubernetesApi.md#kubernetesClustersUdproutesRetrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUdproutesUpdate()**](KubernetesApi.md#kubernetesClustersUdproutesUpdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ |  |
| [**kubernetesClustersUpdate()**](KubernetesApi.md#kubernetesClustersUpdate) | **PUT** /api/kubernetes/clusters/{id}/ |  |
| [**kubernetesClustersUpgradeFeatureCreate()**](KubernetesApi.md#kubernetesClustersUpgradeFeatureCreate) | **POST** /api/kubernetes/clusters/{id}/upgrade-feature/ |  |


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

## `kubernetesClustersEligibleVmsRetrieve()`

```php
kubernetesClustersEligibleVmsRetrieve($id): \PidginHost\\Sdk\Model\EligibleVMsResponse
```



List cloud VMs eligible for connection to this cluster.

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
    $result = $apiInstance->kubernetesClustersEligibleVmsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersEligibleVmsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\EligibleVMsResponse**](../Model/EligibleVMsResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
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

## `kubernetesClustersLbFirewallCreate()`

```php
kubernetesClustersLbFirewallCreate($cluster_id, $lb_firewall_rule): \PidginHost\\Sdk\Model\LBFirewallRule
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
$lb_firewall_rule = new \PidginHost\\Sdk\Model\LBFirewallRule(); // \PidginHost\\Sdk\Model\LBFirewallRule

try {
    $result = $apiInstance->kubernetesClustersLbFirewallCreate($cluster_id, $lb_firewall_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersLbFirewallCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **lb_firewall_rule** | [**\PidginHost\\Sdk\Model\LBFirewallRule**](../Model/LBFirewallRule.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\LBFirewallRule**](../Model/LBFirewallRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersLbFirewallDestroy()`

```php
kubernetesClustersLbFirewallDestroy($cluster_id, $id)
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
    $apiInstance->kubernetesClustersLbFirewallDestroy($cluster_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersLbFirewallDestroy: ', $e->getMessage(), PHP_EOL;
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

## `kubernetesClustersLbFirewallList()`

```php
kubernetesClustersLbFirewallList($cluster_id, $page): \PidginHost\\Sdk\Model\PaginatedLBFirewallRuleList
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
    $result = $apiInstance->kubernetesClustersLbFirewallList($cluster_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersLbFirewallList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\PaginatedLBFirewallRuleList**](../Model/PaginatedLBFirewallRuleList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersLbFirewallPartialUpdate()`

```php
kubernetesClustersLbFirewallPartialUpdate($cluster_id, $id, $patched_lb_firewall_rule): \PidginHost\\Sdk\Model\LBFirewallRule
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
$patched_lb_firewall_rule = new \PidginHost\\Sdk\Model\PatchedLBFirewallRule(); // \PidginHost\\Sdk\Model\PatchedLBFirewallRule

try {
    $result = $apiInstance->kubernetesClustersLbFirewallPartialUpdate($cluster_id, $id, $patched_lb_firewall_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersLbFirewallPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **patched_lb_firewall_rule** | [**\PidginHost\\Sdk\Model\PatchedLBFirewallRule**](../Model/PatchedLBFirewallRule.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\LBFirewallRule**](../Model/LBFirewallRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersLbFirewallRetrieve()`

```php
kubernetesClustersLbFirewallRetrieve($cluster_id, $id): \PidginHost\\Sdk\Model\LBFirewallRule
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
    $result = $apiInstance->kubernetesClustersLbFirewallRetrieve($cluster_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersLbFirewallRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\LBFirewallRule**](../Model/LBFirewallRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kubernetesClustersLbFirewallUpdate()`

```php
kubernetesClustersLbFirewallUpdate($cluster_id, $id, $lb_firewall_rule): \PidginHost\\Sdk\Model\LBFirewallRule
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
$lb_firewall_rule = new \PidginHost\\Sdk\Model\LBFirewallRule(); // \PidginHost\\Sdk\Model\LBFirewallRule

try {
    $result = $apiInstance->kubernetesClustersLbFirewallUpdate($cluster_id, $id, $lb_firewall_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersLbFirewallUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **lb_firewall_rule** | [**\PidginHost\\Sdk\Model\LBFirewallRule**](../Model/LBFirewallRule.md)|  | [optional] |

### Return type

[**\PidginHost\\Sdk\Model\LBFirewallRule**](../Model/LBFirewallRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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

## `kubernetesClustersResourcePoolsNodesMetricsRetrieve()`

```php
kubernetesClustersResourcePoolsNodesMetricsRetrieve($cluster_id, $id, $pool_id): \PidginHost\\Sdk\Model\NodeMetricsResponse
```



Get real-time metrics for a node VM.

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
    $result = $apiInstance->kubernetesClustersResourcePoolsNodesMetricsRetrieve($cluster_id, $id, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsNodesMetricsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **pool_id** | **int**|  | |

### Return type

[**\PidginHost\\Sdk\Model\NodeMetricsResponse**](../Model/NodeMetricsResponse.md)

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

## `kubernetesClustersResourcePoolsNodesRrdRetrieve()`

```php
kubernetesClustersResourcePoolsNodesRrdRetrieve($cluster_id, $id, $pool_id): \PidginHost\\Sdk\Model\NodeRRDResponse
```



Get RRD (historical) metrics data for a node VM.

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
    $result = $apiInstance->kubernetesClustersResourcePoolsNodesRrdRetrieve($cluster_id, $id, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersResourcePoolsNodesRrdRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_id** | **int**|  | |
| **id** | **string**|  | |
| **pool_id** | **int**|  | |

### Return type

[**\PidginHost\\Sdk\Model\NodeRRDResponse**](../Model/NodeRRDResponse.md)

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

## `kubernetesClustersToggleCloudVmAccessCreate()`

```php
kubernetesClustersToggleCloudVmAccessCreate($id): \PidginHost\\Sdk\Model\ToggleCloudVMAccessResponse
```



Toggle cloud VM access for this cluster.

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
    $result = $apiInstance->kubernetesClustersToggleCloudVmAccessCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersToggleCloudVmAccessCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\\Sdk\Model\ToggleCloudVMAccessResponse**](../Model/ToggleCloudVMAccessResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
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

## `kubernetesClustersUpgradeFeatureCreate()`

```php
kubernetesClustersUpgradeFeatureCreate($id, $feature_upgrade_request): \PidginHost\\Sdk\Model\FeatureUpgradeResponse
```



Upgrade a cluster feature to the latest compatible version.

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
$feature_upgrade_request = new \PidginHost\\Sdk\Model\FeatureUpgradeRequest(); // \PidginHost\\Sdk\Model\FeatureUpgradeRequest

try {
    $result = $apiInstance->kubernetesClustersUpgradeFeatureCreate($id, $feature_upgrade_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesClustersUpgradeFeatureCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **feature_upgrade_request** | [**\PidginHost\\Sdk\Model\FeatureUpgradeRequest**](../Model/FeatureUpgradeRequest.md)|  | |

### Return type

[**\PidginHost\\Sdk\Model\FeatureUpgradeResponse**](../Model/FeatureUpgradeResponse.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
