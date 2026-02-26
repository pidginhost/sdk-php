# # FirewallRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**direction** | [**\PidginHost\\Sdk\Model\DirectionEnum**](DirectionEnum.md) |  |
**action** | [**\PidginHost\\Sdk\Model\FwPolicyOutEnum**](FwPolicyOutEnum.md) |  |
**protocol** | **string** |  | [optional]
**source** | **string** | single IP, range (20.34.101.207-201.3.9.99) or comma separated list | [optional]
**sport** | **string** | numbers (0-65535), range (\&quot;\\d+:\\d+\&quot;, like \&quot;80:85\&quot;), comma separated list | [optional]
**destination** | **string** | single IP, range (20.34.101.207-201.3.9.99) or comma separated list | [optional]
**dport** | **string** | numbers (0-65535), range (\&quot;\\d+:\\d+\&quot;, like \&quot;80:85\&quot;), comma separated list | [optional]
**enabled** | **bool** |  | [optional]
**position** | **int** |  | [optional]
**has_error** | **bool** |  | [readonly]
**error_message** | **string** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
