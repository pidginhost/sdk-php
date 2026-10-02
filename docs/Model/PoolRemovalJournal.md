# PoolRemovalJournal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**kind** | [**\PidginHost\Sdk\Model\PoolRemovalJournalKindEnum**](PoolRemovalJournalKindEnum.md) |  | [readonly]
**status** | [**\PidginHost\Sdk\Model\PoolRemovalJournalStatusEnum**](PoolRemovalJournalStatusEnum.md) |  | [readonly]
**reason** | **string** |  | [readonly]
**message** | **string** |  | [readonly]
**requested_pool_size** | **int** |  | [readonly]
**local_data_loss_accepted** | **bool** |  | [readonly]
**actor_label** | **string** | Who requested the removal (user email or staff name). Never token material. | [readonly]
**created_at** | **string** |  | [readonly]
**updated_at** | **string** |  | [readonly]
**finished_at** | **string** |  | [readonly]
**items** | [**\PidginHost\Sdk\Model\PoolRemovalItem[]**](PoolRemovalItem.md) |  | [readonly]
**allowed_actions** | **string[]** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
