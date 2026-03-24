# # DNSRecordCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Record hostname (use &#39;@&#39; or leave empty for zone apex). |
**ttl** | **int** | Time to live in seconds. |
**type** | [**\PidginHost\\Sdk\Model\DNSRecordCreateTypeEnum**](DNSRecordCreateTypeEnum.md) | DNS record type.  * &#x60;A&#x60; - A * &#x60;AAAA&#x60; - AAAA * &#x60;TYPE257&#x60; - TYPE257 * &#x60;CNAME&#x60; - CNAME * &#x60;MX&#x60; - MX * &#x60;SRV&#x60; - SRV * &#x60;TXT&#x60; - TXT |
**address** | **string** | IPv4/IPv6 address (A/AAAA). | [optional]
**cname** | **string** | Canonical name (CNAME). | [optional]
**exchange** | **string** | Mail exchange host (MX). | [optional]
**preference** | **int** | MX preference / priority. | [optional]
**txtdata** | **string** | TXT record data. | [optional]
**unencoded** | **string** | Unencoded TXT value. | [optional]
**target** | **string** | SRV target host. | [optional]
**priority** | **int** | SRV priority. | [optional]
**weight** | **int** | SRV weight. | [optional]
**port** | **int** | SRV port. | [optional]
**flag** | **int** | CAA flag (TYPE257). | [optional]
**tag** | **string** | CAA tag (TYPE257). | [optional]
**value** | **string** | CAA value (TYPE257). | [optional]
**line** | **int** | Line number of existing record to edit. Omit to add a new record. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
