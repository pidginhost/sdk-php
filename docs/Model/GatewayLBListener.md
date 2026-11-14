# GatewayLBListener

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**protocol** | [**\PidginHost\Sdk\Model\GatewayForwardProtocolEnum**](GatewayForwardProtocolEnum.md) |  | [readonly]
**port** | **int** |  |
**mode** | [**\PidginHost\Sdk\Model\GatewayLBListenerModeEnum**](GatewayLBListenerModeEnum.md) |  |
**pool** | **int** | The backend pool of a tcp or udp listener; null for http. |
**allowed_sources** | **string[]** | Empty means any source. |
**enabled** | **bool** |  | [readonly]
**comment** | **string** |  | [readonly]
**changed_revision** | **int** |  | [readonly]
**pending** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
