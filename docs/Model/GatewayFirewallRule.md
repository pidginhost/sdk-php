# GatewayFirewallRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**position** | **int** |  | [readonly]
**action** | [**\PidginHost\Sdk\Model\FwPolicyOutEnum**](FwPolicyOutEnum.md) |  | [readonly]
**source** | [**\PidginHost\Sdk\Model\GatewayFirewallSource**](GatewayFirewallSource.md) |  | [readonly]
**destination** | [**\PidginHost\Sdk\Model\GatewayFirewallDestination**](GatewayFirewallDestination.md) |  | [readonly]
**protocol** | [**\PidginHost\Sdk\Model\GatewayFirewallProtocolEnum**](GatewayFirewallProtocolEnum.md) |  | [readonly]
**ports** | [**\PidginHost\Sdk\Model\GatewayPortRange[]**](GatewayPortRange.md) |  | [readonly]
**enabled** | **bool** |  | [readonly]
**comment** | **string** |  | [readonly]
**changed_revision** | **int** |  | [readonly]
**pending** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
