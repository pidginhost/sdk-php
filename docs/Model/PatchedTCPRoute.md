# # PatchedTCPRoute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**name** | **string** |  | [optional]
**namespace** | **string** |  | [optional]
**port** | **int** | External port to expose (blocked: 22, 6443, 50000, 50001) | [optional]
**backend_service_name** | **string** | Name of the backend Kubernetes Service | [optional]
**backend_service_port** | **int** | Port of the backend Service | [optional]
**backend_namespace** | **string** | Namespace of the backend Service | [optional] [default to 'default']
**status_ready** | **bool** |  | [optional] [readonly]
**status_message** | **string** |  | [optional] [readonly]
**created** | **\DateTime** |  | [optional] [readonly]
**updated** | **\DateTime** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
