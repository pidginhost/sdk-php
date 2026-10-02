# PatchedHTTPRouteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**namespace** | **string** |  | [optional]
**hostnames** | **string[]** | List of hostnames to route (e.g., [\&quot;example.com\&quot;, \&quot;www.example.com\&quot;]) | [optional]
**backend_service_name** | **string** | Name of the backend Kubernetes Service | [optional]
**backend_service_port** | **int** | Port of the backend Service | [optional]
**backend_namespace** | **string** | Namespace of the backend Service | [optional] [default to 'default']
**path_prefix** | **string** | Path prefix to match (default: /) | [optional] [default to '/']
**enable_tls** | **bool** | Enable TLS termination with automatic certificate issuance | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
