# ClusterEncryptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | [**\PidginHost\Sdk\Model\EncryptionModeEnum**](EncryptionModeEnum.md) | Target encryption mode: no encryption, or WireGuard.  * &#x60;none&#x60; - none * &#x60;wireguard&#x60; - wireguard |
**acknowledge_workload_restart** | **bool** | Confirms the caller accepts that workloads must be restarted after the change. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
