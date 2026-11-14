# PatchedServerDetailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hostname** | **string** | Renaming also moves reverse DNS still on the old name. The server takes the new name at its next reboot from the panel or API, which also creates new SSH host keys and resets the login password and SSH keys to the ones saved here. | [optional]
**project** | **string** |  | [optional]
**password** | **string** |  | [optional]
**ssh_pub_key** | **string** | Public key to apply for SSH login. Applying a non-empty key regenerates cloud-init and reboots a running server. Clearing removes the key from future cloud-init data, but does not revoke keys already in the guest. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
