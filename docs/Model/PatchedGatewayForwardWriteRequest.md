# PatchedGatewayForwardWriteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**protocol** | [**\PidginHost\Sdk\Model\GatewayForwardProtocolEnum**](GatewayForwardProtocolEnum.md) |  | [optional]
**public_ports** | [**\PidginHost\Sdk\Model\GatewayPortRangeRequest**](GatewayPortRangeRequest.md) |  | [optional]
**target** | [**\PidginHost\Sdk\Model\GatewayForwardTargetRequest**](GatewayForwardTargetRequest.md) |  | [optional]
**allowed_sources** | **string[]** | IPv4 networks; empty means any source. | [optional]
**preserve_client_ip** | **bool** | Only false is accepted for now. | [optional]
**enabled** | **bool** |  | [optional]
**comment** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
