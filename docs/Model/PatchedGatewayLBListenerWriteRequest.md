# PatchedGatewayLBListenerWriteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**protocol** | [**\PidginHost\Sdk\Model\GatewayForwardProtocolEnum**](GatewayForwardProtocolEnum.md) |  | [optional]
**port** | **int** |  | [optional]
**mode** | [**\PidginHost\Sdk\Model\GatewayLBListenerModeEnum**](GatewayLBListenerModeEnum.md) | tcp, udp or http; https is not available yet.  * &#x60;tcp&#x60; - tcp * &#x60;udp&#x60; - udp * &#x60;http&#x60; - http * &#x60;https&#x60; - https | [optional]
**pool** | **int** | A backend pool&#39;s id; tcp and udp only. | [optional]
**allowed_sources** | **string[]** | IPv4 and IPv6 networks; empty means any source. | [optional]
**enabled** | **bool** |  | [optional]
**comment** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
