# # Domain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**domain** | **string** |  | [readonly]
**tld** | [**\PidginHost\\Sdk\Model\TLD**](TLD.md) |  | [readonly]
**idna** | **bool** | Domain name is encoded with IDN | [readonly]
**nameservers** | **string** | List of 2-5 name-servers separated by comma. | [optional]
**expiration_date** | **\DateTime** |  | [readonly]
**registration_date** | **\DateTime** |  | [readonly]
**service** | [**\PidginHost\\Sdk\Model\Service**](Service.md) |  | [readonly]
**idna_name** | **string** |  | [readonly]
**max_renew_years** | **int** |  | [readonly]
**service_status** | **string** | Service status | [readonly]
**contacts** | **mixed** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
