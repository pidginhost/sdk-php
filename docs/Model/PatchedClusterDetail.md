# PatchedClusterDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**status** | [**\PidginHost\Sdk\Model\ResourceStatusEnum**](ResourceStatusEnum.md) |  | [optional] [readonly]
**name** | **string** |  | [optional]
**generation** | **string** |  | [optional] [readonly]
**cluster_type** | **string** |  | [optional] [readonly]
**kube_version** | **string** |  | [optional] [readonly]
**price_per_month** | **string** |  | [optional]
**price_per_hour** | **float** |  | [optional] [readonly]
**features** | [**\PidginHost\Sdk\Model\FeaturesEnum[]**](FeaturesEnum.md) |  | [optional]
**features_ready** | **bool** |  | [optional] [readonly]
**kubeconfig_valid_until** | **string** |  | [optional] [readonly]
**ipv4_address** | **string** |  | [optional] [readonly]
**ipv6_address** | **string** |  | [optional] [readonly]
**dual_stack** | **bool** |  | [optional] [readonly]
**protected** | **bool** |  | [optional]
**talos_version** | **string** |  | [optional] [readonly]
**talos_upgrade_available** | **bool** |  | [optional] [readonly]
**talos_next_version** | **string** |  | [optional] [readonly]
**storage_quota_gb** | **int** |  | [optional] [readonly]
**last_pool_used_bytes** | **int** |  | [optional] [readonly]
**last_storage_sync_at** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
