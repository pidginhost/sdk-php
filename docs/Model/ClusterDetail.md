# ClusterDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**status** | [**\PidginHost\Sdk\Model\StatusA57Enum**](StatusA57Enum.md) |  | [readonly]
**name** | **string** |  | [optional]
**generation** | **string** |  | [readonly]
**cluster_type** | **string** |  | [readonly]
**kube_version** | **string** |  | [readonly]
**price_per_month** | **float** |  |
**price_per_hour** | **string** |  | [readonly]
**features** | [**\PidginHost\Sdk\Model\FeaturesEnum[]**](FeaturesEnum.md) |  | [optional]
**features_ready** | **bool** |  | [readonly]
**kubeconfig_valid_until** | **string** |  | [readonly]
**ipv4_address** | **string** |  | [readonly]
**ipv6_address** | **string** |  | [readonly]
**dual_stack** | **string** |  | [readonly]
**protected** | **bool** |  | [optional]
**talos_version** | **string** |  | [readonly]
**talos_upgrade_available** | **string** |  | [readonly]
**talos_next_version** | **string** |  | [readonly]
**storage_quota_gb** | **string** |  | [readonly]
**last_pool_used_bytes** | **string** |  | [readonly]
**last_storage_sync_at** | **string** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
