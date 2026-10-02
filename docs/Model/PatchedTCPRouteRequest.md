# PatchedTCPRouteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**namespace** | **string** |  | [optional]
**port** | **int** | External port to expose (blocked: 22, 6443, 50000, 50001) | [optional]
**backend_service_name** | **string** | Name of the backend Kubernetes Service | [optional]
**backend_service_port** | **int** | Port of the backend Service | [optional]
**backend_namespace** | **string** | Namespace of the backend Service | [optional] [default to 'default']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
