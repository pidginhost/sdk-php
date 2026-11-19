# Bucket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing** | [**\PidginHost\Sdk\Model\ResourceBilling**](ResourceBilling.md) |  | [readonly]
**id** | **int** |  | [readonly]
**name** | **string** |  | [readonly]
**full_name** | **string** |  | [readonly] [default to '']
**quota_gb** | **int** |  | [readonly]
**used_bytes** | **int** |  | [readonly]
**object_count** | **int** |  | [readonly]
**public_read** | **bool** |  | [readonly]
**destroy_protection** | **bool** | Prevents the bucket from being deleted until disabled. | [readonly]
**status** | [**\PidginHost\Sdk\Model\ResourceStatusEnum**](ResourceStatusEnum.md) |  | [readonly] [default to ResourceStatusEnum::PENDING]
**endpoint** | **string** |  | [readonly]
**region** | **string** |  | [readonly]
**created** | **string** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
