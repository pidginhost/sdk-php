# OpenAPIClient-php

The Pidgin Host API allows you to manage Services and resources within the Pidgin Host cloud in a simple, programmatic way using conventional HTTP requests.
All of the functionality that you are familiar with in the Pidgin Host control panel is also available through the API, allowing you to script the complex actions that your situation requires.

For more information, please visit [https://www.pidginhost.com](https://www.pidginhost.com).

## Installation & Usage

### Requirements

PHP 8.1 and later.

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



// Configure API key authorization: tokenAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: cookieAuth
$config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PidginHost\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');


$apiInstance = new PidginHost\Sdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_token_create_request = new \PidginHost\Sdk\Model\APITokenCreateRequest(); // \PidginHost\Sdk\Model\APITokenCreateRequest

try {
    $result = $apiInstance->accountApiTokensCreate($api_token_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountApiTokensCreate: ', $e->getMessage(), PHP_EOL;
}

```

## Quickstart

```php
<?php
require_once 'vendor/autoload.php';

use PidginHost\Sdk\PidginHost;

$client = new PidginHost(getenv('PIDGINHOST_API_TOKEN'));

// List all servers (paginated: pass a page number for further pages)
$page = $client->cloud->cloudServersList();
foreach ($page->getResults() as $server) {
    echo $server->getHostname() . "\n";
}

// List SSH keys
$keys = $client->account->accountSshKeysList();
```

The `PidginHost` client exposes these API groups:
- `$client->account` -- account, companies, SSH keys
- `$client->auth` -- authentication, tokens
- `$client->billing` -- invoices, payments, funds
- `$client->cloud` -- servers, images, volumes, IPs, firewalls, networks
- `$client->dedicated` -- dedicated servers
- `$client->domain` -- domains, registrants, TLDs
- `$client->freedns` -- free DNS zones and records
- `$client->hosting` -- web hosting
- `$client->kubernetes` -- clusters, resource pools, routes
- `$client->support` -- support tickets

## API Endpoints

All URIs are relative to *https://www.pidginhost.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**accountApiTokensCreate**](docs/Api/AccountApi.md#accountapitokenscreate) | **POST** /api/account/api-tokens/ | 
*AccountApi* | [**accountApiTokensDestroy**](docs/Api/AccountApi.md#accountapitokensdestroy) | **DELETE** /api/account/api-tokens/{id}/ | 
*AccountApi* | [**accountApiTokensList**](docs/Api/AccountApi.md#accountapitokenslist) | **GET** /api/account/api-tokens/ | 
*AccountApi* | [**accountCompaniesCreate**](docs/Api/AccountApi.md#accountcompaniescreate) | **POST** /api/account/companies/ | 
*AccountApi* | [**accountCompaniesDestroy**](docs/Api/AccountApi.md#accountcompaniesdestroy) | **DELETE** /api/account/companies/{id}/ | 
*AccountApi* | [**accountCompaniesList**](docs/Api/AccountApi.md#accountcompanieslist) | **GET** /api/account/companies/ | 
*AccountApi* | [**accountCompaniesPartialUpdate**](docs/Api/AccountApi.md#accountcompaniespartialupdate) | **PATCH** /api/account/companies/{id}/ | 
*AccountApi* | [**accountCompaniesRetrieve**](docs/Api/AccountApi.md#accountcompaniesretrieve) | **GET** /api/account/companies/{id}/ | 
*AccountApi* | [**accountCompaniesUpdate**](docs/Api/AccountApi.md#accountcompaniesupdate) | **PUT** /api/account/companies/{id}/ | 
*AccountApi* | [**accountEmailsList**](docs/Api/AccountApi.md#accountemailslist) | **GET** /api/account/emails/ | 
*AccountApi* | [**accountProfilePartialUpdate**](docs/Api/AccountApi.md#accountprofilepartialupdate) | **PATCH** /api/account/profile | 
*AccountApi* | [**accountProfileRetrieve**](docs/Api/AccountApi.md#accountprofileretrieve) | **GET** /api/account/profile | 
*AccountApi* | [**accountProfileUpdate**](docs/Api/AccountApi.md#accountprofileupdate) | **PUT** /api/account/profile | 
*AccountApi* | [**accountSshKeysCreate**](docs/Api/AccountApi.md#accountsshkeyscreate) | **POST** /api/account/ssh-keys/ | 
*AccountApi* | [**accountSshKeysDestroy**](docs/Api/AccountApi.md#accountsshkeysdestroy) | **DELETE** /api/account/ssh-keys/{id}/ | 
*AccountApi* | [**accountSshKeysList**](docs/Api/AccountApi.md#accountsshkeyslist) | **GET** /api/account/ssh-keys/ | 
*AccountApi* | [**accountSshKeysPartialUpdate**](docs/Api/AccountApi.md#accountsshkeyspartialupdate) | **PATCH** /api/account/ssh-keys/{id}/ | 
*AccountApi* | [**accountSshKeysRetrieve**](docs/Api/AccountApi.md#accountsshkeysretrieve) | **GET** /api/account/ssh-keys/{id}/ | 
*AccountApi* | [**accountSshKeysUpdate**](docs/Api/AccountApi.md#accountsshkeysupdate) | **PUT** /api/account/ssh-keys/{id}/ | 
*AuthApi* | [**authCliSessionCreate**](docs/Api/AuthApi.md#authclisessioncreate) | **POST** /api/auth/cli-session/ | 
*AuthApi* | [**authCliSessionRetrieve**](docs/Api/AuthApi.md#authclisessionretrieve) | **GET** /api/auth/cli-session/{session_id}/ | 
*BillingApi* | [**billingDepositsCreate**](docs/Api/BillingApi.md#billingdepositscreate) | **POST** /api/billing/deposits/ | 
*BillingApi* | [**billingDepositsList**](docs/Api/BillingApi.md#billingdepositslist) | **GET** /api/billing/deposits/ | 
*BillingApi* | [**billingDepositsRetrieve**](docs/Api/BillingApi.md#billingdepositsretrieve) | **GET** /api/billing/deposits/{id}/ | 
*BillingApi* | [**billingFundsList**](docs/Api/BillingApi.md#billingfundslist) | **GET** /api/billing/funds/ | 
*BillingApi* | [**billingFundsLogList**](docs/Api/BillingApi.md#billingfundsloglist) | **GET** /api/billing/funds-log/ | 
*BillingApi* | [**billingFundsNotificationSettingsCreate**](docs/Api/BillingApi.md#billingfundsnotificationsettingscreate) | **POST** /api/billing/funds/notification-settings/ | 
*BillingApi* | [**billingInvoicesList**](docs/Api/BillingApi.md#billinginvoiceslist) | **GET** /api/billing/invoices/ | 
*BillingApi* | [**billingInvoicesPayWithFundsCreate**](docs/Api/BillingApi.md#billinginvoicespaywithfundscreate) | **POST** /api/billing/invoices/{id}/pay-with-funds/ | 
*BillingApi* | [**billingInvoicesPdfRetrieve**](docs/Api/BillingApi.md#billinginvoicespdfretrieve) | **GET** /api/billing/invoices/{id}/pdf/ | 
*BillingApi* | [**billingInvoicesRetrieve**](docs/Api/BillingApi.md#billinginvoicesretrieve) | **GET** /api/billing/invoices/{id}/ | 
*BillingApi* | [**billingServicesCancelCreate**](docs/Api/BillingApi.md#billingservicescancelcreate) | **POST** /api/billing/services/{id}/cancel/ | 
*BillingApi* | [**billingServicesChangeBillingCycleCreate**](docs/Api/BillingApi.md#billingserviceschangebillingcyclecreate) | **POST** /api/billing/services/{id}/change-billing-cycle/ | 
*BillingApi* | [**billingServicesChangeCompanyCreate**](docs/Api/BillingApi.md#billingserviceschangecompanycreate) | **POST** /api/billing/services/{id}/change-company/ | 
*BillingApi* | [**billingServicesList**](docs/Api/BillingApi.md#billingserviceslist) | **GET** /api/billing/services/ | 
*BillingApi* | [**billingServicesRetrieve**](docs/Api/BillingApi.md#billingservicesretrieve) | **GET** /api/billing/services/{id}/ | 
*BillingApi* | [**billingServicesToggleAutoPaymentCreate**](docs/Api/BillingApi.md#billingservicestoggleautopaymentcreate) | **POST** /api/billing/services/{id}/toggle-auto-payment/ | 
*BillingApi* | [**billingSubscriptionsList**](docs/Api/BillingApi.md#billingsubscriptionslist) | **GET** /api/billing/subscriptions/ | 
*BillingApi* | [**billingSubscriptionsRetrieve**](docs/Api/BillingApi.md#billingsubscriptionsretrieve) | **GET** /api/billing/subscriptions/{id}/ | 
*CloudApi* | [**cloudBucketsCreate**](docs/Api/CloudApi.md#cloudbucketscreate) | **POST** /api/cloud/buckets/ | 
*CloudApi* | [**cloudBucketsCredentialsRevealCreate**](docs/Api/CloudApi.md#cloudbucketscredentialsrevealcreate) | **POST** /api/cloud/buckets/{id}/credentials/reveal/ | 
*CloudApi* | [**cloudBucketsCredentialsRotateCreate**](docs/Api/CloudApi.md#cloudbucketscredentialsrotatecreate) | **POST** /api/cloud/buckets/{id}/credentials/rotate/ | 
*CloudApi* | [**cloudBucketsDestroy**](docs/Api/CloudApi.md#cloudbucketsdestroy) | **DELETE** /api/cloud/buckets/{id}/ | 
*CloudApi* | [**cloudBucketsList**](docs/Api/CloudApi.md#cloudbucketslist) | **GET** /api/cloud/buckets/ | 
*CloudApi* | [**cloudBucketsResizeCreate**](docs/Api/CloudApi.md#cloudbucketsresizecreate) | **POST** /api/cloud/buckets/{id}/resize/ | 
*CloudApi* | [**cloudBucketsRetrieve**](docs/Api/CloudApi.md#cloudbucketsretrieve) | **GET** /api/cloud/buckets/{id}/ | 
*CloudApi* | [**cloudBucketsVisibilityCreate**](docs/Api/CloudApi.md#cloudbucketsvisibilitycreate) | **POST** /api/cloud/buckets/{id}/visibility/ | 
*CloudApi* | [**cloudFirewallRulesSetCreate**](docs/Api/CloudApi.md#cloudfirewallrulessetcreate) | **POST** /api/cloud/firewall-rules-set/ | 
*CloudApi* | [**cloudFirewallRulesSetDestroy**](docs/Api/CloudApi.md#cloudfirewallrulessetdestroy) | **DELETE** /api/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetList**](docs/Api/CloudApi.md#cloudfirewallrulessetlist) | **GET** /api/cloud/firewall-rules-set/ | 
*CloudApi* | [**cloudFirewallRulesSetPartialUpdate**](docs/Api/CloudApi.md#cloudfirewallrulessetpartialupdate) | **PATCH** /api/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRetrieve**](docs/Api/CloudApi.md#cloudfirewallrulessetretrieve) | **GET** /api/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesCreate**](docs/Api/CloudApi.md#cloudfirewallrulessetrulescreate) | **POST** /api/cloud/firewall-rules-set/{rules_set_id}/rules/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesDestroy**](docs/Api/CloudApi.md#cloudfirewallrulessetrulesdestroy) | **DELETE** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesList**](docs/Api/CloudApi.md#cloudfirewallrulessetruleslist) | **GET** /api/cloud/firewall-rules-set/{rules_set_id}/rules/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesPartialUpdate**](docs/Api/CloudApi.md#cloudfirewallrulessetrulespartialupdate) | **PATCH** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesRetrieve**](docs/Api/CloudApi.md#cloudfirewallrulessetrulesretrieve) | **GET** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetRulesUpdate**](docs/Api/CloudApi.md#cloudfirewallrulessetrulesupdate) | **PUT** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ | 
*CloudApi* | [**cloudFirewallRulesSetUpdate**](docs/Api/CloudApi.md#cloudfirewallrulessetupdate) | **PUT** /api/cloud/firewall-rules-set/{id}/ | 
*CloudApi* | [**cloudFloatingIpv4AuthorizationsList**](docs/Api/CloudApi.md#cloudfloatingipv4authorizationslist) | **GET** /api/cloud/floating-ipv4/{id}/authorizations/ | 
*CloudApi* | [**cloudFloatingIpv4AuthorizeCreate**](docs/Api/CloudApi.md#cloudfloatingipv4authorizecreate) | **POST** /api/cloud/floating-ipv4/{id}/authorize/ | 
*CloudApi* | [**cloudFloatingIpv4Create**](docs/Api/CloudApi.md#cloudfloatingipv4create) | **POST** /api/cloud/floating-ipv4/ | 
*CloudApi* | [**cloudFloatingIpv4Destroy**](docs/Api/CloudApi.md#cloudfloatingipv4destroy) | **DELETE** /api/cloud/floating-ipv4/{id}/ | 
*CloudApi* | [**cloudFloatingIpv4List**](docs/Api/CloudApi.md#cloudfloatingipv4list) | **GET** /api/cloud/floating-ipv4/ | 
*CloudApi* | [**cloudFloatingIpv4RdnsCreate**](docs/Api/CloudApi.md#cloudfloatingipv4rdnscreate) | **POST** /api/cloud/floating-ipv4/{id}/rdns/ | 
*CloudApi* | [**cloudFloatingIpv4RdnsRetrieve**](docs/Api/CloudApi.md#cloudfloatingipv4rdnsretrieve) | **GET** /api/cloud/floating-ipv4/{id}/rdns/ | 
*CloudApi* | [**cloudFloatingIpv4Retrieve**](docs/Api/CloudApi.md#cloudfloatingipv4retrieve) | **GET** /api/cloud/floating-ipv4/{id}/ | 
*CloudApi* | [**cloudFloatingIpv4UnauthorizeCreate**](docs/Api/CloudApi.md#cloudfloatingipv4unauthorizecreate) | **POST** /api/cloud/floating-ipv4/{id}/unauthorize/ | 
*CloudApi* | [**cloudFloatingIpv6AuthorizationsList**](docs/Api/CloudApi.md#cloudfloatingipv6authorizationslist) | **GET** /api/cloud/floating-ipv6/{id}/authorizations/ | 
*CloudApi* | [**cloudFloatingIpv6AuthorizeCreate**](docs/Api/CloudApi.md#cloudfloatingipv6authorizecreate) | **POST** /api/cloud/floating-ipv6/{id}/authorize/ | 
*CloudApi* | [**cloudFloatingIpv6Create**](docs/Api/CloudApi.md#cloudfloatingipv6create) | **POST** /api/cloud/floating-ipv6/ | 
*CloudApi* | [**cloudFloatingIpv6Destroy**](docs/Api/CloudApi.md#cloudfloatingipv6destroy) | **DELETE** /api/cloud/floating-ipv6/{id}/ | 
*CloudApi* | [**cloudFloatingIpv6List**](docs/Api/CloudApi.md#cloudfloatingipv6list) | **GET** /api/cloud/floating-ipv6/ | 
*CloudApi* | [**cloudFloatingIpv6RdnsCreate**](docs/Api/CloudApi.md#cloudfloatingipv6rdnscreate) | **POST** /api/cloud/floating-ipv6/{id}/rdns/ | 
*CloudApi* | [**cloudFloatingIpv6RdnsRetrieve**](docs/Api/CloudApi.md#cloudfloatingipv6rdnsretrieve) | **GET** /api/cloud/floating-ipv6/{id}/rdns/ | 
*CloudApi* | [**cloudFloatingIpv6Retrieve**](docs/Api/CloudApi.md#cloudfloatingipv6retrieve) | **GET** /api/cloud/floating-ipv6/{id}/ | 
*CloudApi* | [**cloudFloatingIpv6UnauthorizeCreate**](docs/Api/CloudApi.md#cloudfloatingipv6unauthorizecreate) | **POST** /api/cloud/floating-ipv6/{id}/unauthorize/ | 
*CloudApi* | [**cloudGenerationsList**](docs/Api/CloudApi.md#cloudgenerationslist) | **GET** /api/cloud/generations/ | List hardware generations
*CloudApi* | [**cloudGenerationsRetrieve**](docs/Api/CloudApi.md#cloudgenerationsretrieve) | **GET** /api/cloud/generations/{slug}/ | 
*CloudApi* | [**cloudImagesList**](docs/Api/CloudApi.md#cloudimageslist) | **GET** /api/cloud/images/ | 
*CloudApi* | [**cloudImagesRetrieve**](docs/Api/CloudApi.md#cloudimagesretrieve) | **GET** /api/cloud/images/{id}/ | 
*CloudApi* | [**cloudIpv4Create**](docs/Api/CloudApi.md#cloudipv4create) | **POST** /api/cloud/ipv4/ | 
*CloudApi* | [**cloudIpv4Destroy**](docs/Api/CloudApi.md#cloudipv4destroy) | **DELETE** /api/cloud/ipv4/{id}/ | 
*CloudApi* | [**cloudIpv4DetachCreate**](docs/Api/CloudApi.md#cloudipv4detachcreate) | **POST** /api/cloud/ipv4/{id}/detach/ | 
*CloudApi* | [**cloudIpv4List**](docs/Api/CloudApi.md#cloudipv4list) | **GET** /api/cloud/ipv4/ | 
*CloudApi* | [**cloudIpv4RdnsCreate**](docs/Api/CloudApi.md#cloudipv4rdnscreate) | **POST** /api/cloud/ipv4/{id}/rdns/ | 
*CloudApi* | [**cloudIpv4RdnsRetrieve**](docs/Api/CloudApi.md#cloudipv4rdnsretrieve) | **GET** /api/cloud/ipv4/{id}/rdns/ | 
*CloudApi* | [**cloudIpv4Retrieve**](docs/Api/CloudApi.md#cloudipv4retrieve) | **GET** /api/cloud/ipv4/{id}/ | 
*CloudApi* | [**cloudIpv6Create**](docs/Api/CloudApi.md#cloudipv6create) | **POST** /api/cloud/ipv6/ | 
*CloudApi* | [**cloudIpv6Destroy**](docs/Api/CloudApi.md#cloudipv6destroy) | **DELETE** /api/cloud/ipv6/{id}/ | 
*CloudApi* | [**cloudIpv6DetachCreate**](docs/Api/CloudApi.md#cloudipv6detachcreate) | **POST** /api/cloud/ipv6/{id}/detach/ | 
*CloudApi* | [**cloudIpv6List**](docs/Api/CloudApi.md#cloudipv6list) | **GET** /api/cloud/ipv6/ | 
*CloudApi* | [**cloudIpv6RdnsCreate**](docs/Api/CloudApi.md#cloudipv6rdnscreate) | **POST** /api/cloud/ipv6/{id}/rdns/ | 
*CloudApi* | [**cloudIpv6RdnsRetrieve**](docs/Api/CloudApi.md#cloudipv6rdnsretrieve) | **GET** /api/cloud/ipv6/{id}/rdns/ | 
*CloudApi* | [**cloudIpv6Retrieve**](docs/Api/CloudApi.md#cloudipv6retrieve) | **GET** /api/cloud/ipv6/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksAddServerCreate**](docs/Api/CloudApi.md#cloudprivatenetworksaddservercreate) | **POST** /api/cloud/private-networks/{id}/add-server/ | 
*CloudApi* | [**cloudPrivateNetworksCreate**](docs/Api/CloudApi.md#cloudprivatenetworkscreate) | **POST** /api/cloud/private-networks/ | 
*CloudApi* | [**cloudPrivateNetworksDestroy**](docs/Api/CloudApi.md#cloudprivatenetworksdestroy) | **DELETE** /api/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksList**](docs/Api/CloudApi.md#cloudprivatenetworkslist) | **GET** /api/cloud/private-networks/ | 
*CloudApi* | [**cloudPrivateNetworksPartialUpdate**](docs/Api/CloudApi.md#cloudprivatenetworkspartialupdate) | **PATCH** /api/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksRemoveServerCreate**](docs/Api/CloudApi.md#cloudprivatenetworksremoveservercreate) | **POST** /api/cloud/private-networks/{id}/remove-server/ | 
*CloudApi* | [**cloudPrivateNetworksRetrieve**](docs/Api/CloudApi.md#cloudprivatenetworksretrieve) | **GET** /api/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudPrivateNetworksUpdate**](docs/Api/CloudApi.md#cloudprivatenetworksupdate) | **PUT** /api/cloud/private-networks/{id}/ | 
*CloudApi* | [**cloudServerPackagesByGenerationRetrieve**](docs/Api/CloudApi.md#cloudserverpackagesbygenerationretrieve) | **GET** /api/cloud/server-packages/by-generation/ | 
*CloudApi* | [**cloudServerPackagesList**](docs/Api/CloudApi.md#cloudserverpackageslist) | **GET** /api/cloud/server-packages/ | 
*CloudApi* | [**cloudServerPackagesRetrieve**](docs/Api/CloudApi.md#cloudserverpackagesretrieve) | **GET** /api/cloud/server-packages/{id}/ | 
*CloudApi* | [**cloudServersActivityRetrieve**](docs/Api/CloudApi.md#cloudserversactivityretrieve) | **GET** /api/cloud/servers/{id}/activity/ | 
*CloudApi* | [**cloudServersAttachIpv4Create**](docs/Api/CloudApi.md#cloudserversattachipv4create) | **POST** /api/cloud/servers/{id}/attach-ipv4/ | 
*CloudApi* | [**cloudServersAttachIpv6Create**](docs/Api/CloudApi.md#cloudserversattachipv6create) | **POST** /api/cloud/servers/{id}/attach-ipv6/ | 
*CloudApi* | [**cloudServersBootIsosList**](docs/Api/CloudApi.md#cloudserversbootisoslist) | **GET** /api/cloud/servers/{id}/boot-isos/ | 
*CloudApi* | [**cloudServersConsoleCreate**](docs/Api/CloudApi.md#cloudserversconsolecreate) | **POST** /api/cloud/servers/{id}/console/ | 
*CloudApi* | [**cloudServersCreate**](docs/Api/CloudApi.md#cloudserverscreate) | **POST** /api/cloud/servers/ | 
*CloudApi* | [**cloudServersDestroy**](docs/Api/CloudApi.md#cloudserversdestroy) | **DELETE** /api/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersDestroyProtectionCreate**](docs/Api/CloudApi.md#cloudserversdestroyprotectioncreate) | **POST** /api/cloud/servers/{id}/destroy-protection/ | 
*CloudApi* | [**cloudServersDetachIpv4Create**](docs/Api/CloudApi.md#cloudserversdetachipv4create) | **POST** /api/cloud/servers/{id}/detach-ipv4/ | 
*CloudApi* | [**cloudServersDetachIpv6Create**](docs/Api/CloudApi.md#cloudserversdetachipv6create) | **POST** /api/cloud/servers/{id}/detach-ipv6/ | 
*CloudApi* | [**cloudServersList**](docs/Api/CloudApi.md#cloudserverslist) | **GET** /api/cloud/servers/ | 
*CloudApi* | [**cloudServersModifyPackageCreate**](docs/Api/CloudApi.md#cloudserversmodifypackagecreate) | **POST** /api/cloud/servers/{id}/modify-package/ | 
*CloudApi* | [**cloudServersPartialUpdate**](docs/Api/CloudApi.md#cloudserverspartialupdate) | **PATCH** /api/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersPowerManagementCreate**](docs/Api/CloudApi.md#cloudserverspowermanagementcreate) | **POST** /api/cloud/servers/{id}/power-management/ | 
*CloudApi* | [**cloudServersPowerManagementRetrieve**](docs/Api/CloudApi.md#cloudserverspowermanagementretrieve) | **GET** /api/cloud/servers/{id}/power-management/ | 
*CloudApi* | [**cloudServersPublicInterfaceCreate**](docs/Api/CloudApi.md#cloudserverspublicinterfacecreate) | **POST** /api/cloud/servers/{id}/public-interface/ | 
*CloudApi* | [**cloudServersPublicInterfaceDestroy**](docs/Api/CloudApi.md#cloudserverspublicinterfacedestroy) | **DELETE** /api/cloud/servers/{id}/public-interface/ | 
*CloudApi* | [**cloudServersPublicInterfaceRetrieve**](docs/Api/CloudApi.md#cloudserverspublicinterfaceretrieve) | **GET** /api/cloud/servers/{id}/public-interface/ | 
*CloudApi* | [**cloudServersRescueEnterCreate**](docs/Api/CloudApi.md#cloudserversrescueentercreate) | **POST** /api/cloud/servers/{id}/rescue/enter/ | 
*CloudApi* | [**cloudServersRescueExitCreate**](docs/Api/CloudApi.md#cloudserversrescueexitcreate) | **POST** /api/cloud/servers/{id}/rescue/exit/ | 
*CloudApi* | [**cloudServersRetrieve**](docs/Api/CloudApi.md#cloudserversretrieve) | **GET** /api/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersRetryProvisionCreate**](docs/Api/CloudApi.md#cloudserversretryprovisioncreate) | **POST** /api/cloud/servers/{id}/retry-provision/ | 
*CloudApi* | [**cloudServersSnapshotsCreate**](docs/Api/CloudApi.md#cloudserverssnapshotscreate) | **POST** /api/cloud/servers/{id}/snapshots/ | 
*CloudApi* | [**cloudServersSnapshotsDestroy**](docs/Api/CloudApi.md#cloudserverssnapshotsdestroy) | **DELETE** /api/cloud/servers/{id}/snapshots/{snapshot_name}/ | 
*CloudApi* | [**cloudServersSnapshotsList**](docs/Api/CloudApi.md#cloudserverssnapshotslist) | **GET** /api/cloud/servers/{id}/snapshots/ | 
*CloudApi* | [**cloudServersSnapshotsRollbackCreate**](docs/Api/CloudApi.md#cloudserverssnapshotsrollbackcreate) | **POST** /api/cloud/servers/{id}/snapshots/{snapshot_name}/rollback/ | 
*CloudApi* | [**cloudServersTrafficRetrieve**](docs/Api/CloudApi.md#cloudserverstrafficretrieve) | **GET** /api/cloud/servers/{id}/traffic/ | 
*CloudApi* | [**cloudServersUpdate**](docs/Api/CloudApi.md#cloudserversupdate) | **PUT** /api/cloud/servers/{id}/ | 
*CloudApi* | [**cloudServersUsageRetrieve**](docs/Api/CloudApi.md#cloudserversusageretrieve) | **GET** /api/cloud/servers/{id}/usage/ | 
*CloudApi* | [**cloudServersVolumesCreate**](docs/Api/CloudApi.md#cloudserversvolumescreate) | **POST** /api/cloud/servers/{server_id}/volumes/ | 
*CloudApi* | [**cloudServersVolumesDestroy**](docs/Api/CloudApi.md#cloudserversvolumesdestroy) | **DELETE** /api/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudServersVolumesList**](docs/Api/CloudApi.md#cloudserversvolumeslist) | **GET** /api/cloud/servers/{server_id}/volumes/ | 
*CloudApi* | [**cloudServersVolumesPartialUpdate**](docs/Api/CloudApi.md#cloudserversvolumespartialupdate) | **PATCH** /api/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudServersVolumesRetrieve**](docs/Api/CloudApi.md#cloudserversvolumesretrieve) | **GET** /api/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudServersVolumesUpdate**](docs/Api/CloudApi.md#cloudserversvolumesupdate) | **PUT** /api/cloud/servers/{server_id}/volumes/{volume_id}/ | 
*CloudApi* | [**cloudStorageProductsList**](docs/Api/CloudApi.md#cloudstorageproductslist) | **GET** /api/cloud/storage-products/ | 
*CloudApi* | [**cloudStorageProductsRetrieve**](docs/Api/CloudApi.md#cloudstorageproductsretrieve) | **GET** /api/cloud/storage-products/{id}/ | 
*CloudApi* | [**cloudVolumesAttachCreate**](docs/Api/CloudApi.md#cloudvolumesattachcreate) | **POST** /api/cloud/volumes/{id}/attach/ | 
*CloudApi* | [**cloudVolumesDestroy**](docs/Api/CloudApi.md#cloudvolumesdestroy) | **DELETE** /api/cloud/volumes/{id}/ | 
*CloudApi* | [**cloudVolumesDetachCreate**](docs/Api/CloudApi.md#cloudvolumesdetachcreate) | **POST** /api/cloud/volumes/{id}/detach/ | 
*CloudApi* | [**cloudVolumesList**](docs/Api/CloudApi.md#cloudvolumeslist) | **GET** /api/cloud/volumes/ | 
*CloudApi* | [**cloudVolumesPartialUpdate**](docs/Api/CloudApi.md#cloudvolumespartialupdate) | **PATCH** /api/cloud/volumes/{id}/ | 
*CloudApi* | [**cloudVolumesRetrieve**](docs/Api/CloudApi.md#cloudvolumesretrieve) | **GET** /api/cloud/volumes/{id}/ | 
*CloudApi* | [**cloudVolumesUpdate**](docs/Api/CloudApi.md#cloudvolumesupdate) | **PUT** /api/cloud/volumes/{id}/ | 
*DedicatedApi* | [**dedicatedServersList**](docs/Api/DedicatedApi.md#dedicatedserverslist) | **GET** /api/dedicated/servers/ | 
*DedicatedApi* | [**dedicatedServersPowerCreate**](docs/Api/DedicatedApi.md#dedicatedserverspowercreate) | **POST** /api/dedicated/servers/{id}/power/ | 
*DedicatedApi* | [**dedicatedServersRdnsCreate**](docs/Api/DedicatedApi.md#dedicatedserversrdnscreate) | **POST** /api/dedicated/servers/{id}/rdns/ | 
*DedicatedApi* | [**dedicatedServersReinstallCreate**](docs/Api/DedicatedApi.md#dedicatedserversreinstallcreate) | **POST** /api/dedicated/servers/{id}/reinstall/ | 
*DedicatedApi* | [**dedicatedServersRetrieve**](docs/Api/DedicatedApi.md#dedicatedserversretrieve) | **GET** /api/dedicated/servers/{id}/ | 
*DomainApi* | [**domainDomainCancelCreate**](docs/Api/DomainApi.md#domaindomaincancelcreate) | **POST** /api/domain/domain/{domain}/cancel/ | 
*DomainApi* | [**domainDomainCheckAvailabilityCreate**](docs/Api/DomainApi.md#domaindomaincheckavailabilitycreate) | **POST** /api/domain/domain/check-availability/ | 
*DomainApi* | [**domainDomainContactsCreate**](docs/Api/DomainApi.md#domaindomaincontactscreate) | **POST** /api/domain/domain/{domain}/contacts/ | 
*DomainApi* | [**domainDomainCreate**](docs/Api/DomainApi.md#domaindomaincreate) | **POST** /api/domain/domain/ | 
*DomainApi* | [**domainDomainDnsCreate**](docs/Api/DomainApi.md#domaindomaindnscreate) | **POST** /api/domain/domain/{domain}/dns/ | 
*DomainApi* | [**domainDomainDnsDestroy**](docs/Api/DomainApi.md#domaindomaindnsdestroy) | **DELETE** /api/domain/domain/{domain}/dns/{name}/ | 
*DomainApi* | [**domainDomainDnsList**](docs/Api/DomainApi.md#domaindomaindnslist) | **GET** /api/domain/domain/{domain}/dns/ | 
*DomainApi* | [**domainDomainList**](docs/Api/DomainApi.md#domaindomainlist) | **GET** /api/domain/domain/ | 
*DomainApi* | [**domainDomainNameserversCreate**](docs/Api/DomainApi.md#domaindomainnameserverscreate) | **POST** /api/domain/domain/{domain}/nameservers/ | 
*DomainApi* | [**domainDomainPartialUpdate**](docs/Api/DomainApi.md#domaindomainpartialupdate) | **PATCH** /api/domain/domain/{domain}/ | 
*DomainApi* | [**domainDomainRenewCreate**](docs/Api/DomainApi.md#domaindomainrenewcreate) | **POST** /api/domain/domain/{domain}/renew/ | 
*DomainApi* | [**domainDomainRetrieve**](docs/Api/DomainApi.md#domaindomainretrieve) | **GET** /api/domain/domain/{domain}/ | 
*DomainApi* | [**domainDomainTransferRoDomainCreate**](docs/Api/DomainApi.md#domaindomaintransferrodomaincreate) | **POST** /api/domain/domain/transfer-ro-domain/ | 
*DomainApi* | [**domainDomainUpdate**](docs/Api/DomainApi.md#domaindomainupdate) | **PUT** /api/domain/domain/{domain}/ | 
*DomainApi* | [**domainRegistrantsCreate**](docs/Api/DomainApi.md#domainregistrantscreate) | **POST** /api/domain/registrants/ | 
*DomainApi* | [**domainRegistrantsDestroy**](docs/Api/DomainApi.md#domainregistrantsdestroy) | **DELETE** /api/domain/registrants/{id}/ | 
*DomainApi* | [**domainRegistrantsList**](docs/Api/DomainApi.md#domainregistrantslist) | **GET** /api/domain/registrants/ | 
*DomainApi* | [**domainRegistrantsPartialUpdate**](docs/Api/DomainApi.md#domainregistrantspartialupdate) | **PATCH** /api/domain/registrants/{id}/ | 
*DomainApi* | [**domainRegistrantsRetrieve**](docs/Api/DomainApi.md#domainregistrantsretrieve) | **GET** /api/domain/registrants/{id}/ | 
*DomainApi* | [**domainRegistrantsUpdate**](docs/Api/DomainApi.md#domainregistrantsupdate) | **PUT** /api/domain/registrants/{id}/ | 
*DomainApi* | [**domainTldList**](docs/Api/DomainApi.md#domaintldlist) | **GET** /api/domain/tld/ | 
*DomainApi* | [**domainTldRetrieve**](docs/Api/DomainApi.md#domaintldretrieve) | **GET** /api/domain/tld/{id}/ | 
*EmailApi* | [**emailApiCredentialsCreate**](docs/Api/EmailApi.md#emailapicredentialscreate) | **POST** /api/email/api_credentials/ | 
*EmailApi* | [**emailApiCredentialsDestroy**](docs/Api/EmailApi.md#emailapicredentialsdestroy) | **DELETE** /api/email/api_credentials/{id}/ | 
*EmailApi* | [**emailApiCredentialsList**](docs/Api/EmailApi.md#emailapicredentialslist) | **GET** /api/email/api_credentials/ | 
*EmailApi* | [**emailApiCredentialsRetrieve**](docs/Api/EmailApi.md#emailapicredentialsretrieve) | **GET** /api/email/api_credentials/{id}/ | 
*EmailApi* | [**emailDomainsCreate**](docs/Api/EmailApi.md#emaildomainscreate) | **POST** /api/email/domains/ | 
*EmailApi* | [**emailDomainsInboundRoutesCreate**](docs/Api/EmailApi.md#emaildomainsinboundroutescreate) | **POST** /api/email/domains/{domain_pk}/inbound_routes/ | 
*EmailApi* | [**emailDomainsInboundRoutesList**](docs/Api/EmailApi.md#emaildomainsinboundrouteslist) | **GET** /api/email/domains/{domain_pk}/inbound_routes/ | 
*EmailApi* | [**emailDomainsList**](docs/Api/EmailApi.md#emaildomainslist) | **GET** /api/email/domains/ | 
*EmailApi* | [**emailDomainsRetrieve**](docs/Api/EmailApi.md#emaildomainsretrieve) | **GET** /api/email/domains/{id}/ | 
*EmailApi* | [**emailDomainsRotateDkimCreate**](docs/Api/EmailApi.md#emaildomainsrotatedkimcreate) | **POST** /api/email/domains/{id}/rotate_dkim/ | 
*EmailApi* | [**emailDomainsToggleInboundCreate**](docs/Api/EmailApi.md#emaildomainstoggleinboundcreate) | **POST** /api/email/domains/{id}/toggle_inbound/ | 
*EmailApi* | [**emailDomainsVerifyCreate**](docs/Api/EmailApi.md#emaildomainsverifycreate) | **POST** /api/email/domains/{id}/verify/ | 
*EmailApi* | [**emailInboundRoutesCreate**](docs/Api/EmailApi.md#emailinboundroutescreate) | **POST** /api/email/inbound_routes/ | 
*EmailApi* | [**emailInboundRoutesDestroy**](docs/Api/EmailApi.md#emailinboundroutesdestroy) | **DELETE** /api/email/inbound_routes/{id}/ | 
*EmailApi* | [**emailInboundRoutesList**](docs/Api/EmailApi.md#emailinboundrouteslist) | **GET** /api/email/inbound_routes/ | 
*EmailApi* | [**emailInboundRoutesPartialUpdate**](docs/Api/EmailApi.md#emailinboundroutespartialupdate) | **PATCH** /api/email/inbound_routes/{id}/ | 
*EmailApi* | [**emailInboundRoutesRetrieve**](docs/Api/EmailApi.md#emailinboundroutesretrieve) | **GET** /api/email/inbound_routes/{id}/ | 
*EmailApi* | [**emailMessagesRetrieve**](docs/Api/EmailApi.md#emailmessagesretrieve) | **GET** /api/email/messages/{message_id}/ | 
*EmailApi* | [**emailSandboxAddressesCreate**](docs/Api/EmailApi.md#emailsandboxaddressescreate) | **POST** /api/email/sandbox_addresses/ | 
*EmailApi* | [**emailSandboxAddressesDestroy**](docs/Api/EmailApi.md#emailsandboxaddressesdestroy) | **DELETE** /api/email/sandbox_addresses/{id}/ | 
*EmailApi* | [**emailSandboxAddressesList**](docs/Api/EmailApi.md#emailsandboxaddresseslist) | **GET** /api/email/sandbox_addresses/ | 
*EmailApi* | [**emailSandboxAddressesRetrieve**](docs/Api/EmailApi.md#emailsandboxaddressesretrieve) | **GET** /api/email/sandbox_addresses/{id}/ | 
*EmailApi* | [**emailSendCreate**](docs/Api/EmailApi.md#emailsendcreate) | **POST** /api/email/send/ | 
*EmailApi* | [**emailServicesApiCredentialsCreate**](docs/Api/EmailApi.md#emailservicesapicredentialscreate) | **POST** /api/email/services/{service_pk}/api_credentials/ | 
*EmailApi* | [**emailServicesApiCredentialsList**](docs/Api/EmailApi.md#emailservicesapicredentialslist) | **GET** /api/email/services/{service_pk}/api_credentials/ | 
*EmailApi* | [**emailServicesCancelCreate**](docs/Api/EmailApi.md#emailservicescancelcreate) | **POST** /api/email/services/{id}/cancel/ | 
*EmailApi* | [**emailServicesChangeTierPartialUpdate**](docs/Api/EmailApi.md#emailserviceschangetierpartialupdate) | **PATCH** /api/email/services/{id}/change_tier/ | 
*EmailApi* | [**emailServicesCreate**](docs/Api/EmailApi.md#emailservicescreate) | **POST** /api/email/services/ | 
*EmailApi* | [**emailServicesDedicatedIpCreate**](docs/Api/EmailApi.md#emailservicesdedicatedipcreate) | **POST** /api/email/services/{id}/dedicated_ip/ | 
*EmailApi* | [**emailServicesDedicatedIpDestroy**](docs/Api/EmailApi.md#emailservicesdedicatedipdestroy) | **DELETE** /api/email/services/{id}/dedicated_ip/ | 
*EmailApi* | [**emailServicesDomainsCreate**](docs/Api/EmailApi.md#emailservicesdomainscreate) | **POST** /api/email/services/{service_pk}/domains/ | 
*EmailApi* | [**emailServicesDomainsList**](docs/Api/EmailApi.md#emailservicesdomainslist) | **GET** /api/email/services/{service_pk}/domains/ | 
*EmailApi* | [**emailServicesList**](docs/Api/EmailApi.md#emailserviceslist) | **GET** /api/email/services/ | 
*EmailApi* | [**emailServicesMessagesRetrieve**](docs/Api/EmailApi.md#emailservicesmessagesretrieve) | **GET** /api/email/services/{service_pk}/messages/ | 
*EmailApi* | [**emailServicesPartialUpdate**](docs/Api/EmailApi.md#emailservicespartialupdate) | **PATCH** /api/email/services/{id}/ | 
*EmailApi* | [**emailServicesRestoreCreate**](docs/Api/EmailApi.md#emailservicesrestorecreate) | **POST** /api/email/services/{id}/restore/ | 
*EmailApi* | [**emailServicesRetrieve**](docs/Api/EmailApi.md#emailservicesretrieve) | **GET** /api/email/services/{id}/ | 
*EmailApi* | [**emailServicesSandboxAddressesCreate**](docs/Api/EmailApi.md#emailservicessandboxaddressescreate) | **POST** /api/email/services/{service_pk}/sandbox_addresses/ | 
*EmailApi* | [**emailServicesSandboxAddressesList**](docs/Api/EmailApi.md#emailservicessandboxaddresseslist) | **GET** /api/email/services/{service_pk}/sandbox_addresses/ | 
*EmailApi* | [**emailServicesSmtpCredentialsCreate**](docs/Api/EmailApi.md#emailservicessmtpcredentialscreate) | **POST** /api/email/services/{service_pk}/smtp_credentials/ | 
*EmailApi* | [**emailServicesSmtpCredentialsList**](docs/Api/EmailApi.md#emailservicessmtpcredentialslist) | **GET** /api/email/services/{service_pk}/smtp_credentials/ | 
*EmailApi* | [**emailServicesStatsRetrieve**](docs/Api/EmailApi.md#emailservicesstatsretrieve) | **GET** /api/email/services/{service_pk}/stats/ | 
*EmailApi* | [**emailServicesSuppressionsCreate**](docs/Api/EmailApi.md#emailservicessuppressionscreate) | **POST** /api/email/services/{service_pk}/suppressions/ | 
*EmailApi* | [**emailServicesSuppressionsList**](docs/Api/EmailApi.md#emailservicessuppressionslist) | **GET** /api/email/services/{service_pk}/suppressions/ | 
*EmailApi* | [**emailSmtpCredentialsCreate**](docs/Api/EmailApi.md#emailsmtpcredentialscreate) | **POST** /api/email/smtp_credentials/ | 
*EmailApi* | [**emailSmtpCredentialsDestroy**](docs/Api/EmailApi.md#emailsmtpcredentialsdestroy) | **DELETE** /api/email/smtp_credentials/{id}/ | 
*EmailApi* | [**emailSmtpCredentialsList**](docs/Api/EmailApi.md#emailsmtpcredentialslist) | **GET** /api/email/smtp_credentials/ | 
*EmailApi* | [**emailSmtpCredentialsRetrieve**](docs/Api/EmailApi.md#emailsmtpcredentialsretrieve) | **GET** /api/email/smtp_credentials/{id}/ | 
*EmailApi* | [**emailSuppressionsCreate**](docs/Api/EmailApi.md#emailsuppressionscreate) | **POST** /api/email/suppressions/ | 
*EmailApi* | [**emailSuppressionsDestroy**](docs/Api/EmailApi.md#emailsuppressionsdestroy) | **DELETE** /api/email/suppressions/{id}/ | 
*EmailApi* | [**emailSuppressionsList**](docs/Api/EmailApi.md#emailsuppressionslist) | **GET** /api/email/suppressions/ | 
*EmailApi* | [**emailSuppressionsRetrieve**](docs/Api/EmailApi.md#emailsuppressionsretrieve) | **GET** /api/email/suppressions/{id}/ | 
*FreednsApi* | [**freednsDnsActivateCreate**](docs/Api/FreednsApi.md#freednsdnsactivatecreate) | **POST** /api/freedns/dns/activate/ | 
*FreednsApi* | [**freednsDnsAddRecordCreate**](docs/Api/FreednsApi.md#freednsdnsaddrecordcreate) | **POST** /api/freedns/dns/add-record/ | 
*FreednsApi* | [**freednsDnsDeactivateCreate**](docs/Api/FreednsApi.md#freednsdnsdeactivatecreate) | **POST** /api/freedns/dns/deactivate/ | 
*FreednsApi* | [**freednsDnsDeleteRecordCreate**](docs/Api/FreednsApi.md#freednsdnsdeleterecordcreate) | **POST** /api/freedns/dns/delete-record/ | 
*FreednsApi* | [**freednsDnsList**](docs/Api/FreednsApi.md#freednsdnslist) | **GET** /api/freedns/dns/ | 
*FreednsApi* | [**freednsDnsRecordsList**](docs/Api/FreednsApi.md#freednsdnsrecordslist) | **GET** /api/freedns/dns/records/ | 
*HostingApi* | [**hostingHostingChangePasswordCreate**](docs/Api/HostingApi.md#hostinghostingchangepasswordcreate) | **POST** /api/hosting/hosting/{id}/change-password/ | 
*HostingApi* | [**hostingHostingList**](docs/Api/HostingApi.md#hostinghostinglist) | **GET** /api/hosting/hosting/ | 
*HostingApi* | [**hostingHostingRetrieve**](docs/Api/HostingApi.md#hostinghostingretrieve) | **GET** /api/hosting/hosting/{id}/ | 
*KubernetesApi* | [**kubernetesClusterTypesList**](docs/Api/KubernetesApi.md#kubernetesclustertypeslist) | **GET** /api/kubernetes/cluster-types/ | 
*KubernetesApi* | [**kubernetesClustersConnectVmCreate**](docs/Api/KubernetesApi.md#kubernetesclustersconnectvmcreate) | **POST** /api/kubernetes/clusters/{id}/connect-vm/ | 
*KubernetesApi* | [**kubernetesClustersConnectedVmsRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersconnectedvmsretrieve) | **GET** /api/kubernetes/clusters/{id}/connected-vms/ | 
*KubernetesApi* | [**kubernetesClustersCreate**](docs/Api/KubernetesApi.md#kubernetesclusterscreate) | **POST** /api/kubernetes/clusters/ | 
*KubernetesApi* | [**kubernetesClustersDestroy**](docs/Api/KubernetesApi.md#kubernetesclustersdestroy) | **DELETE** /api/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersDisconnectVmCreate**](docs/Api/KubernetesApi.md#kubernetesclustersdisconnectvmcreate) | **POST** /api/kubernetes/clusters/{id}/disconnect-vm/ | 
*KubernetesApi* | [**kubernetesClustersEligibleVmsRetrieve**](docs/Api/KubernetesApi.md#kubernetesclusterseligiblevmsretrieve) | **GET** /api/kubernetes/clusters/{id}/eligible-vms/ | 
*KubernetesApi* | [**kubernetesClustersEncryptionCreate**](docs/Api/KubernetesApi.md#kubernetesclustersencryptioncreate) | **POST** /api/kubernetes/clusters/{id}/encryption/ | 
*KubernetesApi* | [**kubernetesClustersEncryptionRecheckCreate**](docs/Api/KubernetesApi.md#kubernetesclustersencryptionrecheckcreate) | **POST** /api/kubernetes/clusters/{id}/encryption/recheck/ | 
*KubernetesApi* | [**kubernetesClustersEncryptionReconcileCreate**](docs/Api/KubernetesApi.md#kubernetesclustersencryptionreconcilecreate) | **POST** /api/kubernetes/clusters/{id}/encryption/reconcile/ | 
*KubernetesApi* | [**kubernetesClustersEncryptionRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersencryptionretrieve) | **GET** /api/kubernetes/clusters/{id}/encryption/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesCreate**](docs/Api/KubernetesApi.md#kubernetesclustershttproutescreate) | **POST** /api/kubernetes/clusters/{cluster_id}/httproutes/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesDestroy**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesList**](docs/Api/KubernetesApi.md#kubernetesclustershttprouteslist) | **GET** /api/kubernetes/clusters/{cluster_id}/httproutes/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclustershttproutespartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersHttproutesUpdate**](docs/Api/KubernetesApi.md#kubernetesclustershttproutesupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/httproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersKubeVersionUpgradeCreate**](docs/Api/KubernetesApi.md#kubernetesclusterskubeversionupgradecreate) | **POST** /api/kubernetes/clusters/{id}/kube-version-upgrade/ | 
*KubernetesApi* | [**kubernetesClustersKubeconfigCreate**](docs/Api/KubernetesApi.md#kubernetesclusterskubeconfigcreate) | **POST** /api/kubernetes/clusters/{id}/kubeconfig/ | 
*KubernetesApi* | [**kubernetesClustersKubeconfigRetrieve**](docs/Api/KubernetesApi.md#kubernetesclusterskubeconfigretrieve) | **GET** /api/kubernetes/clusters/{id}/kubeconfig/ | 
*KubernetesApi* | [**kubernetesClustersLbFirewallCreate**](docs/Api/KubernetesApi.md#kubernetesclusterslbfirewallcreate) | **POST** /api/kubernetes/clusters/{cluster_id}/lb-firewall/ | 
*KubernetesApi* | [**kubernetesClustersLbFirewallDestroy**](docs/Api/KubernetesApi.md#kubernetesclusterslbfirewalldestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/lb-firewall/{id}/ | 
*KubernetesApi* | [**kubernetesClustersLbFirewallList**](docs/Api/KubernetesApi.md#kubernetesclusterslbfirewalllist) | **GET** /api/kubernetes/clusters/{cluster_id}/lb-firewall/ | 
*KubernetesApi* | [**kubernetesClustersLbFirewallPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclusterslbfirewallpartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/lb-firewall/{id}/ | 
*KubernetesApi* | [**kubernetesClustersLbFirewallRetrieve**](docs/Api/KubernetesApi.md#kubernetesclusterslbfirewallretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/lb-firewall/{id}/ | 
*KubernetesApi* | [**kubernetesClustersLbFirewallUpdate**](docs/Api/KubernetesApi.md#kubernetesclusterslbfirewallupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/lb-firewall/{id}/ | 
*KubernetesApi* | [**kubernetesClustersList**](docs/Api/KubernetesApi.md#kubernetesclusterslist) | **GET** /api/kubernetes/clusters/ | 
*KubernetesApi* | [**kubernetesClustersNodeOperationsCancelCreate**](docs/Api/KubernetesApi.md#kubernetesclustersnodeoperationscancelcreate) | **POST** /api/kubernetes/clusters/{cluster_id}/node-operations/{id}/cancel/ | 
*KubernetesApi* | [**kubernetesClustersNodeOperationsList**](docs/Api/KubernetesApi.md#kubernetesclustersnodeoperationslist) | **GET** /api/kubernetes/clusters/{cluster_id}/node-operations/ | 
*KubernetesApi* | [**kubernetesClustersNodeOperationsResumeCreate**](docs/Api/KubernetesApi.md#kubernetesclustersnodeoperationsresumecreate) | **POST** /api/kubernetes/clusters/{cluster_id}/node-operations/{id}/resume/ | 
*KubernetesApi* | [**kubernetesClustersNodeOperationsRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersnodeoperationsretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/node-operations/{id}/ | 
*KubernetesApi* | [**kubernetesClustersNodeOperationsRetryCreate**](docs/Api/KubernetesApi.md#kubernetesclustersnodeoperationsretrycreate) | **POST** /api/kubernetes/clusters/{cluster_id}/node-operations/{id}/retry/ | 
*KubernetesApi* | [**kubernetesClustersPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclusterspartialupdate) | **PATCH** /api/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPoolRemovalJournalsList**](docs/Api/KubernetesApi.md#kubernetesclusterspoolremovaljournalslist) | **GET** /api/kubernetes/clusters/{cluster_id}/pool-removal-journals/ | 
*KubernetesApi* | [**kubernetesClustersPoolRemovalJournalsResumeCreate**](docs/Api/KubernetesApi.md#kubernetesclusterspoolremovaljournalsresumecreate) | **POST** /api/kubernetes/clusters/{cluster_id}/pool-removal-journals/{id}/resume/ | 
*KubernetesApi* | [**kubernetesClustersPoolRemovalJournalsRetrieve**](docs/Api/KubernetesApi.md#kubernetesclusterspoolremovaljournalsretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/pool-removal-journals/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsCreate**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardscreate) | **POST** /api/kubernetes/clusters/{cluster_id}/port-forwards/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsDestroy**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsList**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardslist) | **GET** /api/kubernetes/clusters/{cluster_id}/port-forwards/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardspartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersPortForwardsUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersportforwardsupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/port-forwards/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsCreate**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolscreate) | **POST** /api/kubernetes/clusters/{cluster_id}/resource-pools/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsDestroy**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsList**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolslist) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesDestroy**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodesdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesList**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodeslist) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesMetricsRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodesmetricsretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/metrics/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesRebootCreate**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodesrebootcreate) | **POST** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/reboot/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodesretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsNodesRrdRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsnodesrrdretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{pool_id}/nodes/{id}/rrd/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolspartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersResourcePoolsUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersresourcepoolsupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/resource-pools/{id}/ | 
*KubernetesApi* | [**kubernetesClustersRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersretrieve) | **GET** /api/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTalosVersionUpgradeCreate**](docs/Api/KubernetesApi.md#kubernetesclusterstalosversionupgradecreate) | **POST** /api/kubernetes/clusters/{id}/talos-version-upgrade/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesCreate**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutescreate) | **POST** /api/kubernetes/clusters/{cluster_id}/tcproutes/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesDestroy**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesList**](docs/Api/KubernetesApi.md#kubernetesclusterstcprouteslist) | **GET** /api/kubernetes/clusters/{cluster_id}/tcproutes/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutespartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesRetrieve**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersTcproutesUpdate**](docs/Api/KubernetesApi.md#kubernetesclusterstcproutesupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/tcproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersToggleCloudVmAccessCreate**](docs/Api/KubernetesApi.md#kubernetesclusterstogglecloudvmaccesscreate) | **POST** /api/kubernetes/clusters/{id}/toggle-cloud-vm-access/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesCreate**](docs/Api/KubernetesApi.md#kubernetesclustersudproutescreate) | **POST** /api/kubernetes/clusters/{cluster_id}/udproutes/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesDestroy**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesdestroy) | **DELETE** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesList**](docs/Api/KubernetesApi.md#kubernetesclustersudprouteslist) | **GET** /api/kubernetes/clusters/{cluster_id}/udproutes/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesPartialUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersudproutespartialupdate) | **PATCH** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesRetrieve**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesretrieve) | **GET** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUdproutesUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersudproutesupdate) | **PUT** /api/kubernetes/clusters/{cluster_id}/udproutes/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUpdate**](docs/Api/KubernetesApi.md#kubernetesclustersupdate) | **PUT** /api/kubernetes/clusters/{id}/ | 
*KubernetesApi* | [**kubernetesClustersUpgradeFeatureCreate**](docs/Api/KubernetesApi.md#kubernetesclustersupgradefeaturecreate) | **POST** /api/kubernetes/clusters/{id}/upgrade-feature/ | 
*KubernetesApi* | [**kubernetesClustersUpgradeLbCreate**](docs/Api/KubernetesApi.md#kubernetesclustersupgradelbcreate) | **POST** /api/kubernetes/clusters/{id}/upgrade-lb/ | 
*OApi* | [**oRegisterCreate**](docs/Api/OApi.md#oregistercreate) | **POST** /o/register | 
*SchemaApi* | [**schemaRetrieve**](docs/Api/SchemaApi.md#schemaretrieve) | **GET** /api/schema/ | 
*SupportApi* | [**supportDepartmentsList**](docs/Api/SupportApi.md#supportdepartmentslist) | **GET** /api/support/departments/ | 
*SupportApi* | [**supportTicketsCloseCreate**](docs/Api/SupportApi.md#supportticketsclosecreate) | **POST** /api/support/tickets/{id}/close/ | 
*SupportApi* | [**supportTicketsCreate**](docs/Api/SupportApi.md#supportticketscreate) | **POST** /api/support/tickets/ | 
*SupportApi* | [**supportTicketsList**](docs/Api/SupportApi.md#supportticketslist) | **GET** /api/support/tickets/ | 
*SupportApi* | [**supportTicketsMessagesAttachmentRetrieve**](docs/Api/SupportApi.md#supportticketsmessagesattachmentretrieve) | **GET** /api/support/tickets/{id}/messages/{message_id}/attachment/ | 
*SupportApi* | [**supportTicketsReopenCreate**](docs/Api/SupportApi.md#supportticketsreopencreate) | **POST** /api/support/tickets/{id}/reopen/ | 
*SupportApi* | [**supportTicketsReplyCreate**](docs/Api/SupportApi.md#supportticketsreplycreate) | **POST** /api/support/tickets/{id}/reply/ | 
*SupportApi* | [**supportTicketsRetrieve**](docs/Api/SupportApi.md#supportticketsretrieve) | **GET** /api/support/tickets/{id}/ | 

## Models

- [APITokenCreate](docs/Model/APITokenCreate.md)
- [APITokenCreateRequest](docs/Model/APITokenCreateRequest.md)
- [APITokenList](docs/Model/APITokenList.md)
- [ActivateFreeDNSRequest](docs/Model/ActivateFreeDNSRequest.md)
- [ActivateFreeDNSResponse](docs/Model/ActivateFreeDNSResponse.md)
- [ActivityLogEntry](docs/Model/ActivityLogEntry.md)
- [ActivityLogResponse](docs/Model/ActivityLogResponse.md)
- [AddServerResponse](docs/Model/AddServerResponse.md)
- [Address](docs/Model/Address.md)
- [AddressRequest](docs/Model/AddressRequest.md)
- [ApiCredential](docs/Model/ApiCredential.md)
- [ApiCredentialCreated](docs/Model/ApiCredentialCreated.md)
- [AttachIPv4Request](docs/Model/AttachIPv4Request.md)
- [AttachIPv4Response](docs/Model/AttachIPv4Response.md)
- [AttachIPv6Request](docs/Model/AttachIPv6Request.md)
- [AttachIPv6Response](docs/Model/AttachIPv6Response.md)
- [AttachVolume](docs/Model/AttachVolume.md)
- [AttachVolumeRequest](docs/Model/AttachVolumeRequest.md)
- [AttachmentRequest](docs/Model/AttachmentRequest.md)
- [BlankEnum](docs/Model/BlankEnum.md)
- [BootISO](docs/Model/BootISO.md)
- [Bucket](docs/Model/Bucket.md)
- [BucketCancelResponse](docs/Model/BucketCancelResponse.md)
- [BucketCreateRequest](docs/Model/BucketCreateRequest.md)
- [BucketCredentials](docs/Model/BucketCredentials.md)
- [BucketResizeRequest](docs/Model/BucketResizeRequest.md)
- [BucketVisibilityRequest](docs/Model/BucketVisibilityRequest.md)
- [CLISessionCreateResponse](docs/Model/CLISessionCreateResponse.md)
- [CLISessionPollResponse](docs/Model/CLISessionPollResponse.md)
- [CLISessionPollResponseStatusEnum](docs/Model/CLISessionPollResponseStatusEnum.md)
- [CancelServiceResponse](docs/Model/CancelServiceResponse.md)
- [CategoryEnum](docs/Model/CategoryEnum.md)
- [ChangeBillingCycleRequest](docs/Model/ChangeBillingCycleRequest.md)
- [ChangeBillingCycleResponse](docs/Model/ChangeBillingCycleResponse.md)
- [ChangeCompanyRequest](docs/Model/ChangeCompanyRequest.md)
- [ChangeCompanyResponse](docs/Model/ChangeCompanyResponse.md)
- [ChangePasswordRequest](docs/Model/ChangePasswordRequest.md)
- [CheckAvailability](docs/Model/CheckAvailability.md)
- [CheckAvailabilityRequest](docs/Model/CheckAvailabilityRequest.md)
- [ClusterAddRequest](docs/Model/ClusterAddRequest.md)
- [ClusterAddResponse](docs/Model/ClusterAddResponse.md)
- [ClusterDetail](docs/Model/ClusterDetail.md)
- [ClusterDetailRequest](docs/Model/ClusterDetailRequest.md)
- [ClusterEncryption](docs/Model/ClusterEncryption.md)
- [ClusterEncryptionError](docs/Model/ClusterEncryptionError.md)
- [ClusterEncryptionOperation](docs/Model/ClusterEncryptionOperation.md)
- [ClusterEncryptionReconcileRequest](docs/Model/ClusterEncryptionReconcileRequest.md)
- [ClusterEncryptionRefusal](docs/Model/ClusterEncryptionRefusal.md)
- [ClusterEncryptionRequest](docs/Model/ClusterEncryptionRequest.md)
- [ClusterEncryptionStatusEnum](docs/Model/ClusterEncryptionStatusEnum.md)
- [ClusterPackage](docs/Model/ClusterPackage.md)
- [ClusterType](docs/Model/ClusterType.md)
- [ClusterTypeEnum](docs/Model/ClusterTypeEnum.md)
- [Company](docs/Model/Company.md)
- [CompanyRequest](docs/Model/CompanyRequest.md)
- [ConnectVMRequest](docs/Model/ConnectVMRequest.md)
- [ConnectVMResponse](docs/Model/ConnectVMResponse.md)
- [ConnectedVM](docs/Model/ConnectedVM.md)
- [ConnectedVMsResponse](docs/Model/ConnectedVMsResponse.md)
- [ConsoleToken](docs/Model/ConsoleToken.md)
- [ContactTypeEnum](docs/Model/ContactTypeEnum.md)
- [ContactsUpdateRequest](docs/Model/ContactsUpdateRequest.md)
- [ContactsUpdateResponse](docs/Model/ContactsUpdateResponse.md)
- [CountryEnum](docs/Model/CountryEnum.md)
- [CredentialCreateRequest](docs/Model/CredentialCreateRequest.md)
- [DNSGlue](docs/Model/DNSGlue.md)
- [DNSGlueRequest](docs/Model/DNSGlueRequest.md)
- [DNSRecord](docs/Model/DNSRecord.md)
- [DNSRecordCreateRequest](docs/Model/DNSRecordCreateRequest.md)
- [DNSRecordCreateTypeEnum](docs/Model/DNSRecordCreateTypeEnum.md)
- [DNSRecordMutateResponse](docs/Model/DNSRecordMutateResponse.md)
- [DeactivateFreeDNSRequest](docs/Model/DeactivateFreeDNSRequest.md)
- [DeactivateFreeDNSResponse](docs/Model/DeactivateFreeDNSResponse.md)
- [DedicatedRDNSRequest](docs/Model/DedicatedRDNSRequest.md)
- [DedicatedServer](docs/Model/DedicatedServer.md)
- [DedicatedServerIP](docs/Model/DedicatedServerIP.md)
- [DedicatedServerStatus](docs/Model/DedicatedServerStatus.md)
- [DeleteRecordRequest](docs/Model/DeleteRecordRequest.md)
- [DeleteRecordResponse](docs/Model/DeleteRecordResponse.md)
- [Department](docs/Model/Department.md)
- [Deposit](docs/Model/Deposit.md)
- [DepositCreateRequest](docs/Model/DepositCreateRequest.md)
- [DepositStatusEnum](docs/Model/DepositStatusEnum.md)
- [DestroyProtectionRequest](docs/Model/DestroyProtectionRequest.md)
- [DestroyProtectionResponse](docs/Model/DestroyProtectionResponse.md)
- [DetachIPv4Response](docs/Model/DetachIPv4Response.md)
- [DetachIPv6](docs/Model/DetachIPv6.md)
- [DetachIPv6Response](docs/Model/DetachIPv6Response.md)
- [DetachVolume](docs/Model/DetachVolume.md)
- [DisconnectVMRequest](docs/Model/DisconnectVMRequest.md)
- [DisconnectVMResponse](docs/Model/DisconnectVMResponse.md)
- [DnsSourceEnum](docs/Model/DnsSourceEnum.md)
- [Domain](docs/Model/Domain.md)
- [DomainAddRequest](docs/Model/DomainAddRequest.md)
- [DomainCancelResponse](docs/Model/DomainCancelResponse.md)
- [DomainCreate](docs/Model/DomainCreate.md)
- [DomainCreateRequest](docs/Model/DomainCreateRequest.md)
- [DomainRegistrant](docs/Model/DomainRegistrant.md)
- [DomainRegistrantRequest](docs/Model/DomainRegistrantRequest.md)
- [DomainRequest](docs/Model/DomainRequest.md)
- [EligibleVM](docs/Model/EligibleVM.md)
- [EligibleVMsResponse](docs/Model/EligibleVMsResponse.md)
- [EmailHistory](docs/Model/EmailHistory.md)
- [EmailMessageList](docs/Model/EmailMessageList.md)
- [EmailMessageSummary](docs/Model/EmailMessageSummary.md)
- [EmailReputation](docs/Model/EmailReputation.md)
- [EmailSendResponse](docs/Model/EmailSendResponse.md)
- [EmailSendResponseStatusEnum](docs/Model/EmailSendResponseStatusEnum.md)
- [EmailService](docs/Model/EmailService.md)
- [EmailStats](docs/Model/EmailStats.md)
- [EncryptionModeEnum](docs/Model/EncryptionModeEnum.md)
- [EncryptionReasonCodeEnum](docs/Model/EncryptionReasonCodeEnum.md)
- [FeatureUpgradeRequest](docs/Model/FeatureUpgradeRequest.md)
- [FeatureUpgradeResponse](docs/Model/FeatureUpgradeResponse.md)
- [FeaturesEnum](docs/Model/FeaturesEnum.md)
- [FirewallRule](docs/Model/FirewallRule.md)
- [FirewallRuleDirectionEnum](docs/Model/FirewallRuleDirectionEnum.md)
- [FirewallRuleRequest](docs/Model/FirewallRuleRequest.md)
- [FirewallRulesSet](docs/Model/FirewallRulesSet.md)
- [FirewallRulesSetRequest](docs/Model/FirewallRulesSetRequest.md)
- [FirewallRulesSetStatusEnum](docs/Model/FirewallRulesSetStatusEnum.md)
- [FloatingIPAuthorization](docs/Model/FloatingIPAuthorization.md)
- [FloatingIPAuthorizeRequest](docs/Model/FloatingIPAuthorizeRequest.md)
- [FloatingIPSummary](docs/Model/FloatingIPSummary.md)
- [FloatingIPv4](docs/Model/FloatingIPv4.md)
- [FloatingIPv4AuthorizeResponse](docs/Model/FloatingIPv4AuthorizeResponse.md)
- [FloatingIPv4CreateRequest](docs/Model/FloatingIPv4CreateRequest.md)
- [FloatingIPv4UnauthorizeResponse](docs/Model/FloatingIPv4UnauthorizeResponse.md)
- [FloatingIPv6](docs/Model/FloatingIPv6.md)
- [FloatingIPv6AuthorizeResponse](docs/Model/FloatingIPv6AuthorizeResponse.md)
- [FloatingIPv6CreateRequest](docs/Model/FloatingIPv6CreateRequest.md)
- [FloatingIPv6UnauthorizeResponse](docs/Model/FloatingIPv6UnauthorizeResponse.md)
- [FreeDNSDomain](docs/Model/FreeDNSDomain.md)
- [FundsBalanceResponse](docs/Model/FundsBalanceResponse.md)
- [FundsLog](docs/Model/FundsLog.md)
- [FwPolicyOutEnum](docs/Model/FwPolicyOutEnum.md)
- [HTTPRoute](docs/Model/HTTPRoute.md)
- [HTTPRouteRequest](docs/Model/HTTPRouteRequest.md)
- [HardwareGeneration](docs/Model/HardwareGeneration.md)
- [HostingChangePasswordResponse](docs/Model/HostingChangePasswordResponse.md)
- [HostingService](docs/Model/HostingService.md)
- [InboundRoute](docs/Model/InboundRoute.md)
- [InboundRouteCreateRequest](docs/Model/InboundRouteCreateRequest.md)
- [InboundRouteWriteResponse](docs/Model/InboundRouteWriteResponse.md)
- [InvoiceDetail](docs/Model/InvoiceDetail.md)
- [InvoiceList](docs/Model/InvoiceList.md)
- [InvoiceService](docs/Model/InvoiceService.md)
- [InvoiceStatusEnum](docs/Model/InvoiceStatusEnum.md)
- [IsoBootRequest](docs/Model/IsoBootRequest.md)
- [K8sPortForward](docs/Model/K8sPortForward.md)
- [K8sPortForwardRequest](docs/Model/K8sPortForwardRequest.md)
- [KubeUpgradeResponse](docs/Model/KubeUpgradeResponse.md)
- [KubeVersionEnum](docs/Model/KubeVersionEnum.md)
- [LBFirewallRule](docs/Model/LBFirewallRule.md)
- [LBFirewallRuleActionEnum](docs/Model/LBFirewallRuleActionEnum.md)
- [LBFirewallRuleDirectionEnum](docs/Model/LBFirewallRuleDirectionEnum.md)
- [LBFirewallRuleRequest](docs/Model/LBFirewallRuleRequest.md)
- [LBUpgradeDispatchResponse](docs/Model/LBUpgradeDispatchResponse.md)
- [LBUpgradePlanResponse](docs/Model/LBUpgradePlanResponse.md)
- [LBUpgradeRequest](docs/Model/LBUpgradeRequest.md)
- [LowBalanceSettingsRequest](docs/Model/LowBalanceSettingsRequest.md)
- [ModeEnum](docs/Model/ModeEnum.md)
- [NameserversUpdateRequest](docs/Model/NameserversUpdateRequest.md)
- [NameserversUpdateResponse](docs/Model/NameserversUpdateResponse.md)
- [NodeMetricsResponse](docs/Model/NodeMetricsResponse.md)
- [NodeOperation](docs/Model/NodeOperation.md)
- [NodeOperationKindEnum](docs/Model/NodeOperationKindEnum.md)
- [NodeOperationRebootRequest](docs/Model/NodeOperationRebootRequest.md)
- [NodeOperationRetryRequest](docs/Model/NodeOperationRetryRequest.md)
- [NodeOperationSourceEnum](docs/Model/NodeOperationSourceEnum.md)
- [NodeOperationStatusEnum](docs/Model/NodeOperationStatusEnum.md)
- [NodeRRDResponse](docs/Model/NodeRRDResponse.md)
- [NotificationSettingsResponse](docs/Model/NotificationSettingsResponse.md)
- [OSImage](docs/Model/OSImage.md)
- [OperationEnum](docs/Model/OperationEnum.md)
- [PaginatedAPITokenListList](docs/Model/PaginatedAPITokenListList.md)
- [PaginatedApiCredentialList](docs/Model/PaginatedApiCredentialList.md)
- [PaginatedClusterDetailList](docs/Model/PaginatedClusterDetailList.md)
- [PaginatedClusterTypeList](docs/Model/PaginatedClusterTypeList.md)
- [PaginatedCompanyList](docs/Model/PaginatedCompanyList.md)
- [PaginatedDNSGlueList](docs/Model/PaginatedDNSGlueList.md)
- [PaginatedDedicatedServerList](docs/Model/PaginatedDedicatedServerList.md)
- [PaginatedDepositList](docs/Model/PaginatedDepositList.md)
- [PaginatedDomainList](docs/Model/PaginatedDomainList.md)
- [PaginatedDomainRegistrantList](docs/Model/PaginatedDomainRegistrantList.md)
- [PaginatedEmailHistoryList](docs/Model/PaginatedEmailHistoryList.md)
- [PaginatedEmailServiceList](docs/Model/PaginatedEmailServiceList.md)
- [PaginatedFloatingIPAuthorizationList](docs/Model/PaginatedFloatingIPAuthorizationList.md)
- [PaginatedFloatingIPv4List](docs/Model/PaginatedFloatingIPv4List.md)
- [PaginatedFloatingIPv6List](docs/Model/PaginatedFloatingIPv6List.md)
- [PaginatedFundsLogList](docs/Model/PaginatedFundsLogList.md)
- [PaginatedHTTPRouteList](docs/Model/PaginatedHTTPRouteList.md)
- [PaginatedHostingServiceList](docs/Model/PaginatedHostingServiceList.md)
- [PaginatedInboundRouteList](docs/Model/PaginatedInboundRouteList.md)
- [PaginatedInvoiceListList](docs/Model/PaginatedInvoiceListList.md)
- [PaginatedK8sPortForwardList](docs/Model/PaginatedK8sPortForwardList.md)
- [PaginatedLBFirewallRuleList](docs/Model/PaginatedLBFirewallRuleList.md)
- [PaginatedNodeOperationList](docs/Model/PaginatedNodeOperationList.md)
- [PaginatedOSImageList](docs/Model/PaginatedOSImageList.md)
- [PaginatedPoolRemovalJournalList](docs/Model/PaginatedPoolRemovalJournalList.md)
- [PaginatedPrivateNetworkList](docs/Model/PaginatedPrivateNetworkList.md)
- [PaginatedPublicIPv4List](docs/Model/PaginatedPublicIPv4List.md)
- [PaginatedPublicIPv6List](docs/Model/PaginatedPublicIPv6List.md)
- [PaginatedResourcePoolList](docs/Model/PaginatedResourcePoolList.md)
- [PaginatedResourcePoolNodeList](docs/Model/PaginatedResourcePoolNodeList.md)
- [PaginatedSSHKeyList](docs/Model/PaginatedSSHKeyList.md)
- [PaginatedSandboxAddressList](docs/Model/PaginatedSandboxAddressList.md)
- [PaginatedSendingDomainList](docs/Model/PaginatedSendingDomainList.md)
- [PaginatedServerList](docs/Model/PaginatedServerList.md)
- [PaginatedServerProductList](docs/Model/PaginatedServerProductList.md)
- [PaginatedServiceListList](docs/Model/PaginatedServiceListList.md)
- [PaginatedSmtpCredentialList](docs/Model/PaginatedSmtpCredentialList.md)
- [PaginatedStorageProductList](docs/Model/PaginatedStorageProductList.md)
- [PaginatedSubscriptionList](docs/Model/PaginatedSubscriptionList.md)
- [PaginatedSuppressionEntryList](docs/Model/PaginatedSuppressionEntryList.md)
- [PaginatedTCPRouteList](docs/Model/PaginatedTCPRouteList.md)
- [PaginatedTLDList](docs/Model/PaginatedTLDList.md)
- [PaginatedTicketListList](docs/Model/PaginatedTicketListList.md)
- [PaginatedUDPRouteList](docs/Model/PaginatedUDPRouteList.md)
- [PatchedClusterDetailRequest](docs/Model/PatchedClusterDetailRequest.md)
- [PatchedCompanyRequest](docs/Model/PatchedCompanyRequest.md)
- [PatchedDomainRegistrantRequest](docs/Model/PatchedDomainRegistrantRequest.md)
- [PatchedDomainRequest](docs/Model/PatchedDomainRequest.md)
- [PatchedFirewallRuleRequest](docs/Model/PatchedFirewallRuleRequest.md)
- [PatchedFirewallRulesSetRequest](docs/Model/PatchedFirewallRulesSetRequest.md)
- [PatchedHTTPRouteRequest](docs/Model/PatchedHTTPRouteRequest.md)
- [PatchedInboundRouteCreateRequest](docs/Model/PatchedInboundRouteCreateRequest.md)
- [PatchedK8sPortForwardRequest](docs/Model/PatchedK8sPortForwardRequest.md)
- [PatchedLBFirewallRuleRequest](docs/Model/PatchedLBFirewallRuleRequest.md)
- [PatchedPrivateNetworkUpdateRequest](docs/Model/PatchedPrivateNetworkUpdateRequest.md)
- [PatchedProfileRequest](docs/Model/PatchedProfileRequest.md)
- [PatchedResourcePoolRequest](docs/Model/PatchedResourcePoolRequest.md)
- [PatchedSSHKeyUpdateRequest](docs/Model/PatchedSSHKeyUpdateRequest.md)
- [PatchedServerDetailRequest](docs/Model/PatchedServerDetailRequest.md)
- [PatchedTCPRouteRequest](docs/Model/PatchedTCPRouteRequest.md)
- [PatchedUDPRouteRequest](docs/Model/PatchedUDPRouteRequest.md)
- [PatchedVolumeUpdateRequest](docs/Model/PatchedVolumeUpdateRequest.md)
- [PayWithFundsResponse](docs/Model/PayWithFundsResponse.md)
- [PoolRemovalItem](docs/Model/PoolRemovalItem.md)
- [PoolRemovalJournal](docs/Model/PoolRemovalJournal.md)
- [PoolRemovalJournalKindEnum](docs/Model/PoolRemovalJournalKindEnum.md)
- [PoolRemovalJournalStatusEnum](docs/Model/PoolRemovalJournalStatusEnum.md)
- [PowerActionActionEnum](docs/Model/PowerActionActionEnum.md)
- [PowerActionRequest](docs/Model/PowerActionRequest.md)
- [PowerActionResponse](docs/Model/PowerActionResponse.md)
- [PowerManagement](docs/Model/PowerManagement.md)
- [PowerManagementRequest](docs/Model/PowerManagementRequest.md)
- [PowerManagementRequestActionEnum](docs/Model/PowerManagementRequestActionEnum.md)
- [PrivateNetwork](docs/Model/PrivateNetwork.md)
- [PrivateNetworkAddHostRequest](docs/Model/PrivateNetworkAddHostRequest.md)
- [PrivateNetworkRemoveHostRequest](docs/Model/PrivateNetworkRemoveHostRequest.md)
- [PrivateNetworkRequest](docs/Model/PrivateNetworkRequest.md)
- [PrivateNetworkUpdateRequest](docs/Model/PrivateNetworkUpdateRequest.md)
- [Profile](docs/Model/Profile.md)
- [ProfileRequest](docs/Model/ProfileRequest.md)
- [ProtocolEnum](docs/Model/ProtocolEnum.md)
- [PublicIPv4](docs/Model/PublicIPv4.md)
- [PublicIPv6](docs/Model/PublicIPv6.md)
- [PublicInterface](docs/Model/PublicInterface.md)
- [PublicInterfaceRequest](docs/Model/PublicInterfaceRequest.md)
- [RDNSUpdateResponse](docs/Model/RDNSUpdateResponse.md)
- [ReasonEnum](docs/Model/ReasonEnum.md)
- [ReinstallRequest](docs/Model/ReinstallRequest.md)
- [ReinstallResponse](docs/Model/ReinstallResponse.md)
- [RemoveServerResponse](docs/Model/RemoveServerResponse.md)
- [RenewDomain](docs/Model/RenewDomain.md)
- [RenewDomainRequest](docs/Model/RenewDomainRequest.md)
- [RescueEnterQueued](docs/Model/RescueEnterQueued.md)
- [RescueExitQueued](docs/Model/RescueExitQueued.md)
- [ResourcePool](docs/Model/ResourcePool.md)
- [ResourcePoolAddRequest](docs/Model/ResourcePoolAddRequest.md)
- [ResourcePoolAddResponse](docs/Model/ResourcePoolAddResponse.md)
- [ResourcePoolNode](docs/Model/ResourcePoolNode.md)
- [ResourcePoolRequest](docs/Model/ResourcePoolRequest.md)
- [ResourceStatusEnum](docs/Model/ResourceStatusEnum.md)
- [RetryProvision](docs/Model/RetryProvision.md)
- [ReverseDNS](docs/Model/ReverseDNS.md)
- [ReverseDNSRequest](docs/Model/ReverseDNSRequest.md)
- [SSHKey](docs/Model/SSHKey.md)
- [SSHKeyRequest](docs/Model/SSHKeyRequest.md)
- [SSHKeyUpdateRequest](docs/Model/SSHKeyUpdateRequest.md)
- [SandboxAddress](docs/Model/SandboxAddress.md)
- [SandboxAddressRequest](docs/Model/SandboxAddressRequest.md)
- [ScopeEnum](docs/Model/ScopeEnum.md)
- [SendRequest](docs/Model/SendRequest.md)
- [SendingDomain](docs/Model/SendingDomain.md)
- [SendingDomainStatusEnum](docs/Model/SendingDomainStatusEnum.md)
- [Server](docs/Model/Server.md)
- [ServerAddRequest](docs/Model/ServerAddRequest.md)
- [ServerAddResponse](docs/Model/ServerAddResponse.md)
- [ServerDetachIPv4Response](docs/Model/ServerDetachIPv4Response.md)
- [ServerDetail](docs/Model/ServerDetail.md)
- [ServerDetailRequest](docs/Model/ServerDetailRequest.md)
- [ServerNetworks](docs/Model/ServerNetworks.md)
- [ServerPrivateInterface](docs/Model/ServerPrivateInterface.md)
- [ServerProduct](docs/Model/ServerProduct.md)
- [ServerProductUpgradeRequest](docs/Model/ServerProductUpgradeRequest.md)
- [ServerPublicInterface](docs/Model/ServerPublicInterface.md)
- [ServerPublicNetwork](docs/Model/ServerPublicNetwork.md)
- [ServerTrafficResponse](docs/Model/ServerTrafficResponse.md)
- [ServerUpgradeResponse](docs/Model/ServerUpgradeResponse.md)
- [ServerUsageResponse](docs/Model/ServerUsageResponse.md)
- [Service](docs/Model/Service.md)
- [ServiceCompany](docs/Model/ServiceCompany.md)
- [ServiceList](docs/Model/ServiceList.md)
- [ServiceStatusEnum](docs/Model/ServiceStatusEnum.md)
- [SmtpCredential](docs/Model/SmtpCredential.md)
- [SmtpCredentialCreated](docs/Model/SmtpCredentialCreated.md)
- [Snapshot](docs/Model/Snapshot.md)
- [SnapshotCreateQueued](docs/Model/SnapshotCreateQueued.md)
- [SnapshotCreateRequest](docs/Model/SnapshotCreateRequest.md)
- [SnapshotDeleteQueued](docs/Model/SnapshotDeleteQueued.md)
- [SnapshotRollbackQueued](docs/Model/SnapshotRollbackQueued.md)
- [SourceEnum](docs/Model/SourceEnum.md)
- [StatsDay](docs/Model/StatsDay.md)
- [StatsTotals](docs/Model/StatsTotals.md)
- [StorageProduct](docs/Model/StorageProduct.md)
- [SubscribeRequest](docs/Model/SubscribeRequest.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionStatusEnum](docs/Model/SubscriptionStatusEnum.md)
- [SuppressionAddRequest](docs/Model/SuppressionAddRequest.md)
- [SuppressionEntry](docs/Model/SuppressionEntry.md)
- [TCPRoute](docs/Model/TCPRoute.md)
- [TCPRouteRequest](docs/Model/TCPRouteRequest.md)
- [TLD](docs/Model/TLD.md)
- [TalosUpgradeResponse](docs/Model/TalosUpgradeResponse.md)
- [ThresholdTypeEnum](docs/Model/ThresholdTypeEnum.md)
- [TicketCloseResponse](docs/Model/TicketCloseResponse.md)
- [TicketCreatePriorityEnum](docs/Model/TicketCreatePriorityEnum.md)
- [TicketCreateRequest](docs/Model/TicketCreateRequest.md)
- [TicketDetail](docs/Model/TicketDetail.md)
- [TicketList](docs/Model/TicketList.md)
- [TicketMessage](docs/Model/TicketMessage.md)
- [TicketPriorityEnum](docs/Model/TicketPriorityEnum.md)
- [TicketReopenResponse](docs/Model/TicketReopenResponse.md)
- [TicketReplyRequest](docs/Model/TicketReplyRequest.md)
- [TicketReplyResponse](docs/Model/TicketReplyResponse.md)
- [TicketStatusEnum](docs/Model/TicketStatusEnum.md)
- [TierEnum](docs/Model/TierEnum.md)
- [ToggleAutoPaymentResponse](docs/Model/ToggleAutoPaymentResponse.md)
- [ToggleCloudVMAccessResponse](docs/Model/ToggleCloudVMAccessResponse.md)
- [ToggleInboundRequest](docs/Model/ToggleInboundRequest.md)
- [TransferRoDomain](docs/Model/TransferRoDomain.md)
- [TransferRoDomainRequest](docs/Model/TransferRoDomainRequest.md)
- [UDPRoute](docs/Model/UDPRoute.md)
- [UDPRouteRequest](docs/Model/UDPRouteRequest.md)
- [VersionEnum](docs/Model/VersionEnum.md)
- [Volume](docs/Model/Volume.md)
- [VolumeRequest](docs/Model/VolumeRequest.md)
- [VolumeUpdateRequest](docs/Model/VolumeUpdateRequest.md)

## Authorization

Authentication schemes defined for the API:
### cookieAuth

- **Type**: API key
- **API key parameter name**: sessionid
- **Location**: 


### emailApiKey

- **Type**: Bearer authentication (phme_<key>)

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
    - Package version: `0.14.0`
    - Generator version: `7.24.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
