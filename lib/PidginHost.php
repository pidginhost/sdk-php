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
use PidginHost\Sdk\Api\CloudApi;
use PidginHost\Sdk\Api\DomainApi;
use PidginHost\Sdk\Api\KubernetesApi;

class PidginHost
{
    public AccountApi $account;
    public CloudApi $cloud;
    public DomainApi $domain;
    public KubernetesApi $kubernetes;

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
        $this->cloud = new CloudApi(null, $this->configuration);
        $this->domain = new DomainApi(null, $this->configuration);
        $this->kubernetes = new KubernetesApi(null, $this->configuration);
    }
}
