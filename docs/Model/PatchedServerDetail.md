# # PatchedServerDetail

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
**volumes** | [**\PidginHost\\Sdk\Model\Volume[]**](Volume.md) |  | [optional] [readonly]
**networks** | **array<string,mixed>** |  | [optional] [readonly]
**password** | **string** |  | [optional]
**status** | [**\PidginHost\\Sdk\Model\StatusA57Enum**](StatusA57Enum.md) |  | [optional] [readonly]
**username** | **string** |  | [optional] [readonly]
**destroy_protection** | **bool** | Prevents the server from being destroyed until disabled. | [optional] [readonly]
**ha_enabled** | **bool** | Enables Proxmox HA — automatic restart and migration on node failure. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
