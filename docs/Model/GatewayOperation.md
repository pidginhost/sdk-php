# GatewayOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [readonly]
**kind** | [**\PidginHost\Sdk\Model\GatewayOperationKindEnum**](GatewayOperationKindEnum.md) |  | [readonly]
**status** | [**\PidginHost\Sdk\Model\GatewayOperationStatusEnum**](GatewayOperationStatusEnum.md) |  | [readonly]
**network** | **int** |  | [readonly]
**revision** | **int** |  | [readonly]
**started_at** | **string** |  | [readonly]
**deadline_at** | **string** |  | [readonly]
**completed_at** | **string** |  | [readonly]
**servers** | **int[]** |  | [readonly]
**outcomes** | [**array<string,\PidginHost\Sdk\Model\GatewayRouteOutcome>**](GatewayRouteOutcome.md) |  | [readonly]
**reason** | **string** | Why the operation failed; empty unless it did. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
