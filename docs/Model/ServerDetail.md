# ServerDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**hostname** | **string** |  | [readonly]
**project** | **string** |  | [optional]
**image** | **string** |  | [readonly]
**package** | **string** |  | [readonly]
**cpus** | **int** |  | [readonly]
**memory** | **int** |  | [readonly]
**disk_size** | **int** |  | [readonly]
**generation** | **string** |  | [readonly]
**machine** | **array<string,mixed>** |  | [readonly]
**volumes** | [**\PidginHost\Sdk\Model\Volume[]**](Volume.md) |  | [readonly]
**networks** | **array<string,mixed>** |  | [readonly]
**floating_ips** | [**\PidginHost\Sdk\Model\FloatingIPSummary[]**](FloatingIPSummary.md) |  | [readonly]
**password** | **string** |  | [optional]
**ssh_pub_key** | **string** | Public key to apply for SSH login. Applying a non-empty key regenerates cloud-init and reboots a running server. Clearing removes the key from future cloud-init data, but does not revoke keys already in the guest. | [optional]
**status** | [**\PidginHost\Sdk\Model\ResourceStatusEnum**](ResourceStatusEnum.md) |  | [readonly]
**username** | **string** |  | [readonly]
**destroy_protection** | **bool** | Prevents the server from being destroyed until disabled. | [readonly]
**ha_enabled** | **bool** | Enables Proxmox HA — automatic restart and migration on node failure. | [readonly]
**custom_os** | **bool** | Customer installed their own OS from an ISO; cloud-init features no longer apply | [readonly]
**rescue_mode** | **bool** |  | [readonly]
**boot_iso** | **string** |  | [readonly]
**rescue_supported** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
