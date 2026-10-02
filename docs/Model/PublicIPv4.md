# PublicIPv4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**slug** | **string** |  | [readonly]
**address** | **string** |  | [readonly]
**gateway** | **string** |  | [readonly]
**prefix** | **int** |  | [readonly]
**attached** | **bool** |  | [readonly]
**server** | **string** | Hostname of the server this address is attached to. Empty when it is not attached. | [readonly]
**server_id** | **int** | ID of the attached server, as used by /api/cloud/servers/{id}/. Null when the address is not attached to a cloud server. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
