# # TCPRoute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**name** | **string** |  |
**namespace** | **string** |  | [optional]
**port** | **int** | External port to expose (blocked: 22, 6443, 50000, 50001) |
**backend_service_name** | **string** | Name of the backend Kubernetes Service |
**backend_service_port** | **int** | Port of the backend Service |
**backend_namespace** | **string** | Namespace of the backend Service | [optional] [default to 'default']
**status_ready** | **bool** |  | [readonly]
**status_message** | **string** |  | [readonly]
**created** | **\DateTime** |  | [readonly]
**updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
