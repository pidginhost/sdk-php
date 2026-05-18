# ClusterAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cluster_type** | [**\PidginHost\Sdk\Model\ClusterTypeEnum**](ClusterTypeEnum.md) |  |
**name** | **string** |  | [optional]
**resource_pool_package** | **string** | ID or slug |
**resource_pool_size** | **int** |  | [optional]
**kube_version** | [**\PidginHost\Sdk\Model\KubeVersionEnum**](KubeVersionEnum.md) |  | [optional]
**features** | [**\PidginHost\Sdk\Model\FeaturesEnum[]**](FeaturesEnum.md) |  | [optional]
**enable_gateway_api** | **bool** |  | [optional]
**dual_stack** | **bool** | Enable IPv6 dual-stack for pods, services, and the cluster private network. Available only when the platform has K8S_DUAL_STACK_ENABLED. Cannot be changed after provisioning. | [optional] [default to false]
**generation** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
