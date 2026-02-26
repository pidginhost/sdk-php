# # ServerAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image** | **string** | ID or slug |
**package** | **string** | ID or slug |
**hostname** | **string** |  | [optional]
**project** | **string** |  | [optional]
**password** | **string** |  | [optional]
**ssh_pub_key** | **string** | New SSH key | [optional]
**ssh_pub_key_id** | **string** | ID or fingerprint | [optional]
**public_ip** | **string** | ID or slug | [optional]
**new_ipv4** | **bool** |  | [optional]
**public_ipv6** | **string** | ID or slug | [optional]
**new_ipv6** | **bool** |  | [optional]
**fw_rules_set** | **string** | ID or slug | [optional]
**fw_policy_in** | [**\PidginHost\\Sdk\Model\FwPolicyOutEnum**](FwPolicyOutEnum.md) |  | [optional]
**fw_policy_out** | [**\PidginHost\\Sdk\Model\FwPolicyOutEnum**](FwPolicyOutEnum.md) |  | [optional]
**private_network** | **string** | ID or slug | [optional]
**private_address** | **string** | Leave empty for auto-assign | [optional]
**extra_volume_product** | **string** | ID or slug | [optional]
**extra_volume_size** | **int** |  | [optional] [default to 0]
**no_network_acknowledged** | **bool** |  | [optional]
**enable_ha** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
