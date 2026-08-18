# PatchedServerDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**hostname** | **string** |  | [optional] [readonly]
**project** | **string** |  | [optional]
**image** | **string** |  | [optional] [readonly]
**package** | **string** |  | [optional] [readonly]
**cpus** | **int** |  | [optional] [readonly]
**memory** | **int** |  | [optional] [readonly]
**disk_size** | **int** |  | [optional] [readonly]
**generation** | **string** |  | [optional] [readonly]
**machine** | **array<string,mixed>** |  | [optional] [readonly]
**volumes** | [**\PidginHost\Sdk\Model\Volume[]**](Volume.md) |  | [optional] [readonly]
**networks** | **array<string,mixed>** |  | [optional] [readonly]
**floating_ips** | [**\PidginHost\Sdk\Model\FloatingIPSummary[]**](FloatingIPSummary.md) |  | [optional] [readonly]
**password** | **string** |  | [optional]
**ssh_pub_key** | **string** | Public key to apply for SSH login. Applying a non-empty key regenerates cloud-init and reboots a running server. Clearing removes the key from future cloud-init data, but does not revoke keys already in the guest. | [optional]
**status** | [**\PidginHost\Sdk\Model\ResourceStatusEnum**](ResourceStatusEnum.md) |  | [optional] [readonly]
**username** | **string** |  | [optional] [readonly]
**destroy_protection** | **bool** | Prevents the server from being destroyed until disabled. | [optional] [readonly]
**ha_enabled** | **bool** | Enables Proxmox HA — automatic restart and migration on node failure. | [optional] [readonly]
**custom_os** | **bool** | Customer installed their own OS from an ISO; cloud-init features no longer apply | [optional] [readonly]
**rescue_mode** | **bool** |  | [optional] [readonly]
**boot_iso** | **string** |  | [optional] [readonly]
**rescue_supported** | **bool** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
