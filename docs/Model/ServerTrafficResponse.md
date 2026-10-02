# ServerTrafficResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**year** | **int** |  |
**month** | **int** |  |
**as_of** | **\DateTime** |  |
**status** | **string** |  |
**bytes_in** | **int** |  |
**bytes_out** | **int** |  |
**bytes_total** | **int** |  |
**included_tb** | **int** |  |
**used_units** | **int** |  |
**used_tb** | **string** | Usage rounded up to six decimal places; bytes_total is exact. |
**billable_bytes** | **int** | Of bytes_total, the part that may be charged. |
**billable_units** | **int** |  |
**billable_tb** | **string** | Billable usage rounded up to six decimal places; billable_bytes is exact. |
**billable_from** | **\DateTime** | First fully billable day, when one date describes the usage. May fall after the reported month. Null when all usage is billable or streams have different boundaries; use billable_bytes for the billable total. |
**charged_tb** | **int** |  |
**charged_amount** | **string** |  |
**price_per_tb** | **string** |  |
**currency** | **string** |  |
**unit_bytes** | **int** |  |
**remaining_bytes** | **int** |  |
**last_sample_at** | **\DateTime** |  |
**daily** | **array<string,mixed>[]** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
