# NodeOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**kind** | [**\PidginHost\Sdk\Model\NodeOperationKindEnum**](NodeOperationKindEnum.md) |  | [readonly]
**source** | [**\PidginHost\Sdk\Model\NodeOperationSourceEnum**](NodeOperationSourceEnum.md) |  | [readonly]
**target_hostname** | **string** |  | [readonly]
**status** | [**\PidginHost\Sdk\Model\NodeOperationStatusEnum**](NodeOperationStatusEnum.md) |  | [readonly]
**reason** | **string** |  | [readonly]
**message** | **string** |  | [readonly]
**bypass_pdb** | **bool** |  | [readonly]
**delete_unmanaged_pods** | **bool** |  | [readonly]
**local_data_loss_accepted** | **bool** |  | [readonly]
**bypass_pdb_confirmed_at** | **string** |  | [readonly]
**unmanaged_pods_confirmed_at** | **string** |  | [readonly]
**actor_label** | **string** | Who requested the operation (user email or staff name). Never token material. | [readonly]
**created_at** | **string** |  | [readonly]
**updated_at** | **string** |  | [readonly]
**finished_at** | **string** |  | [readonly]
**allowed_actions** | **string[]** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
