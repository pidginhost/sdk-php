# GatewayHealthCheckWriteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\PidginHost\Sdk\Model\GatewayHealthCheckTypeEnum**](GatewayHealthCheckTypeEnum.md) |  | [optional]
**path** | **string** | http only. | [optional]
**status_min** | **int** | http only. | [optional]
**status_max** | **int** | http only. | [optional]
**interval_s** | **int** |  | [optional]
**timeout_s** | **int** | Below interval_s. | [optional]
**healthy_threshold** | **int** |  | [optional]
**unhealthy_threshold** | **int** |  | [optional]
**port** | **int** | Null checks each server&#39;s own port. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
