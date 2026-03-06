# # UDPRoute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**name** | **string** |  |
**namespace** | **string** |  | [optional]
**port** | **int** | External port to expose |
**backend_service_name** | **string** | Name of the backend Kubernetes Service |
**backend_service_port** | **int** | Port of the backend Service |
**backend_namespace** | **string** | Namespace of the backend Service | [optional] [default to 'default']
**status_ready** | **bool** |  | [readonly]
**status_message** | **string** |  | [readonly]
**created** | **\DateTime** |  | [readonly]
**updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
