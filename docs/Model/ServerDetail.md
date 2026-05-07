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
**password** | **string** |  | [optional]
**status** | [**\PidginHost\Sdk\Model\StatusA57Enum**](StatusA57Enum.md) |  | [readonly]
**username** | **string** |  | [readonly]
**destroy_protection** | **bool** | Prevents the server from being destroyed until disabled. | [readonly]
**ha_enabled** | **bool** | Enables Proxmox HA — automatic restart and migration on node failure. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
