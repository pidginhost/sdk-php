# OpenAPIClient-php

The Pidgin Host API allows you to manage Services and resources within the Pidgin Host cloud in a simple, programmatic way using conventional HTTP requests.
All of the functionality that you are familiar with in the Pidgin Host control panel is also available through the API, allowing you to script the complex actions that your situation requires.

For more information, please visit [https://www.pidginhost.com](https://www.pidginhost.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/pidginhost/sdk-php.git"
    }
  ],
  "require": {
    "pidginhost/sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: cookieAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new PidginHost\\Sdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->accountCompaniesList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountCompaniesList: ', $e->getMessage(), PHP_EOL;
}

```

## Quickstart

```php
<?php
require_once 'vendor/autoload.php';

use PidginHost\Sdk\PidginHost;

$client = new PidginHost(getenv('PIDGINHOST_API_TOKEN'));

// List all servers
$servers = $client->cloud->cloudServersList();
foreach ($servers as $server) {
    echo $server->getName() . "\n";
}

// List SSH keys
$keys = $client->account->accountSshKeysList();
```

The `PidginHost` client exposes these API groups:
- `$client->account` -- account, companies, SSH keys
- `$client->cloud` -- servers, images, volumes, IPs, firewalls, networks
- `$client->domain` -- domains, registrants, TLDs
- `$client->kubernetes` -- clusters, resource pools, routes

## API Endpoints

All URIs are relative to *https://www.pidginhost.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**accountCompaniesList**](docs/Api/AccountApi.md#accountcompanieslist) | **GET** /api/account/companies/ | 
*AccountApi* | [**accountCompaniesList2**](docs/Api/AccountApi.md#accountcompanieslist2) | **GET** /api/v1/account/companies/ | 
*AccountApi* | [**accountCompaniesPartialUpdate**](docs/Api/AccountApi.md#accountcompaniespartialupdate) | **PATCH** /api/account/companies/{id}/ | 
*AccountApi* | [**accountCompaniesPartialUpdate2**](docs/Api/AccountApi.md#accountcompaniespartialupdate2) | **PATCH** /api/v1/account/companies/{id}/ | 
*AccountApi* | [**accountCompaniesRetrieve**](docs/Api/AccountApi.md#accountcompaniesretrieve) | **GET** /api/account/companies/{id}/ | 
*AccountApi* | [**accountCompaniesRetrieve2**](docs/Api/AccountApi.md#accountcompaniesretrieve2) | **GET** /api/v1/account/companies/{id}/ | 
*AccountApi* | [**accountCompaniesUpdate**](docs/Api/AccountApi.md#accountcompaniesupdate) | **PUT** /api/account/companies/{id}/ | 
*AccountApi* | [**accountCompaniesUpdate2**](docs/Api/AccountApi.md#accountcompaniesupdate2) | **PUT** /api/v1/account/companies/{id}/ | 
*AccountApi* | [**accountProfilePartialUpdate**](docs/Api/AccountApi.md#accountprofilepartialupdate) | **PATCH** /api/account/profile | 
*AccountApi* | [**accountProfilePartialUpdate2**](docs/Api/AccountApi.md#accountprofilepartialupdate2) | **PATCH** /api/v1/account/profile | 
*AccountApi* | [**accountProfileRetrieve**](docs/Api/AccountApi.md#accountprofileretrieve) | **GET** /api/account/profile | 
*AccountApi* | [**accountProfileRetrieve2**](docs/Api/AccountApi.md#accountprofileretrieve2) | **GET** /api/v1/account/profile | 
*AccountApi* | [**accountProfileUpdate**](docs/Api/AccountApi.md#accountprofileupdate) | **PUT** /api/account/profile | 
*AccountApi* | [**accountProfileUpdate2**](docs/Api/AccountApi.md#accountprofileupdate2) | **PUT** /api/v1/account/profile | 
*AccountApi* | [**accountSshKeysCreate**](docs/Api/AccountApi.md#accountsshkeyscreate) | **POST** /api/account/ssh-keys/ | 
*AccountApi* | [**accountSshKeysCreate2**](docs/Api/AccountApi.md#accountsshkeyscreate2) | **POST** /api/v1/account/ssh-keys/ | 
*AccountApi* | [**accountSshKeysDestroy**](docs/Api/AccountApi.md#accountsshkeysdestroy) | **DELETE** /api/account/ssh-keys/{id}/ | 
*AccountApi* | [**accountSshKeysDestroy2**](docs/Api/AccountApi.md#accountsshkeysdestroy2) | **DELETE** /api/v1/account/ssh-keys/{id}/ | 
*AccountApi* | [**accountSshKeysList**](docs/Api/AccountApi.md#accountsshkeyslist) | **GET** /api/account/ssh-keys/ | 
*AccountApi* | [**accountSshKeysList2**](docs/Api/AccountApi.md#accountsshkeyslist2) | **GET** /api/v1/account/ssh-keys/ | 
*AccountApi* | [**accountSshKeysPartialUpdate**](docs/Api/AccountApi.md#accountsshkeyspartialupdate) | **PATCH** /api/account/ssh-keys/{id}/ | 
*AccountApi* | [**accountSshKeysPartialUpdate2**](docs/Api/AccountApi.md#accountsshkeyspartialupdate2) | **PATCH** /api/v1/account/ssh-keys/{id}/ | 
*AccountApi* | [**accountSshKeysRetrieve**](docs/Api/AccountApi.md#accountsshkeysretrieve) | **GET** /api/account/ssh-keys/{id}/ | 
*AccountApi* | [**accountSshKeysRetrieve2**](docs/Api/AccountApi.md#accountsshkeysretrieve2) | **GET** /api/v1/account/ssh-keys/{id}/ | 
*AccountApi* | [**accountSshKeysUpdate**](docs/Api/AccountApi.md#accountsshkeysupdate) | **PUT** /api/account/ssh-keys/{id}/ | 
*AccountApi* | [**accountSshKeysUpdate2**](docs/Api/AccountApi.md#accountsshkeysupdate2) | **PUT** /api/v1/account/ssh-keys/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetCreate**](docs/Api/CloudApi.md#cloudfirewallrulessetcreate) | **POST** /api/cloud/firewall-rules-set/ | 
*CloudApi* | [**cloudFirewallRulesSetCreate2**](docs/Api/CloudApi.md#cloudfirewallrulessetcreate2) | **POST** /api/v1/cloud/firewall-rules-set/ | 
*CloudApi* | [**cloudFirewallRulesSetDestroy**](docs/Api/CloudApi.md#cloudfirewallrulessetdestroy) | **DELETE** /api/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetDestroy2**](docs/Api/CloudApi.md#cloudfirewallrulessetdestroy2) | **DELETE** /api/v1/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetList**](docs/Api/CloudApi.md#cloudfirewallrulessetlist) | **GET** /api/cloud/firewall-rules-set/ | 
*CloudApi* | [**cloudFirewallRulesSetList2**](docs/Api/CloudApi.md#cloudfirewallrulessetlist2) | **GET** /api/v1/cloud/firewall-rules-set/ | 
*CloudApi* | [**cloudFirewallRulesSetPartialUpdate**](docs/Api/CloudApi.md#cloudfirewallrulessetpartialupdate) | **PATCH** /api/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetPartialUpdate2**](docs/Api/CloudApi.md#cloudfirewallrulessetpartialupdate2) | **PATCH** /api/v1/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRetrieve**](docs/Api/CloudApi.md#cloudfirewallrulessetretrieve) | **GET** /api/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRetrieve2**](docs/Api/CloudApi.md#cloudfirewallrulessetretrieve2) | **GET** /api/v1/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesCreate**](docs/Api/CloudApi.md#cloudfirewallrulessetrulescreate) | **POST** /api/cloud/firewall-rules-set/{rules_set_id}/rules/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesCreate2**](docs/Api/CloudApi.md#cloudfirewallrulessetrulescreate2) | **POST** /api/v1/cloud/firewall-rules-set/{rules_set_id}/rules/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesDestroy**](docs/Api/CloudApi.md#cloudfirewallrulessetrulesdestroy) | **DELETE** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesDestroy2**](docs/Api/CloudApi.md#cloudfirewallrulessetrulesdestroy2) | **DELETE** /api/v1/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesList**](docs/Api/CloudApi.md#cloudfirewallrulessetruleslist) | **GET** /api/cloud/firewall-rules-set/{rules_set_id}/rules/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesList2**](docs/Api/CloudApi.md#cloudfirewallrulessetruleslist2) | **GET** /api/v1/cloud/firewall-rules-set/{rules_set_id}/rules/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesPartialUpdate**](docs/Api/CloudApi.md#cloudfirewallrulessetrulespartialupdate) | **PATCH** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesPartialUpdate2**](docs/Api/CloudApi.md#cloudfirewallrulessetrulespartialupdate2) | **PATCH** /api/v1/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesRetrieve**](docs/Api/CloudApi.md#cloudfirewallrulessetrulesretrieve) | **GET** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesRetrieve2**](docs/Api/CloudApi.md#cloudfirewallrulessetrulesretrieve2) | **GET** /api/v1/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesUpdate**](docs/Api/CloudApi.md#cloudfirewallrulessetrulesupdate) | **PUT** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesUpdate2**](docs/Api/CloudApi.md#cloudfirewallrulessetrulesupdate2) | **PUT** /api/v1/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetUpdate**](docs/Api/CloudApi.md#cloudfirewallrulessetupdate) | **PUT** /api/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetUpdate2**](docs/Api/CloudApi.md#cloudfirewallrulessetupdate2) | **PUT** /api/v1/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudImagesList**](docs/Api/CloudApi.md#cloudimageslist) | **GET** /api/cloud/images/ | 
*CloudApi* | [**cloudImagesList2**](docs/Api/CloudApi.md#cloudimageslist2) | **GET** /api/v1/cloud/images/ | 
*CloudApi* | [**cloudImagesRetrieve**](docs/Api/CloudApi.md#cloudimagesretrieve) | **GET** /api/cloud/images/{id}/ | 
*CloudApi* | [**cloudImagesRetrieve2**](docs/Api/CloudApi.md#cloudimagesretrieve2) | **GET** /api/v1/cloud/images/{id}/ | 
*CloudApi* | [**cloudIpv4Create**](docs/Api/CloudApi.md#cloudipv4create) | **POST** /api/cloud/ipv4/ | 
*CloudApi* | [**cloudIpv4Create2**](docs/Api/CloudApi.md#cloudipv4create2) | **POST** /api/v1/cloud/ipv4/ | 
*CloudApi* | [**cloudIpv4Destroy**](docs/Api/CloudApi.md#cloudipv4destroy) | **DELETE** /api/cloud/ipv4/{id}/ | 
*CloudApi* | [**cloudIpv4Destroy2**](docs/Api/CloudApi.md#cloudipv4destroy2) | **DELETE** /api/v1/cloud/ipv4/{id}/ | 
*CloudApi* | [**cloudIpv4DetachCreate**](docs/Api/CloudApi.md#cloudipv4detachcreate) | **POST** /api/cloud/ipv4/{id}/detach/ | 
*CloudApi* | [**cloudIpv4DetachCreate2**](docs/Api/CloudApi.md#cloudipv4detachcreate2) | **POST** /api/v1/cloud/ipv4/{id}/detach/ | 
*CloudApi* | [**cloudIpv4List**](docs/Api/CloudApi.md#cloudipv4list) | **GET** /api/cloud/ipv4/ | 
*CloudApi* | [**cloudIpv4List2**](docs/Api/CloudApi.md#cloudipv4list2) | **GET** /api/v1/cloud/ipv4/ | 
*CloudApi* | [**cloudIpv4Retrieve**](docs/Api/CloudApi.md#cloudipv4retrieve) | **GET** /api/cloud/ipv4/{id}/ | 
*CloudApi* | [**cloudIpv4Retrieve2**](docs/Api/CloudApi.md#cloudipv4retrieve2) | **GET** /api/v1/cloud/ipv4/{id}/ | 
*CloudApi* | [**cloudIpv6Create**](docs/Api/CloudApi.md#cloudipv6create) | **POST** /api/cloud/ipv6/ | 
*CloudApi* | [**cloudIpv6Create2**](docs/Api/CloudApi.md#cloudipv6create2) | **POST** /api/v1/cloud/ipv6/ | 
*CloudApi* | [**cloudIpv6Destroy**](docs/Api/CloudApi.md#cloudipv6destroy) | **DELETE** /api/cloud/ipv6/{id}/ | 
*CloudApi* | [**cloudIpv6Destroy2**](docs/Api/CloudApi.md#cloudipv6destroy2) | **DELETE** /api/v1/cloud/ipv6/{id}/ | 
*CloudApi* | [**cloudIpv6DetachCreate**](docs/Api/CloudApi.md#cloudipv6detachcreate) | **POST** /api/cloud/ipv6/{id}/detach/ | 
*CloudApi* | [**cloudIpv6DetachCreate2**](docs/Api/CloudApi.md#cloudipv6detachcreate2) | **POST** /api/v1/cloud/ipv6/{id}/detach/ | 
*CloudApi* | [**cloudIpv6List**](docs/Api/CloudApi.md#cloudipv6list) | **GET** /api/cloud/ipv6/ | 
*CloudApi* | [**cloudIpv6List2**](docs/Api/CloudApi.md#cloudipv6list2) | **GET** /api/v1/cloud/ipv6/ | 
*CloudApi* | [**cloudIpv6Retrieve**](docs/Api/CloudApi.md#cloudipv6retrieve) | **GET** /api/cloud/ipv6/{id}/ | 
*CloudApi* | [**cloudIpv6Retrieve2**](docs/Api/CloudApi.md#cloudipv6retrieve2) | **GET** /api/v1/cloud/ipv6/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksAddServerCreate**](docs/Api/CloudApi.md#cloudprivatenetworksaddservercreate) | **POST** /api/cloud/private-networks/{id}/add-server/ | 
*CloudApi* | [**cloudPrivateNetworksAddServerCreate2**](docs/Api/CloudApi.md#cloudprivatenetworksaddservercreate2) | **POST** /api/v1/cloud/private-networks/{id}/add-server/ | 
*CloudApi* | [**cloudPrivateNetworksCreate**](docs/Api/CloudApi.md#cloudprivatenetworkscreate) | **POST** /api/cloud/private-networks/ | 
*CloudApi* | [**cloudPrivateNetworksCreate2**](docs/Api/CloudApi.md#cloudprivatenetworkscreate2) | **POST** /api/v1/cloud/private-networks/ | 
*CloudApi* | [**cloudPrivateNetworksDestroy**](docs/Api/CloudApi.md#cloudprivatenetworksdestroy) | **DELETE** /api/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksDestroy2**](docs/Api/CloudApi.md#cloudprivatenetworksdestroy2) | **DELETE** /api/v1/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksList**](docs/Api/CloudApi.md#cloudprivatenetworkslist) | **GET** /api/cloud/private-networks/ | 
*CloudApi* | [**cloudPrivateNetworksList2**](docs/Api/CloudApi.md#cloudprivatenetworkslist2) | **GET** /api/v1/cloud/private-networks/ | 
*CloudApi* | [**cloudPrivateNetworksPartialUpdate**](docs/Api/CloudApi.md#cloudprivatenetworkspartialupdate) | **PATCH** /api/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksPartialUpdate2**](docs/Api/CloudApi.md#cloudprivatenetworkspartialupdate2) | **PATCH** /api/v1/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksRemoveServerCreate**](docs/Api/CloudApi.md#cloudprivatenetworksremoveservercreate) | **POST** /api/cloud/private-networks/{id}/remove-server/ | 
*CloudApi* | [**cloudPrivateNetworksRemoveServerCreate2**](docs/Api/CloudApi.md#cloudprivatenetworksremoveservercreate2) | **POST** /api/v1/cloud/private-networks/{id}/remove-server/ | 
*CloudApi* | [**cloudPrivateNetworksRetrieve**](docs/Api/CloudApi.md#cloudprivatenetworksretrieve) | **GET** /api/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksRetrieve2**](docs/Api/CloudApi.md#cloudprivatenetworksretrieve2) | **GET** /api/v1/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksUpdate**](docs/Api/CloudApi.md#cloudprivatenetworksupdate) | **PUT** /api/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksUpdate2**](docs/Api/CloudApi.md#cloudprivatenetworksupdate2) | **PUT** /api/v1/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudServerPackagesList**](docs/Api/CloudApi.md#cloudserverpackageslist) | **GET** /api/cloud/server-packages/ | 
*CloudApi* | [**cloudServerPackagesList2**](docs/Api/CloudApi.md#cloudserverpackageslist2) | **GET** /api/v1/cloud/server-packages/ | 
*CloudApi* | [**cloudServerPackagesRetrieve**](docs/Api/CloudApi.md#cloudserverpackagesretrieve) | **GET** /api/cloud/server-packages/{id}/ | 
*CloudApi* | [**cloudServerPackagesRetrieve2**](docs/Api/CloudApi.md#cloudserverpackagesretrieve2) | **GET** /api/v1/cloud/server-packages/{id}/ | 
*CloudApi* | [**cloudServersAttachIpv4Create**](docs/Api/CloudApi.md#cloudserversattachipv4create) | **POST** /api/cloud/servers/{id}/attach-ipv4/ | 
*CloudApi* | [**cloudServersAttachIpv4Create2**](docs/Api/CloudApi.md#cloudserversattachipv4create2) | **POST** /api/v1/cloud/servers/{id}/attach-ipv4/ | 
*CloudApi* | [**cloudServersAttachIpv6Create**](docs/Api/CloudApi.md#cloudserversattachipv6create) | **POST** /api/cloud/servers/{id}/attach-ipv6/ | 
*CloudApi* | [**cloudServersAttachIpv6Create2**](docs/Api/CloudApi.md#cloudserversattachipv6create2) | **POST** /api/v1/cloud/servers/{id}/attach-ipv6/ | 
*CloudApi* | [**cloudServersConsoleCreate**](docs/Api/CloudApi.md#cloudserversconsolecreate) | **POST** /api/cloud/servers/{id}/console/ | 
*CloudApi* | [**cloudServersConsoleCreate2**](docs/Api/CloudApi.md#cloudserversconsolecreate2) | **POST** /api/v1/cloud/servers/{id}/console/ | 
*CloudApi* | [**cloudServersCreate**](docs/Api/CloudApi.md#cloudserverscreate) | **POST** /api/cloud/servers/ | 
*CloudApi* | [**cloudServersCreate2**](docs/Api/CloudApi.md#cloudserverscreate2) | **POST** /api/v1/cloud/servers/ | 
*CloudApi* | [**cloudServersDestroy**](docs/Api/CloudApi.md#cloudserversdestroy) | **DELETE** /api/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersDestroy2**](docs/Api/CloudApi.md#cloudserversdestroy2) | **DELETE** /api/v1/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersDestroyProtectionCreate**](docs/Api/CloudApi.md#cloudserversdestroyprotectioncreate) | **POST** /api/cloud/servers/{id}/destroy-protection/ | 
*CloudApi* | [**cloudServersDestroyProtectionCreate2**](docs/Api/CloudApi.md#cloudserversdestroyprotectioncreate2) | **POST** /api/v1/cloud/servers/{id}/destroy-protection/ | 
*CloudApi* | [**cloudServersDetachIpv4Create**](docs/Api/CloudApi.md#cloudserversdetachipv4create) | **POST** /api/cloud/servers/{id}/detach-ipv4/ | 
*CloudApi* | [**cloudServersDetachIpv4Create2**](docs/Api/CloudApi.md#cloudserversdetachipv4create2) | **POST** /api/v1/cloud/servers/{id}/detach-ipv4/ | 
*CloudApi* | [**cloudServersDetachIpv6Create**](docs/Api/CloudApi.md#cloudserversdetachipv6create) | **POST** /api/cloud/servers/{id}/detach-ipv6/ | 
*CloudApi* | [**cloudServersDetachIpv6Create2**](docs/Api/CloudApi.md#cloudserversdetachipv6create2) | **POST** /api/v1/cloud/servers/{id}/detach-ipv6/ | 
*CloudApi* | [**cloudServersList**](docs/Api/CloudApi.md#cloudserverslist) | **GET** /api/cloud/servers/ | 
*CloudApi* | [**cloudServersList2**](docs/Api/CloudApi.md#cloudserverslist2) | **GET** /api/v1/cloud/servers/ | 
*CloudApi* | [**cloudServersModifyPackageCreate**](docs/Api/CloudApi.md#cloudserversmodifypackagecreate) | **POST** /api/cloud/servers/{id}/modify-package/ | 
*CloudApi* | [**cloudServersModifyPackageCreate2**](docs/Api/CloudApi.md#cloudserversmodifypackagecreate2) | **POST** /api/v1/cloud/servers/{id}/modify-package/ | 
*CloudApi* | [**cloudServersPartialUpdate**](docs/Api/CloudApi.md#cloudserverspartialupdate) | **PATCH** /api/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersPartialUpdate2**](docs/Api/CloudApi.md#cloudserverspartialupdate2) | **PATCH** /api/v1/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersPowerManagementCreate**](docs/Api/CloudApi.md#cloudserverspowermanagementcreate) | **POST** /api/cloud/servers/{id}/power-management/ | 
*CloudApi* | [**cloudServersPowerManagementCreate2**](docs/Api/CloudApi.md#cloudserverspowermanagementcreate2) | **POST** /api/v1/cloud/servers/{id}/power-management/ | 
*CloudApi* | [**cloudServersPowerManagementRetrieve**](docs/Api/CloudApi.md#cloudserverspowermanagementretrieve) | **GET** /api/cloud/servers/{id}/power-management/ | 
*CloudApi* | [**cloudServersPowerManagementRetrieve2**](docs/Api/CloudApi.md#cloudserverspowermanagementretrieve2) | **GET** /api/v1/cloud/servers/{id}/power-management/ | 
*CloudApi* | [**cloudServersPublicInterfaceCreate**](docs/Api/CloudApi.md#cloudserverspublicinterfacecreate) | **POST** /api/cloud/servers/{id}/public-interface/ | 
*CloudApi* | [**cloudServersPublicInterfaceCreate2**](docs/Api/CloudApi.md#cloudserverspublicinterfacecreate2) | **POST** /api/v1/cloud/servers/{id}/public-interface/ | 
*CloudApi* | [**cloudServersPublicInterfaceDestroy**](docs/Api/CloudApi.md#cloudserverspublicinterfacedestroy) | **DELETE** /api/cloud/servers/{id}/public-interface/ | 
*CloudApi* | [**cloudServersPublicInterfaceDestroy2**](docs/Api/CloudApi.md#cloudserverspublicinterfacedestroy2) | **DELETE** /api/v1/cloud/servers/{id}/public-interface/ | 
*CloudApi* | [**cloudServersPublicInterfaceRetrieve**](docs/Api/CloudApi.md#cloudserverspublicinterfaceretrieve) | **GET** /api/cloud/servers/{id}/public-interface/ | 
*CloudApi* | [**cloudServersPublicInterfaceRetrieve2**](docs/Api/CloudApi.md#cloudserverspublicinterfaceretrieve2) | **GET** /api/v1/cloud/servers/{id}/public-interface/ | 
*CloudApi* | [**cloudServersRetrieve**](docs/Api/CloudApi.md#cloudserversretrieve) | **GET** /api/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersRetrieve2**](docs/Api/CloudApi.md#cloudserversretrieve2) | **GET** /api/v1/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersRetryProvisionCreate**](docs/Api/CloudApi.md#cloudserversretryprovisioncreate) | **POST** /api/cloud/servers/{id}/retry-provision/ | 
*CloudApi* | [**cloudServersRetryProvisionCreate2**](docs/Api/CloudApi.md#cloudserversretryprovisioncreate2) | **POST** /api/v1/cloud/servers/{id}/retry-provision/ | 
*CloudApi* | [**cloudServersSnapshotsCreate**](docs/Api/CloudApi.md#cloudserverssnapshotscreate) | **POST** /api/cloud/servers/{id}/snapshots/ | 
*CloudApi* | [**cloudServersSnapshotsCreate2**](docs/Api/CloudApi.md#cloudserverssnapshotscreate2) | **POST** /api/v1/cloud/servers/{id}/snapshots/ | 
*CloudApi* | [**cloudServersSnapshotsDestroy**](docs/Api/CloudApi.md#cloudserverssnapshotsdestroy) | **DELETE** /api/cloud/servers/{id}/snapshots/{snapshot_name}/ | 
*CloudApi* | [**cloudServersSnapshotsDestroy2**](docs/Api/CloudApi.md#cloudserverssnapshotsdestroy2) | **DELETE** /api/v1/cloud/servers/{id}/snapshots/{snapshot_name}/ | 
*CloudApi* | [**cloudServersSnapshotsList**](docs/Api/CloudApi.md#cloudserverssnapshotslist) | **GET** /api/cloud/servers/{id}/snapshots/ | 
*CloudApi* | [**cloudServersSnapshotsList2**](docs/Api/CloudApi.md#cloudserverssnapshotslist2) | **GET** /api/v1/cloud/servers/{id}/snapshots/ | 
*CloudApi* | [**cloudServersSnapshotsRollbackCreate**](docs/Api/CloudApi.md#cloudserverssnapshotsrollbackcreate) | **POST** /api/cloud/servers/{id}/snapshots/{snapshot_name}/rollback/ | 
*CloudApi* | [**cloudServersSnapshotsRollbackCreate2**](docs/Api/CloudApi.md#cloudserverssnapshotsrollbackcreate2) | **POST** /api/v1/cloud/servers/{id}/snapshots/{snapshot_name}/rollback/ | 
*CloudApi* | [**cloudServersUpdate**](docs/Api/CloudApi.md#cloudserversupdate) | **PUT** /api/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersUpdate2**](docs/Api/CloudApi.md#cloudserversupdate2) | **PUT** /api/v1/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersVolumesCreate**](docs/Api/CloudApi.md#cloudserversvolumescreate) | **POST** /api/cloud/servers/{server_id}/volumes/ | 
*CloudApi* | [**cloudServersVolumesCreate2**](docs/Api/CloudApi.md#cloudserversvolumescreate2) | **POST** /api/v1/cloud/servers/{server_id}/volumes/ | 
*CloudApi* | [**cloudServersVolumesDestroy**](docs/Api/CloudApi.md#cloudserversvolumesdestroy) | **DELETE** /api/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudServersVolumesDestroy2**](docs/Api/CloudApi.md#cloudserversvolumesdestroy2) | **DELETE** /api/v1/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudServersVolumesList**](docs/Api/CloudApi.md#cloudserversvolumeslist) | **GET** /api/cloud/servers/{server_id}/volumes/ | 
*CloudApi* | [**cloudServersVolumesList2**](docs/Api/CloudApi.md#cloudserversvolumeslist2) | **GET** /api/v1/cloud/servers/{server_id}/volumes/ | 
*CloudApi* | [**cloudServersVolumesPartialUpdate**](docs/Api/CloudApi.md#cloudserversvolumespartialupdate) | **PATCH** /api/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudServersVolumesPartialUpdate2**](docs/Api/CloudApi.md#cloudserversvolumespartialupdate2) | **PATCH** /api/v1/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudServersVolumesRetrieve**](docs/Api/CloudApi.md#cloudserversvolumesretrieve) | **GET** /api/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudServersVolumesRetrieve2**](docs/Api/CloudApi.md#cloudserversvolumesretrieve2) | **GET** /api/v1/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudServersVolumesUpdate**](docs/Api/CloudApi.md#cloudserversvolumesupdate) | **PUT** /api/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudServersVolumesUpdate2**](docs/Api/CloudApi.md#cloudserversvolumesupdate2) | **PUT** /api/v1/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudStorageProductsList**](docs/Api/CloudApi.md#cloudstorageproductslist) | **GET** /api/cloud/storage-products/ | 
*CloudApi* | [**cloudStorageProductsList2**](docs/Api/CloudApi.md#cloudstorageproductslist2) | **GET** /api/v1/cloud/storage-products/ | 
*CloudApi* | [**cloudStorageProductsRetrieve**](docs/Api/CloudApi.md#cloudstorageproductsretrieve) | **GET** /api/cloud/storage-products/{id}/ | 
*CloudApi* | [**cloudStorageProductsRetrieve2**](docs/Api/CloudApi.md#cloudstorageproductsretrieve2) | **GET** /api/v1/cloud/storage-products/{id}/ | 
*CloudApi* | [**cloudVolumesAttachCreate**](docs/Api/CloudApi.md#cloudvolumesattachcreate) | **POST** /api/cloud/volumes/{id}/attach/ | 
*CloudApi* | [**cloudVolumesAttachCreate2**](docs/Api/CloudApi.md#cloudvolumesattachcreate2) | **POST** /api/v1/cloud/volumes/{id}/attach/ | 
*CloudApi* | [**cloudVolumesDestroy**](docs/Api/CloudApi.md#cloudvolumesdestroy) | **DELETE** /api/cloud/volumes/{id}/ | 
*CloudApi* | [**cloudVolumesDestroy2**](docs/Api/CloudApi.md#cloudvolumesdestroy2) | **DELETE** /api/v1/cloud/volumes/{id}/ | 
*CloudApi* | [**cloudVolumesDetachCreate**](docs/Api/CloudApi.md#cloudvolumesdetachcreate) | **POST** /api/cloud/volumes/{id}/detach/ | 
*CloudApi* | [**cloudVolumesDetachCreate2**](docs/Api/CloudApi.md#cloudvolumesdetachcreate2) | **POST** /api/v1/cloud/volumes/{id}/detach/ | 
*CloudApi* | [**cloudVolumesList**](docs/Api/CloudApi.md#cloudvolumeslist) | **GET** /api/cloud/volumes/ | 
*CloudApi* | [**cloudVolumesList2**](docs/Api/CloudApi.md#cloudvolumeslist2) | **GET** /api/v1/cloud/volumes/ | 
*CloudApi* | [**cloudVolumesPartialUpdate**](docs/Api/CloudApi.md#cloudvolumespartialupdate) | **PATCH** /api/cloud/volumes/{id}/ | 
*CloudApi* | [**cloudVolumesPartialUpdate2**](docs/Api/CloudApi.md#cloudvolumespartialupdate2) | **PATCH** /api/v1/cloud/volumes/{id}/ | 
*CloudApi* | [**cloudVolumesRetrieve**](docs/Api/CloudApi.md#cloudvolumesretrieve) | **GET** /api/cloud/volumes/{id}/ | 
*CloudApi* | [**cloudVolumesRetrieve2**](docs/Api/CloudApi.md#cloudvolumesretrieve2) | **GET** /api/v1/cloud/volumes/{id}/ | 
*CloudApi* | [**cloudVolumesUpdate**](docs/Api/CloudApi.md#cloudvolumesupdate) | **PUT** /api/cloud/volumes/{id}/ | 
*CloudApi* | [**cloudVolumesUpdate2**](docs/Api/CloudApi.md#cloudvolumesupdate2) | **PUT** /api/v1/cloud/volumes/{id}/ | 
*DomainApi* | [**domainDomainCheckAvailabilityCreate**](docs/Api/DomainApi.md#domaindomaincheckavailabilitycreate) | **POST** /api/domain/domain/check-availability/ | 
*DomainApi* | [**domainDomainCheckAvailabilityCreate2**](docs/Api/DomainApi.md#domaindomaincheckavailabilitycreate2) | **POST** /api/v1/domain/domain/check-availability/ | 
*DomainApi* | [**domainDomainCreate**](docs/Api/DomainApi.md#domaindomaincreate) | **POST** /api/domain/domain/ | 
*DomainApi* | [**domainDomainCreate2**](docs/Api/DomainApi.md#domaindomaincreate2) | **POST** /api/v1/domain/domain/ | 
*DomainApi* | [**domainDomainList**](docs/Api/DomainApi.md#domaindomainlist) | **GET** /api/domain/domain/ | 
*DomainApi* | [**domainDomainList2**](docs/Api/DomainApi.md#domaindomainlist2) | **GET** /api/v1/domain/domain/ | 
*DomainApi* | [**domainDomainPartialUpdate**](docs/Api/DomainApi.md#domaindomainpartialupdate) | **PATCH** /api/domain/domain/{domain}/ | 
*DomainApi* | [**domainDomainPartialUpdate2**](docs/Api/DomainApi.md#domaindomainpartialupdate2) | **PATCH** /api/v1/domain/domain/{domain}/ | 
*DomainApi* | [**domainDomainRenewCreate**](docs/Api/DomainApi.md#domaindomainrenewcreate) | **POST** /api/domain/domain/{domain}/renew/ | 
*DomainApi* | [**domainDomainRenewCreate2**](docs/Api/DomainApi.md#domaindomainrenewcreate2) | **POST** /api/v1/domain/domain/{domain}/renew/ | 
*DomainApi* | [**domainDomainRetrieve**](docs/Api/DomainApi.md#domaindomainretrieve) | **GET** /api/domain/domain/{domain}/ | 
*DomainApi* | [**domainDomainRetrieve2**](docs/Api/DomainApi.md#domaindomainretrieve2) | **GET** /api/v1/domain/domain/{domain}/ | 
*DomainApi* | [**domainDomainTransferRoDomainCreate**](docs/Api/DomainApi.md#domaindomaintransferrodomaincreate) | **POST** /api/domain/domain/transfer-ro-domain/ | 
*DomainApi* | [**domainDomainTransferRoDomainCreate2**](docs/Api/DomainApi.md#domaindomaintransferrodomaincreate2) | **POST** /api/v1/domain/domain/transfer-ro-domain/ | 
*DomainApi* | [**domainDomainUpdate**](docs/Api/DomainApi.md#domaindomainupdate) | **PUT** /api/domain/domain/{domain}/ | 
*DomainApi* | [**domainDomainUpdate2**](docs/Api/DomainApi.md#domaindomainupdate2) | **PUT** /api/v1/domain/domain/{domain}/ | 
*DomainApi* | [**domainRegistrantsCreate**](docs/Api/DomainApi.md#domainregistrantscreate) | **POST** /api/domain/registrants/ | 
*DomainApi* | [**domainRegistrantsCreate2**](docs/Api/DomainApi.md#domainregistrantscreate2) | **POST** /api/v1/domain/registrants/ | 
*DomainApi* | [**domainRegistrantsDestroy**](docs/Api/DomainApi.md#domainregistrantsdestroy) | **DELETE** /api/domain/registrants/{id}/ | 
*DomainApi* | [**domainRegistrantsDestroy2**](docs/Api/DomainApi.md#domainregistrantsdestroy2) | **DELETE** /api/v1/domain/registrants/{id}/ | 
*DomainApi* | [**domainRegistrantsList**](docs/Api/DomainApi.md#domainregistrantslist) | **GET** /api/domain/registrants/ | 
*DomainApi* | [**domainRegistrantsList2**](docs/Api/DomainApi.md#domainregistrantslist2) | **GET** /api/v1/domain/registrants/ | 
*DomainApi* | [**domainRegistrantsPartialUpdate**](docs/Api/DomainApi.md#domainregistrantspartialupdate) | **PATCH** /api/domain/registrants/{id}/ | 
*DomainApi* | [**domainRegistrantsPartialUpdate2**](docs/Api/DomainApi.md#domainregistrantspartialupdate2) | **PATCH** /api/v1/domain/registrants/{id}/ | 
*DomainApi* | [**domainRegistrantsRetrieve**](docs/Api/DomainApi.md#domainregistrantsretrieve) | **GET** /api/domain/registrants/{id}/ | 
*DomainApi* | [**domainRegistrantsRetrieve2**](docs/Api/DomainApi.md#domainregistrantsretrieve2) | **GET** /api/v1/domain/registrants/{id}/ | 
*DomainApi* | [**domainRegistrantsUpdate**](docs/Api/DomainApi.md#domainregistrantsupdate) | **PUT** /api/domain/registrants/{id}/ | 
*DomainApi* | [**domainRegistrantsUpdate2**](docs/Api/DomainApi.md#domainregistrantsupdate2) | **PUT** /api/v1/domain/registrants/{id}/ | 
*DomainApi* | [**domainTldList**](docs/Api/DomainApi.md#domaintldlist) | **GET** /api/domain/tld/ | 
*DomainApi* | [**domainTldList2**](docs/Api/DomainApi.md#domaintldlist2) | **GET** /api/v1/domain/tld/ | 
*DomainApi* | [**domainTldRetrieve**](docs/Api/DomainApi.md#domaintldretrieve) | **GET** /api/domain/tld/{id}/ | 
*DomainApi* | [**domainTldRetrieve2**](docs/Api/DomainApi.md#domaintldretrieve2) | **GET** /api/v1/domain/tld/{id}/ | 
*KubernetesApi* | [**kubernetesClusterTypesList**](docs/Api/KubernetesApi.md#kubernetesclustertypeslist) | **GET** /api/kubernetes/cluster-types/ | 
*KubernetesApi* | [**kubernetesClusterTypesList2**](docs/Api/KubernetesApi.md#kubernetesclustertypeslist2) | **GET** /api/v1/kubernetes/cluster-types/ | 
*KubernetesApi* | [**kubernetesClustersConnectVmCreate**](docs/Api/KubernetesApi.md#kubernetesclustersconnectvmcreate) | **POST** /api/kubernetes/clusters/{id}/connect-vm/ | 
*KubernetesApi* | [**kubernetesClustersConnectVmCreate2**](docs/Api/KubernetesApi.md#kubernetesclustersconnectvmcreate2) | **POST** /api/v1/kubernetes/clusters/{id}/connect-vm/ | 
*KubernetesApi* | [**kubernetesClustersConnectedVmsRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersconnectedvmsretrieve) | **GET** /api/kubernetes/clusters/{id}/connected-vms/ | 
*KubernetesApi* | [**kubernetesClustersConnectedVmsRetrieve2**](docs/Api/KubernetesApi.md#kubernetesclustersconnectedvmsretrieve2) | **GET** /api/v1/kubernetes/clusters/{id}/connected-vms/ | 
*KubernetesApi* | [**kubernetesClustersCreate**](docs/Api/KubernetesApi.md#kubernetesclusterscreate) | **POST** /api/kubernetes/clusters/ | 
*KubernetesApi* | [**kubernetesClustersCreate2**](docs/Api/KubernetesApi.md#kubernetesclusterscreate2) | **POST** /api/v1/kubernetes/clusters/ | 
*KubernetesApi* | [**kubernetesClustersDestroy**](docs/Api/KubernetesApi.md#kubernetesclustersdestroy) | **DELETE** /api/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersDestroy2**](docs/Api/KubernetesApi.md#kubernetesclustersdestroy2) | **DELETE** /api/v1/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersDisconnectVmCreate**](docs/Api/KubernetesApi.md#kubernetesclustersdisconnectvmcreate) | **POST** /api/kubernetes/clusters/{id}/disconnect-vm/ | 
*KubernetesApi* | [**kubernetesClustersDisconnectVmCreate2**](docs/Api/KubernetesApi.md#kubernetesclustersdisconnectvmcreate2) | **POST** /api/v1/kubernetes/clusters/{id}/disconnect-vm/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesCreate**](docs/Api/KubernetesApi.md#kubernetesclustershttproutescreate) | **POST** /api/kubernetes/clusters/{cluster_id}/httproutes/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesCreate2**](docs/Api/KubernetesApi.md#kubernetesclustershttproutescreate2) | **POST** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesDestroy**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesDestroy2**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesdestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclustershttproutespartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesPartialUpdate2**](docs/Api/KubernetesApi.md#kubernetesclustershttproutespartialupdate2) | **PATCH** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/httproutes/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesRetrieve2**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesretrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesRetrieve3**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesretrieve3) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesRetrieve4**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesretrieve4) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesUpdate**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesUpdate2**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesupdate2) | **PUT** /api/v1/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersKubeVersionUpgradeCreate**](docs/Api/KubernetesApi.md#kubernetesclusterskubeversionupgradecreate) | **POST** /api/kubernetes/clusters/{id}/kube-version-upgrade/ | 
*KubernetesApi* | [**kubernetesClustersKubeVersionUpgradeCreate2**](docs/Api/KubernetesApi.md#kubernetesclusterskubeversionupgradecreate2) | **POST** /api/v1/kubernetes/clusters/{id}/kube-version-upgrade/ | 
*KubernetesApi* | [**kubernetesClustersKubeconfigCreate**](docs/Api/KubernetesApi.md#kubernetesclusterskubeconfigcreate) | **POST** /api/kubernetes/clusters/{id}/kubeconfig/ | 
*KubernetesApi* | [**kubernetesClustersKubeconfigCreate2**](docs/Api/KubernetesApi.md#kubernetesclusterskubeconfigcreate2) | **POST** /api/v1/kubernetes/clusters/{id}/kubeconfig/ | 
*KubernetesApi* | [**kubernetesClustersKubeconfigRetrieve**](docs/Api/KubernetesApi.md#kubernetesclusterskubeconfigretrieve) | **GET** /api/kubernetes/clusters/{id}/kubeconfig/ | 
*KubernetesApi* | [**kubernetesClustersKubeconfigRetrieve2**](docs/Api/KubernetesApi.md#kubernetesclusterskubeconfigretrieve2) | **GET** /api/v1/kubernetes/clusters/{id}/kubeconfig/ | 
*KubernetesApi* | [**kubernetesClustersList**](docs/Api/KubernetesApi.md#kubernetesclusterslist) | **GET** /api/kubernetes/clusters/ | 
*KubernetesApi* | [**kubernetesClustersList2**](docs/Api/KubernetesApi.md#kubernetesclusterslist2) | **GET** /api/v1/kubernetes/clusters/ | 
*KubernetesApi* | [**kubernetesClustersPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclusterspartialupdate) | **PATCH** /api/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPartialUpdate2**](docs/Api/KubernetesApi.md#kubernetesclusterspartialupdate2) | **PATCH** /api/v1/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsCreate**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardscreate) | **POST** /api/kubernetes/clusters/{cluster_id}/port-forwards/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsCreate2**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardscreate2) | **POST** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsDestroy**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsDestroy2**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsdestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardspartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsPartialUpdate2**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardspartialupdate2) | **PATCH** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/port-forwards/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsRetrieve2**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsretrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsRetrieve3**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsretrieve3) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsRetrieve4**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsretrieve4) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsUpdate2**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsupdate2) | **PUT** /api/v1/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsCreate**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolscreate) | **POST** /api/kubernetes/clusters/{cluster_id}/resource-pools/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsCreate2**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolscreate2) | **POST** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsDestroy**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsDestroy2**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsdestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsList**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolslist) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsList2**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolslist2) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesDestroy**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodesdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesDestroy2**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodesdestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesList**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodeslist) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesList2**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodeslist2) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodesretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesRetrieve2**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodesretrieve2) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolspartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsPartialUpdate2**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolspartialupdate2) | **PATCH** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsRetrieve2**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsretrieve2) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsUpdate2**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsupdate2) | **PUT** /api/v1/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersretrieve) | **GET** /api/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersRetrieve2**](docs/Api/KubernetesApi.md#kubernetesclustersretrieve2) | **GET** /api/v1/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTalosVersionUpgradeCreate**](docs/Api/KubernetesApi.md#kubernetesclusterstalosversionupgradecreate) | **POST** /api/kubernetes/clusters/{id}/talos-version-upgrade/ | 
*KubernetesApi* | [**kubernetesClustersTalosVersionUpgradeCreate2**](docs/Api/KubernetesApi.md#kubernetesclusterstalosversionupgradecreate2) | **POST** /api/v1/kubernetes/clusters/{id}/talos-version-upgrade/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesCreate**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutescreate) | **POST** /api/kubernetes/clusters/{cluster_id}/tcproutes/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesCreate2**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutescreate2) | **POST** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesDestroy**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesDestroy2**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesdestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutespartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesPartialUpdate2**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutespartialupdate2) | **PATCH** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesRetrieve**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/tcproutes/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesRetrieve2**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesretrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesRetrieve3**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesretrieve3) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesRetrieve4**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesretrieve4) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesUpdate**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesUpdate2**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesupdate2) | **PUT** /api/v1/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesCreate**](docs/Api/KubernetesApi.md#kubernetesclustersudproutescreate) | **POST** /api/kubernetes/clusters/{cluster_id}/udproutes/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesCreate2**](docs/Api/KubernetesApi.md#kubernetesclustersudproutescreate2) | **POST** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesDestroy**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesDestroy2**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesdestroy2) | **DELETE** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersudproutespartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesPartialUpdate2**](docs/Api/KubernetesApi.md#kubernetesclustersudproutespartialupdate2) | **PATCH** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/udproutes/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesRetrieve2**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesretrieve2) | **GET** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesRetrieve3**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesretrieve3) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesRetrieve4**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesretrieve4) | **GET** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesUpdate2**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesupdate2) | **PUT** /api/v1/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersupdate) | **PUT** /api/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUpdate2**](docs/Api/KubernetesApi.md#kubernetesclustersupdate2) | **PUT** /api/v1/kubernetes/clusters/{id}/ | 
*SchemaApi* | [**schemaRetrieve**](docs/Api/SchemaApi.md#schemaretrieve) | **GET** /api/schema/ | 
*SchemaApi* | [**schemaRetrieve2**](docs/Api/SchemaApi.md#schemaretrieve2) | **GET** /api/v1/schema/ | 

## Models

- [AddServerResponse](docs/Model/AddServerResponse.md)
- [AttachIPv4](docs/Model/AttachIPv4.md)
- [AttachIPv6](docs/Model/AttachIPv6.md)
- [AttachVolume](docs/Model/AttachVolume.md)
- [CheckAvailability](docs/Model/CheckAvailability.md)
- [ClusterAdd](docs/Model/ClusterAdd.md)
- [ClusterAddResponse](docs/Model/ClusterAddResponse.md)
- [ClusterDetail](docs/Model/ClusterDetail.md)
- [ClusterPackage](docs/Model/ClusterPackage.md)
- [ClusterType](docs/Model/ClusterType.md)
- [ClusterTypeEnum](docs/Model/ClusterTypeEnum.md)
- [Company](docs/Model/Company.md)
- [ConnectVMRequest](docs/Model/ConnectVMRequest.md)
- [ConnectVMResponse](docs/Model/ConnectVMResponse.md)
- [ConnectedVM](docs/Model/ConnectedVM.md)
- [ConnectedVMsResponse](docs/Model/ConnectedVMsResponse.md)
- [ConsoleToken](docs/Model/ConsoleToken.md)
- [CountryEnum](docs/Model/CountryEnum.md)
- [DestroyProtection](docs/Model/DestroyProtection.md)
- [DetachIPv4](docs/Model/DetachIPv4.md)
- [DetachIPv4Response](docs/Model/DetachIPv4Response.md)
- [DetachIPv6](docs/Model/DetachIPv6.md)
- [DetachIPv6Response](docs/Model/DetachIPv6Response.md)
- [DetachVolume](docs/Model/DetachVolume.md)
- [DirectionEnum](docs/Model/DirectionEnum.md)
- [DisconnectVMRequest](docs/Model/DisconnectVMRequest.md)
- [DisconnectVMResponse](docs/Model/DisconnectVMResponse.md)
- [Domain](docs/Model/Domain.md)
- [DomainCreate](docs/Model/DomainCreate.md)
- [DomainRegistrant](docs/Model/DomainRegistrant.md)
- [FeaturesEnum](docs/Model/FeaturesEnum.md)
- [FirewallRule](docs/Model/FirewallRule.md)
- [FirewallRulesSet](docs/Model/FirewallRulesSet.md)
- [FirewallRulesSetStatusEnum](docs/Model/FirewallRulesSetStatusEnum.md)
- [FwPolicyOutEnum](docs/Model/FwPolicyOutEnum.md)
- [HTTPRoute](docs/Model/HTTPRoute.md)
- [KubeUpgradeResponse](docs/Model/KubeUpgradeResponse.md)
- [KubeVersionEnum](docs/Model/KubeVersionEnum.md)
- [OSImage](docs/Model/OSImage.md)
- [PaginatedClusterDetailList](docs/Model/PaginatedClusterDetailList.md)
- [PaginatedClusterTypeList](docs/Model/PaginatedClusterTypeList.md)
- [PaginatedCompanyList](docs/Model/PaginatedCompanyList.md)
- [PaginatedDomainList](docs/Model/PaginatedDomainList.md)
- [PaginatedDomainRegistrantList](docs/Model/PaginatedDomainRegistrantList.md)
- [PaginatedOSImageList](docs/Model/PaginatedOSImageList.md)
- [PaginatedPrivateNetworkList](docs/Model/PaginatedPrivateNetworkList.md)
- [PaginatedPublicIPv4List](docs/Model/PaginatedPublicIPv4List.md)
- [PaginatedPublicIPv6List](docs/Model/PaginatedPublicIPv6List.md)
- [PaginatedResourcePoolList](docs/Model/PaginatedResourcePoolList.md)
- [PaginatedResourcePoolNodeList](docs/Model/PaginatedResourcePoolNodeList.md)
- [PaginatedSSHKeyList](docs/Model/PaginatedSSHKeyList.md)
- [PaginatedServerList](docs/Model/PaginatedServerList.md)
- [PaginatedServerProductList](docs/Model/PaginatedServerProductList.md)
- [PaginatedSnapshotList](docs/Model/PaginatedSnapshotList.md)
- [PaginatedStorageProductList](docs/Model/PaginatedStorageProductList.md)
- [PaginatedTLDList](docs/Model/PaginatedTLDList.md)
- [PatchedClusterDetail](docs/Model/PatchedClusterDetail.md)
- [PatchedCompany](docs/Model/PatchedCompany.md)
- [PatchedDomain](docs/Model/PatchedDomain.md)
- [PatchedDomainRegistrant](docs/Model/PatchedDomainRegistrant.md)
- [PatchedFirewallRule](docs/Model/PatchedFirewallRule.md)
- [PatchedFirewallRulesSet](docs/Model/PatchedFirewallRulesSet.md)
- [PatchedHTTPRoute](docs/Model/PatchedHTTPRoute.md)
- [PatchedPrivateNetwork](docs/Model/PatchedPrivateNetwork.md)
- [PatchedProfile](docs/Model/PatchedProfile.md)
- [PatchedResourcePool](docs/Model/PatchedResourcePool.md)
- [PatchedSSHKey](docs/Model/PatchedSSHKey.md)
- [PatchedTCPRoute](docs/Model/PatchedTCPRoute.md)
- [PatchedUDPRoute](docs/Model/PatchedUDPRoute.md)
- [PatchedVolume](docs/Model/PatchedVolume.md)
- [PowerManagement](docs/Model/PowerManagement.md)
- [PowerManagementRequest](docs/Model/PowerManagementRequest.md)
- [PowerManagementRequestActionEnum](docs/Model/PowerManagementRequestActionEnum.md)
- [PrivateNetwork](docs/Model/PrivateNetwork.md)
- [PrivateNetworkAddHost](docs/Model/PrivateNetworkAddHost.md)
- [PrivateNetworkRemoveHost](docs/Model/PrivateNetworkRemoveHost.md)
- [Profile](docs/Model/Profile.md)
- [PublicIPv4](docs/Model/PublicIPv4.md)
- [PublicIPv6](docs/Model/PublicIPv6.md)
- [PublicInterface](docs/Model/PublicInterface.md)
- [RemoveServerResponse](docs/Model/RemoveServerResponse.md)
- [RenewDomain](docs/Model/RenewDomain.md)
- [ResourcePool](docs/Model/ResourcePool.md)
- [ResourcePoolAdd](docs/Model/ResourcePoolAdd.md)
- [ResourcePoolAddResponse](docs/Model/ResourcePoolAddResponse.md)
- [ResourcePoolNode](docs/Model/ResourcePoolNode.md)
- [RetryProvision](docs/Model/RetryProvision.md)
- [SSHKey](docs/Model/SSHKey.md)
- [Server](docs/Model/Server.md)
- [ServerAdd](docs/Model/ServerAdd.md)
- [ServerAddResponse](docs/Model/ServerAddResponse.md)
- [ServerProduct](docs/Model/ServerProduct.md)
- [ServerProductUpgrade](docs/Model/ServerProductUpgrade.md)
- [ServerUpgradeResponse](docs/Model/ServerUpgradeResponse.md)
- [Service](docs/Model/Service.md)
- [ServiceStatusEnum](docs/Model/ServiceStatusEnum.md)
- [Snapshot](docs/Model/Snapshot.md)
- [SnapshotCreate](docs/Model/SnapshotCreate.md)
- [SnapshotCreateQueued](docs/Model/SnapshotCreateQueued.md)
- [SnapshotDeleteQueued](docs/Model/SnapshotDeleteQueued.md)
- [SnapshotRollbackQueued](docs/Model/SnapshotRollbackQueued.md)
- [StatusA57Enum](docs/Model/StatusA57Enum.md)
- [StorageProduct](docs/Model/StorageProduct.md)
- [TCPRoute](docs/Model/TCPRoute.md)
- [TLD](docs/Model/TLD.md)
- [TalosUpgradeResponse](docs/Model/TalosUpgradeResponse.md)
- [TransferRoDomain](docs/Model/TransferRoDomain.md)
- [TypeEnum](docs/Model/TypeEnum.md)
- [UDPRoute](docs/Model/UDPRoute.md)
- [Volume](docs/Model/Volume.md)

## Authorization

Authentication schemes defined for the API:
### cookieAuth

- **Type**: API key
- **API key parameter name**: sessionid
- **Location**: 


### tokenAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@pidginhost.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0 (v1)`
    - Package version: `0.1.0`
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
