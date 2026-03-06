<?php
/**
 * PidginHost API Client
 *
 * Simple wrapper around the generated SDK.
 *
 * Usage:
 *     $client = new \PidginHost\Sdk\PidginHost('your-api-token');
 *     $servers = $client->cloud->cloudServersList();
 *     $keys = $client->account->accountSshKeysList();
 */

namespace PidginHost\Sdk;

use PidginHost\Sdk\Api\AccountApi;
use PidginHost\Sdk\Api\AuthApi;
use PidginHost\Sdk\Api\BillingApi;
use PidginHost\Sdk\Api\CloudApi;
use PidginHost\Sdk\Api\DedicatedApi;
use PidginHost\Sdk\Api\DomainApi;
use PidginHost\Sdk\Api\FreednsApi;
use PidginHost\Sdk\Api\HostingApi;
use PidginHost\Sdk\Api\KubernetesApi;
use PidginHost\Sdk\Api\SupportApi;

class PidginHost
{
    public AccountApi $account;
    public AuthApi $auth;
    public BillingApi $billing;
    public CloudApi $cloud;
    public DedicatedApi $dedicated;
    public DomainApi $domain;
    public FreednsApi $freedns;
    public HostingApi $hosting;
    public KubernetesApi $kubernetes;
    public SupportApi $support;

    private Configuration $configuration;

    /**
     * @param string      $token API authentication token
     * @param string|null $host  Override the default API host
     */
    public function __construct(string $token, ?string $host = null)
    {
        $this->configuration = Configuration::getDefaultConfiguration();

        if ($host !== null) {
            $this->configuration->setHost($host);
        }

        $this->configuration->setApiKey('tokenAuth', $token);
        $this->configuration->setApiKeyPrefix('tokenAuth', 'Token');

        $this->account = new AccountApi(null, $this->configuration);
        $this->auth = new AuthApi(null, $this->configuration);
        $this->billing = new BillingApi(null, $this->configuration);
        $this->cloud = new CloudApi(null, $this->configuration);
        $this->dedicated = new DedicatedApi(null, $this->configuration);
        $this->domain = new DomainApi(null, $this->configuration);
        $this->freedns = new FreednsApi(null, $this->configuration);
        $this->hosting = new HostingApi(null, $this->configuration);
        $this->kubernetes = new KubernetesApi(null, $this->configuration);
        $this->support = new SupportApi(null, $this->configuration);
    }
}
