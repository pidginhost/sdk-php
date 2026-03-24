# # PatchedLBFirewallRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**direction** | [**\PidginHost\\Sdk\Model\LBFirewallRuleDirectionEnum**](LBFirewallRuleDirectionEnum.md) |  | [optional]
**action** | [**\PidginHost\\Sdk\Model\LBFirewallRuleActionEnum**](LBFirewallRuleActionEnum.md) |  | [optional]
**protocol** | **string** | tcp, udp, icmp, etc. | [optional]
**source** | **string** | IP address or CIDR | [optional]
**sport** | **string** | Port or range (e.g., 1024-65535) | [optional]
**destination** | **string** | IP address or CIDR | [optional]
**dport** | **string** | Port or range (e.g., 80, 8000-9000) | [optional]
**comment** | **string** |  | [optional]
**enabled** | **bool** |  | [optional]
**position** | **int** | Rule order (lower &#x3D; higher priority) | [optional]
**created** | **string** |  | [optional] [readonly]
**updated** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
