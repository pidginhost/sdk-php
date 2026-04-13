# # Server

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**hostname** | **string** |  | [optional]
**project** | **string** |  | [optional]
**image** | **string** |  | [readonly]
**package** | **string** |  | [readonly]
**cpus** | **int** |  | [readonly]
**memory** | **int** |  | [readonly]
**disk_size** | **int** |  | [readonly]
**generation** | **string** |  | [readonly]
**status** | [**\PidginHost\\Sdk\Model\StatusA57Enum**](StatusA57Enum.md) |  | [optional]
**destroy_protection** | **bool** | Prevents the server from being destroyed until disabled. | [readonly]
**ha_enabled** | **bool** | Enables Proxmox HA — automatic restart and migration on node failure. | [readonly]
**networks** | **array<string,mixed>** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
