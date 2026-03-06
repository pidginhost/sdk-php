# # PatchedDomain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**domain** | **string** |  | [optional] [readonly]
**tld** | [**\PidginHost\\Sdk\Model\TLD**](TLD.md) |  | [optional] [readonly]
**idna** | **bool** | Domain name is encoded with IDN | [optional] [readonly]
**nameservers** | **string** | List of 2-5 name-servers separated by comma. | [optional]
**expiration_date** | **\DateTime** |  | [optional] [readonly]
**registration_date** | **\DateTime** |  | [optional] [readonly]
**service** | [**\PidginHost\\Sdk\Model\Service**](Service.md) |  | [optional] [readonly]
**idna_name** | **string** |  | [optional] [readonly]
**max_renew_years** | **int** |  | [optional] [readonly]
**service_status** | **string** | Service status | [optional] [readonly]
**contacts** | **mixed** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
