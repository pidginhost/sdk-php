# ClusterEncryption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** |  | [readonly]
**status** | [**\PidginHost\Sdk\Model\ClusterEncryptionStatusEnum**](ClusterEncryptionStatusEnum.md) |  | [readonly]
**changed_at** | **string** |  | [readonly]
**verified_at** | **string** |  | [readonly]
**restart_required** | **bool** |  | [readonly]
**restart_required_at** | **string** |  | [readonly]
**restart_checked_at** | **string** |  | [readonly]
**stale_pod_count** | **int** |  | [readonly]
**reason** | **string** |  | [readonly]
**error** | **string** |  | [readonly]
**per_node** | **array<string,mixed>** | Evidence from the NEWEST operation, which may not have any yet.  A freshly queued operation carries an empty &#x60;&#x60;verification_result&#x60;&#x60;, so this blanks the moment a toggle is admitted while &#x60;&#x60;mode&#x60;&#x60; and &#x60;&#x60;status&#x60;&#x60; still describe the last verified state. An empty map therefore means \&quot;no evidence from the current operation\&quot;, NEVER \&quot;verification failed\&quot; -- read &#x60;&#x60;operation.status&#x60;&#x60; to tell them apart. Showing the previous operation&#39;s rows instead would label evidence for one mode as evidence for another. | [readonly]
**operation** | [**\PidginHost\Sdk\Model\ClusterEncryptionOperation**](ClusterEncryptionOperation.md) |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
