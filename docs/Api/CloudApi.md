# PidginHost\Sdk\CloudApi



All URIs are relative to https://www.pidginhost.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloudBucketsCreate()**](CloudApi.md#cloudBucketsCreate) | **POST** /api/cloud/buckets/ |  |
| [**cloudBucketsCredentialsRevealCreate()**](CloudApi.md#cloudBucketsCredentialsRevealCreate) | **POST** /api/cloud/buckets/{id}/credentials/reveal/ |  |
| [**cloudBucketsCredentialsRotateCreate()**](CloudApi.md#cloudBucketsCredentialsRotateCreate) | **POST** /api/cloud/buckets/{id}/credentials/rotate/ |  |
| [**cloudBucketsDestroy()**](CloudApi.md#cloudBucketsDestroy) | **DELETE** /api/cloud/buckets/{id}/ |  |
| [**cloudBucketsDestroyProtectionCreate()**](CloudApi.md#cloudBucketsDestroyProtectionCreate) | **POST** /api/cloud/buckets/{id}/destroy-protection/ |  |
| [**cloudBucketsList()**](CloudApi.md#cloudBucketsList) | **GET** /api/cloud/buckets/ |  |
| [**cloudBucketsResizeCreate()**](CloudApi.md#cloudBucketsResizeCreate) | **POST** /api/cloud/buckets/{id}/resize/ |  |
| [**cloudBucketsRetrieve()**](CloudApi.md#cloudBucketsRetrieve) | **GET** /api/cloud/buckets/{id}/ |  |
| [**cloudBucketsVisibilityCreate()**](CloudApi.md#cloudBucketsVisibilityCreate) | **POST** /api/cloud/buckets/{id}/visibility/ |  |
| [**cloudFirewallRulesSetCreate()**](CloudApi.md#cloudFirewallRulesSetCreate) | **POST** /api/cloud/firewall-rules-set/ |  |
| [**cloudFirewallRulesSetDestroy()**](CloudApi.md#cloudFirewallRulesSetDestroy) | **DELETE** /api/cloud/firewall-rules-set/{id}/ |  |
| [**cloudFirewallRulesSetList()**](CloudApi.md#cloudFirewallRulesSetList) | **GET** /api/cloud/firewall-rules-set/ |  |
| [**cloudFirewallRulesSetPartialUpdate()**](CloudApi.md#cloudFirewallRulesSetPartialUpdate) | **PATCH** /api/cloud/firewall-rules-set/{id}/ |  |
| [**cloudFirewallRulesSetRetrieve()**](CloudApi.md#cloudFirewallRulesSetRetrieve) | **GET** /api/cloud/firewall-rules-set/{id}/ |  |
| [**cloudFirewallRulesSetRulesCreate()**](CloudApi.md#cloudFirewallRulesSetRulesCreate) | **POST** /api/cloud/firewall-rules-set/{rules_set_id}/rules/ |  |
| [**cloudFirewallRulesSetRulesDestroy()**](CloudApi.md#cloudFirewallRulesSetRulesDestroy) | **DELETE** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ |  |
| [**cloudFirewallRulesSetRulesList()**](CloudApi.md#cloudFirewallRulesSetRulesList) | **GET** /api/cloud/firewall-rules-set/{rules_set_id}/rules/ |  |
| [**cloudFirewallRulesSetRulesPartialUpdate()**](CloudApi.md#cloudFirewallRulesSetRulesPartialUpdate) | **PATCH** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ |  |
| [**cloudFirewallRulesSetRulesRetrieve()**](CloudApi.md#cloudFirewallRulesSetRulesRetrieve) | **GET** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ |  |
| [**cloudFirewallRulesSetRulesUpdate()**](CloudApi.md#cloudFirewallRulesSetRulesUpdate) | **PUT** /api/cloud/firewall-rules-set/{rules_set_id}/rules/{rule_id}/ |  |
| [**cloudFirewallRulesSetUpdate()**](CloudApi.md#cloudFirewallRulesSetUpdate) | **PUT** /api/cloud/firewall-rules-set/{id}/ |  |
| [**cloudFloatingIpv4AuthorizationsList()**](CloudApi.md#cloudFloatingIpv4AuthorizationsList) | **GET** /api/cloud/floating-ipv4/{id}/authorizations/ |  |
| [**cloudFloatingIpv4AuthorizeCreate()**](CloudApi.md#cloudFloatingIpv4AuthorizeCreate) | **POST** /api/cloud/floating-ipv4/{id}/authorize/ |  |
| [**cloudFloatingIpv4Create()**](CloudApi.md#cloudFloatingIpv4Create) | **POST** /api/cloud/floating-ipv4/ |  |
| [**cloudFloatingIpv4Destroy()**](CloudApi.md#cloudFloatingIpv4Destroy) | **DELETE** /api/cloud/floating-ipv4/{id}/ |  |
| [**cloudFloatingIpv4List()**](CloudApi.md#cloudFloatingIpv4List) | **GET** /api/cloud/floating-ipv4/ |  |
| [**cloudFloatingIpv4RdnsCreate()**](CloudApi.md#cloudFloatingIpv4RdnsCreate) | **POST** /api/cloud/floating-ipv4/{id}/rdns/ |  |
| [**cloudFloatingIpv4RdnsRetrieve()**](CloudApi.md#cloudFloatingIpv4RdnsRetrieve) | **GET** /api/cloud/floating-ipv4/{id}/rdns/ |  |
| [**cloudFloatingIpv4Retrieve()**](CloudApi.md#cloudFloatingIpv4Retrieve) | **GET** /api/cloud/floating-ipv4/{id}/ |  |
| [**cloudFloatingIpv4UnauthorizeCreate()**](CloudApi.md#cloudFloatingIpv4UnauthorizeCreate) | **POST** /api/cloud/floating-ipv4/{id}/unauthorize/ |  |
| [**cloudFloatingIpv6AuthorizationsList()**](CloudApi.md#cloudFloatingIpv6AuthorizationsList) | **GET** /api/cloud/floating-ipv6/{id}/authorizations/ |  |
| [**cloudFloatingIpv6AuthorizeCreate()**](CloudApi.md#cloudFloatingIpv6AuthorizeCreate) | **POST** /api/cloud/floating-ipv6/{id}/authorize/ |  |
| [**cloudFloatingIpv6Create()**](CloudApi.md#cloudFloatingIpv6Create) | **POST** /api/cloud/floating-ipv6/ |  |
| [**cloudFloatingIpv6Destroy()**](CloudApi.md#cloudFloatingIpv6Destroy) | **DELETE** /api/cloud/floating-ipv6/{id}/ |  |
| [**cloudFloatingIpv6List()**](CloudApi.md#cloudFloatingIpv6List) | **GET** /api/cloud/floating-ipv6/ |  |
| [**cloudFloatingIpv6RdnsCreate()**](CloudApi.md#cloudFloatingIpv6RdnsCreate) | **POST** /api/cloud/floating-ipv6/{id}/rdns/ |  |
| [**cloudFloatingIpv6RdnsRetrieve()**](CloudApi.md#cloudFloatingIpv6RdnsRetrieve) | **GET** /api/cloud/floating-ipv6/{id}/rdns/ |  |
| [**cloudFloatingIpv6Retrieve()**](CloudApi.md#cloudFloatingIpv6Retrieve) | **GET** /api/cloud/floating-ipv6/{id}/ |  |
| [**cloudFloatingIpv6UnauthorizeCreate()**](CloudApi.md#cloudFloatingIpv6UnauthorizeCreate) | **POST** /api/cloud/floating-ipv6/{id}/unauthorize/ |  |
| [**cloudGatewaysCreate()**](CloudApi.md#cloudGatewaysCreate) | **POST** /api/cloud/gateways/ |  |
| [**cloudGatewaysDestroy()**](CloudApi.md#cloudGatewaysDestroy) | **DELETE** /api/cloud/gateways/{id}/ |  |
| [**cloudGatewaysFirewallRulesCreate()**](CloudApi.md#cloudGatewaysFirewallRulesCreate) | **POST** /api/cloud/gateways/{gateway_id}/firewall-rules/ |  |
| [**cloudGatewaysFirewallRulesDestroy()**](CloudApi.md#cloudGatewaysFirewallRulesDestroy) | **DELETE** /api/cloud/gateways/{gateway_id}/firewall-rules/{id}/ |  |
| [**cloudGatewaysFirewallRulesList()**](CloudApi.md#cloudGatewaysFirewallRulesList) | **GET** /api/cloud/gateways/{gateway_id}/firewall-rules/ |  |
| [**cloudGatewaysFirewallRulesMoveCreate()**](CloudApi.md#cloudGatewaysFirewallRulesMoveCreate) | **POST** /api/cloud/gateways/{gateway_id}/firewall-rules/{id}/move/ |  |
| [**cloudGatewaysFirewallRulesPartialUpdate()**](CloudApi.md#cloudGatewaysFirewallRulesPartialUpdate) | **PATCH** /api/cloud/gateways/{gateway_id}/firewall-rules/{id}/ |  |
| [**cloudGatewaysFirewallRulesRetrieve()**](CloudApi.md#cloudGatewaysFirewallRulesRetrieve) | **GET** /api/cloud/gateways/{gateway_id}/firewall-rules/{id}/ |  |
| [**cloudGatewaysList()**](CloudApi.md#cloudGatewaysList) | **GET** /api/cloud/gateways/ |  |
| [**cloudGatewaysListenersCreate()**](CloudApi.md#cloudGatewaysListenersCreate) | **POST** /api/cloud/gateways/{gateway_id}/listeners/ |  |
| [**cloudGatewaysListenersDestroy()**](CloudApi.md#cloudGatewaysListenersDestroy) | **DELETE** /api/cloud/gateways/{gateway_id}/listeners/{id}/ |  |
| [**cloudGatewaysListenersList()**](CloudApi.md#cloudGatewaysListenersList) | **GET** /api/cloud/gateways/{gateway_id}/listeners/ |  |
| [**cloudGatewaysListenersPartialUpdate()**](CloudApi.md#cloudGatewaysListenersPartialUpdate) | **PATCH** /api/cloud/gateways/{gateway_id}/listeners/{id}/ |  |
| [**cloudGatewaysListenersRetrieve()**](CloudApi.md#cloudGatewaysListenersRetrieve) | **GET** /api/cloud/gateways/{gateway_id}/listeners/{id}/ |  |
| [**cloudGatewaysListenersRoutesCreate()**](CloudApi.md#cloudGatewaysListenersRoutesCreate) | **POST** /api/cloud/gateways/{gateway_id}/listeners/{listener_id}/routes/ |  |
| [**cloudGatewaysListenersRoutesDestroy()**](CloudApi.md#cloudGatewaysListenersRoutesDestroy) | **DELETE** /api/cloud/gateways/{gateway_id}/listeners/{listener_id}/routes/{id}/ |  |
| [**cloudGatewaysListenersRoutesList()**](CloudApi.md#cloudGatewaysListenersRoutesList) | **GET** /api/cloud/gateways/{gateway_id}/listeners/{listener_id}/routes/ |  |
| [**cloudGatewaysListenersRoutesPartialUpdate()**](CloudApi.md#cloudGatewaysListenersRoutesPartialUpdate) | **PATCH** /api/cloud/gateways/{gateway_id}/listeners/{listener_id}/routes/{id}/ |  |
| [**cloudGatewaysListenersRoutesRetrieve()**](CloudApi.md#cloudGatewaysListenersRoutesRetrieve) | **GET** /api/cloud/gateways/{gateway_id}/listeners/{listener_id}/routes/{id}/ |  |
| [**cloudGatewaysNetworksCreate()**](CloudApi.md#cloudGatewaysNetworksCreate) | **POST** /api/cloud/gateways/{gateway_id}/networks/ |  |
| [**cloudGatewaysNetworksDestroy()**](CloudApi.md#cloudGatewaysNetworksDestroy) | **DELETE** /api/cloud/gateways/{gateway_id}/networks/{network_id}/ |  |
| [**cloudGatewaysNetworksList()**](CloudApi.md#cloudGatewaysNetworksList) | **GET** /api/cloud/gateways/{gateway_id}/networks/ |  |
| [**cloudGatewaysNetworksPartialUpdate()**](CloudApi.md#cloudGatewaysNetworksPartialUpdate) | **PATCH** /api/cloud/gateways/{gateway_id}/networks/{network_id}/ |  |
| [**cloudGatewaysNetworksRetrieve()**](CloudApi.md#cloudGatewaysNetworksRetrieve) | **GET** /api/cloud/gateways/{gateway_id}/networks/{network_id}/ |  |
| [**cloudGatewaysOperationsList()**](CloudApi.md#cloudGatewaysOperationsList) | **GET** /api/cloud/gateways/{gateway_id}/operations/ |  |
| [**cloudGatewaysOperationsRetrieve()**](CloudApi.md#cloudGatewaysOperationsRetrieve) | **GET** /api/cloud/gateways/{gateway_id}/operations/{id}/ |  |
| [**cloudGatewaysPartialUpdate()**](CloudApi.md#cloudGatewaysPartialUpdate) | **PATCH** /api/cloud/gateways/{id}/ |  |
| [**cloudGatewaysPoolsBackendsCreate()**](CloudApi.md#cloudGatewaysPoolsBackendsCreate) | **POST** /api/cloud/gateways/{gateway_id}/pools/{pool_id}/backends/ |  |
| [**cloudGatewaysPoolsBackendsDestroy()**](CloudApi.md#cloudGatewaysPoolsBackendsDestroy) | **DELETE** /api/cloud/gateways/{gateway_id}/pools/{pool_id}/backends/{id}/ |  |
| [**cloudGatewaysPoolsBackendsList()**](CloudApi.md#cloudGatewaysPoolsBackendsList) | **GET** /api/cloud/gateways/{gateway_id}/pools/{pool_id}/backends/ |  |
| [**cloudGatewaysPoolsBackendsPartialUpdate()**](CloudApi.md#cloudGatewaysPoolsBackendsPartialUpdate) | **PATCH** /api/cloud/gateways/{gateway_id}/pools/{pool_id}/backends/{id}/ |  |
| [**cloudGatewaysPoolsBackendsRetrieve()**](CloudApi.md#cloudGatewaysPoolsBackendsRetrieve) | **GET** /api/cloud/gateways/{gateway_id}/pools/{pool_id}/backends/{id}/ |  |
| [**cloudGatewaysPoolsCreate()**](CloudApi.md#cloudGatewaysPoolsCreate) | **POST** /api/cloud/gateways/{gateway_id}/pools/ |  |
| [**cloudGatewaysPoolsDestroy()**](CloudApi.md#cloudGatewaysPoolsDestroy) | **DELETE** /api/cloud/gateways/{gateway_id}/pools/{id}/ |  |
| [**cloudGatewaysPoolsList()**](CloudApi.md#cloudGatewaysPoolsList) | **GET** /api/cloud/gateways/{gateway_id}/pools/ |  |
| [**cloudGatewaysPoolsPartialUpdate()**](CloudApi.md#cloudGatewaysPoolsPartialUpdate) | **PATCH** /api/cloud/gateways/{gateway_id}/pools/{id}/ |  |
| [**cloudGatewaysPoolsRetrieve()**](CloudApi.md#cloudGatewaysPoolsRetrieve) | **GET** /api/cloud/gateways/{gateway_id}/pools/{id}/ |  |
| [**cloudGatewaysPortForwardsCreate()**](CloudApi.md#cloudGatewaysPortForwardsCreate) | **POST** /api/cloud/gateways/{gateway_id}/port-forwards/ |  |
| [**cloudGatewaysPortForwardsDestroy()**](CloudApi.md#cloudGatewaysPortForwardsDestroy) | **DELETE** /api/cloud/gateways/{gateway_id}/port-forwards/{id}/ |  |
| [**cloudGatewaysPortForwardsList()**](CloudApi.md#cloudGatewaysPortForwardsList) | **GET** /api/cloud/gateways/{gateway_id}/port-forwards/ |  |
| [**cloudGatewaysPortForwardsPartialUpdate()**](CloudApi.md#cloudGatewaysPortForwardsPartialUpdate) | **PATCH** /api/cloud/gateways/{gateway_id}/port-forwards/{id}/ |  |
| [**cloudGatewaysPortForwardsRetrieve()**](CloudApi.md#cloudGatewaysPortForwardsRetrieve) | **GET** /api/cloud/gateways/{gateway_id}/port-forwards/{id}/ |  |
| [**cloudGatewaysReenrollCreate()**](CloudApi.md#cloudGatewaysReenrollCreate) | **POST** /api/cloud/gateways/{id}/reenroll/ |  |
| [**cloudGatewaysRetrieve()**](CloudApi.md#cloudGatewaysRetrieve) | **GET** /api/cloud/gateways/{id}/ |  |
| [**cloudGatewaysStatusRetrieve()**](CloudApi.md#cloudGatewaysStatusRetrieve) | **GET** /api/cloud/gateways/{id}/status/ |  |
| [**cloudGenerationsList()**](CloudApi.md#cloudGenerationsList) | **GET** /api/cloud/generations/ | List hardware generations |
| [**cloudGenerationsRetrieve()**](CloudApi.md#cloudGenerationsRetrieve) | **GET** /api/cloud/generations/{slug}/ |  |
| [**cloudImagesList()**](CloudApi.md#cloudImagesList) | **GET** /api/cloud/images/ |  |
| [**cloudImagesRetrieve()**](CloudApi.md#cloudImagesRetrieve) | **GET** /api/cloud/images/{id}/ |  |
| [**cloudIpv4Create()**](CloudApi.md#cloudIpv4Create) | **POST** /api/cloud/ipv4/ |  |
| [**cloudIpv4Destroy()**](CloudApi.md#cloudIpv4Destroy) | **DELETE** /api/cloud/ipv4/{id}/ |  |
| [**cloudIpv4DetachCreate()**](CloudApi.md#cloudIpv4DetachCreate) | **POST** /api/cloud/ipv4/{id}/detach/ |  |
| [**cloudIpv4List()**](CloudApi.md#cloudIpv4List) | **GET** /api/cloud/ipv4/ |  |
| [**cloudIpv4RdnsCreate()**](CloudApi.md#cloudIpv4RdnsCreate) | **POST** /api/cloud/ipv4/{id}/rdns/ |  |
| [**cloudIpv4RdnsRetrieve()**](CloudApi.md#cloudIpv4RdnsRetrieve) | **GET** /api/cloud/ipv4/{id}/rdns/ |  |
| [**cloudIpv4Retrieve()**](CloudApi.md#cloudIpv4Retrieve) | **GET** /api/cloud/ipv4/{id}/ |  |
| [**cloudIpv6Create()**](CloudApi.md#cloudIpv6Create) | **POST** /api/cloud/ipv6/ |  |
| [**cloudIpv6Destroy()**](CloudApi.md#cloudIpv6Destroy) | **DELETE** /api/cloud/ipv6/{id}/ |  |
| [**cloudIpv6DetachCreate()**](CloudApi.md#cloudIpv6DetachCreate) | **POST** /api/cloud/ipv6/{id}/detach/ |  |
| [**cloudIpv6List()**](CloudApi.md#cloudIpv6List) | **GET** /api/cloud/ipv6/ |  |
| [**cloudIpv6RdnsCreate()**](CloudApi.md#cloudIpv6RdnsCreate) | **POST** /api/cloud/ipv6/{id}/rdns/ |  |
| [**cloudIpv6RdnsRetrieve()**](CloudApi.md#cloudIpv6RdnsRetrieve) | **GET** /api/cloud/ipv6/{id}/rdns/ |  |
| [**cloudIpv6Retrieve()**](CloudApi.md#cloudIpv6Retrieve) | **GET** /api/cloud/ipv6/{id}/ |  |
| [**cloudPrivateNetworksAddServerCreate()**](CloudApi.md#cloudPrivateNetworksAddServerCreate) | **POST** /api/cloud/private-networks/{id}/add-server/ |  |
| [**cloudPrivateNetworksApplyRouteCreate()**](CloudApi.md#cloudPrivateNetworksApplyRouteCreate) | **POST** /api/cloud/private-networks/{id}/apply-route/ |  |
| [**cloudPrivateNetworksCreate()**](CloudApi.md#cloudPrivateNetworksCreate) | **POST** /api/cloud/private-networks/ |  |
| [**cloudPrivateNetworksDestroy()**](CloudApi.md#cloudPrivateNetworksDestroy) | **DELETE** /api/cloud/private-networks/{id}/ |  |
| [**cloudPrivateNetworksList()**](CloudApi.md#cloudPrivateNetworksList) | **GET** /api/cloud/private-networks/ |  |
| [**cloudPrivateNetworksPartialUpdate()**](CloudApi.md#cloudPrivateNetworksPartialUpdate) | **PATCH** /api/cloud/private-networks/{id}/ |  |
| [**cloudPrivateNetworksRemoveServerCreate()**](CloudApi.md#cloudPrivateNetworksRemoveServerCreate) | **POST** /api/cloud/private-networks/{id}/remove-server/ |  |
| [**cloudPrivateNetworksRetrieve()**](CloudApi.md#cloudPrivateNetworksRetrieve) | **GET** /api/cloud/private-networks/{id}/ |  |
| [**cloudPrivateNetworksRouteStatusRetrieve()**](CloudApi.md#cloudPrivateNetworksRouteStatusRetrieve) | **GET** /api/cloud/private-networks/{id}/route-status/ |  |
| [**cloudPrivateNetworksUpdate()**](CloudApi.md#cloudPrivateNetworksUpdate) | **PUT** /api/cloud/private-networks/{id}/ |  |
| [**cloudServerPackagesByGenerationRetrieve()**](CloudApi.md#cloudServerPackagesByGenerationRetrieve) | **GET** /api/cloud/server-packages/by-generation/ |  |
| [**cloudServerPackagesList()**](CloudApi.md#cloudServerPackagesList) | **GET** /api/cloud/server-packages/ |  |
| [**cloudServerPackagesRetrieve()**](CloudApi.md#cloudServerPackagesRetrieve) | **GET** /api/cloud/server-packages/{id}/ |  |
| [**cloudServersActivityRetrieve()**](CloudApi.md#cloudServersActivityRetrieve) | **GET** /api/cloud/servers/{id}/activity/ |  |
| [**cloudServersAttachIpv4Create()**](CloudApi.md#cloudServersAttachIpv4Create) | **POST** /api/cloud/servers/{id}/attach-ipv4/ |  |
| [**cloudServersAttachIpv6Create()**](CloudApi.md#cloudServersAttachIpv6Create) | **POST** /api/cloud/servers/{id}/attach-ipv6/ |  |
| [**cloudServersBootIsosList()**](CloudApi.md#cloudServersBootIsosList) | **GET** /api/cloud/servers/{id}/boot-isos/ |  |
| [**cloudServersConsoleCreate()**](CloudApi.md#cloudServersConsoleCreate) | **POST** /api/cloud/servers/{id}/console/ |  |
| [**cloudServersCreate()**](CloudApi.md#cloudServersCreate) | **POST** /api/cloud/servers/ |  |
| [**cloudServersDestroy()**](CloudApi.md#cloudServersDestroy) | **DELETE** /api/cloud/servers/{id}/ |  |
| [**cloudServersDestroyProtectionCreate()**](CloudApi.md#cloudServersDestroyProtectionCreate) | **POST** /api/cloud/servers/{id}/destroy-protection/ |  |
| [**cloudServersDetachIpv4Create()**](CloudApi.md#cloudServersDetachIpv4Create) | **POST** /api/cloud/servers/{id}/detach-ipv4/ |  |
| [**cloudServersDetachIpv6Create()**](CloudApi.md#cloudServersDetachIpv6Create) | **POST** /api/cloud/servers/{id}/detach-ipv6/ |  |
| [**cloudServersList()**](CloudApi.md#cloudServersList) | **GET** /api/cloud/servers/ |  |
| [**cloudServersModifyPackageCreate()**](CloudApi.md#cloudServersModifyPackageCreate) | **POST** /api/cloud/servers/{id}/modify-package/ |  |
| [**cloudServersMonitoringRetrieve()**](CloudApi.md#cloudServersMonitoringRetrieve) | **GET** /api/cloud/servers/{id}/monitoring/ |  |
| [**cloudServersMonitoringUpdate()**](CloudApi.md#cloudServersMonitoringUpdate) | **PUT** /api/cloud/servers/{id}/monitoring/ |  |
| [**cloudServersPartialUpdate()**](CloudApi.md#cloudServersPartialUpdate) | **PATCH** /api/cloud/servers/{id}/ |  |
| [**cloudServersPowerManagementCreate()**](CloudApi.md#cloudServersPowerManagementCreate) | **POST** /api/cloud/servers/{id}/power-management/ |  |
| [**cloudServersPowerManagementRetrieve()**](CloudApi.md#cloudServersPowerManagementRetrieve) | **GET** /api/cloud/servers/{id}/power-management/ |  |
| [**cloudServersPublicInterfaceCreate()**](CloudApi.md#cloudServersPublicInterfaceCreate) | **POST** /api/cloud/servers/{id}/public-interface/ |  |
| [**cloudServersPublicInterfaceDestroy()**](CloudApi.md#cloudServersPublicInterfaceDestroy) | **DELETE** /api/cloud/servers/{id}/public-interface/ |  |
| [**cloudServersPublicInterfaceRetrieve()**](CloudApi.md#cloudServersPublicInterfaceRetrieve) | **GET** /api/cloud/servers/{id}/public-interface/ |  |
| [**cloudServersRescueEnterCreate()**](CloudApi.md#cloudServersRescueEnterCreate) | **POST** /api/cloud/servers/{id}/rescue/enter/ |  |
| [**cloudServersRescueExitCreate()**](CloudApi.md#cloudServersRescueExitCreate) | **POST** /api/cloud/servers/{id}/rescue/exit/ |  |
| [**cloudServersRetrieve()**](CloudApi.md#cloudServersRetrieve) | **GET** /api/cloud/servers/{id}/ |  |
| [**cloudServersRetryProvisionCreate()**](CloudApi.md#cloudServersRetryProvisionCreate) | **POST** /api/cloud/servers/{id}/retry-provision/ |  |
| [**cloudServersSnapshotsCreate()**](CloudApi.md#cloudServersSnapshotsCreate) | **POST** /api/cloud/servers/{id}/snapshots/ |  |
| [**cloudServersSnapshotsDestroy()**](CloudApi.md#cloudServersSnapshotsDestroy) | **DELETE** /api/cloud/servers/{id}/snapshots/{snapshot_name}/ |  |
| [**cloudServersSnapshotsList()**](CloudApi.md#cloudServersSnapshotsList) | **GET** /api/cloud/servers/{id}/snapshots/ |  |
| [**cloudServersSnapshotsRollbackCreate()**](CloudApi.md#cloudServersSnapshotsRollbackCreate) | **POST** /api/cloud/servers/{id}/snapshots/{snapshot_name}/rollback/ |  |
| [**cloudServersTrafficRetrieve()**](CloudApi.md#cloudServersTrafficRetrieve) | **GET** /api/cloud/servers/{id}/traffic/ |  |
| [**cloudServersUpdate()**](CloudApi.md#cloudServersUpdate) | **PUT** /api/cloud/servers/{id}/ |  |
| [**cloudServersUsageRetrieve()**](CloudApi.md#cloudServersUsageRetrieve) | **GET** /api/cloud/servers/{id}/usage/ |  |
| [**cloudServersVolumesCreate()**](CloudApi.md#cloudServersVolumesCreate) | **POST** /api/cloud/servers/{server_id}/volumes/ |  |
| [**cloudServersVolumesDestroy()**](CloudApi.md#cloudServersVolumesDestroy) | **DELETE** /api/cloud/servers/{server_id}/volumes/{volume_id}/ |  |
| [**cloudServersVolumesList()**](CloudApi.md#cloudServersVolumesList) | **GET** /api/cloud/servers/{server_id}/volumes/ |  |
| [**cloudServersVolumesPartialUpdate()**](CloudApi.md#cloudServersVolumesPartialUpdate) | **PATCH** /api/cloud/servers/{server_id}/volumes/{volume_id}/ |  |
| [**cloudServersVolumesRetrieve()**](CloudApi.md#cloudServersVolumesRetrieve) | **GET** /api/cloud/servers/{server_id}/volumes/{volume_id}/ |  |
| [**cloudServersVolumesUpdate()**](CloudApi.md#cloudServersVolumesUpdate) | **PUT** /api/cloud/servers/{server_id}/volumes/{volume_id}/ |  |
| [**cloudStorageProductsList()**](CloudApi.md#cloudStorageProductsList) | **GET** /api/cloud/storage-products/ |  |
| [**cloudStorageProductsRetrieve()**](CloudApi.md#cloudStorageProductsRetrieve) | **GET** /api/cloud/storage-products/{id}/ |  |
| [**cloudVolumesAttachCreate()**](CloudApi.md#cloudVolumesAttachCreate) | **POST** /api/cloud/volumes/{id}/attach/ |  |
| [**cloudVolumesDestroy()**](CloudApi.md#cloudVolumesDestroy) | **DELETE** /api/cloud/volumes/{id}/ |  |
| [**cloudVolumesDetachCreate()**](CloudApi.md#cloudVolumesDetachCreate) | **POST** /api/cloud/volumes/{id}/detach/ |  |
| [**cloudVolumesList()**](CloudApi.md#cloudVolumesList) | **GET** /api/cloud/volumes/ |  |
| [**cloudVolumesPartialUpdate()**](CloudApi.md#cloudVolumesPartialUpdate) | **PATCH** /api/cloud/volumes/{id}/ |  |
| [**cloudVolumesRetrieve()**](CloudApi.md#cloudVolumesRetrieve) | **GET** /api/cloud/volumes/{id}/ |  |
| [**cloudVolumesUpdate()**](CloudApi.md#cloudVolumesUpdate) | **PUT** /api/cloud/volumes/{id}/ |  |


## `cloudBucketsCreate()`

```php
cloudBucketsCreate($bucket_create_request): \PidginHost\Sdk\Model\Bucket
```



Create a bucket

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_create_request = new \PidginHost\Sdk\Model\BucketCreateRequest(); // \PidginHost\Sdk\Model\BucketCreateRequest

try {
    $result = $apiInstance->cloudBucketsCreate($bucket_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket_create_request** | [**\PidginHost\Sdk\Model\BucketCreateRequest**](../Model/BucketCreateRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsCredentialsRevealCreate()`

```php
cloudBucketsCredentialsRevealCreate($id): \PidginHost\Sdk\Model\BucketCredentials
```



Reveal bucket credentials

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.

try {
    $result = $apiInstance->cloudBucketsCredentialsRevealCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsCredentialsRevealCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |

### Return type

[**\PidginHost\Sdk\Model\BucketCredentials**](../Model/BucketCredentials.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsCredentialsRotateCreate()`

```php
cloudBucketsCredentialsRotateCreate($id): \PidginHost\Sdk\Model\BucketCredentials
```



Rotate bucket credentials

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.

try {
    $result = $apiInstance->cloudBucketsCredentialsRotateCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsCredentialsRotateCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |

### Return type

[**\PidginHost\Sdk\Model\BucketCredentials**](../Model/BucketCredentials.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsDestroy()`

```php
cloudBucketsDestroy($id): \PidginHost\Sdk\Model\BucketCancelResponse
```



Cancel a bucket

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.

try {
    $result = $apiInstance->cloudBucketsDestroy($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |

### Return type

[**\PidginHost\Sdk\Model\BucketCancelResponse**](../Model/BucketCancelResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsDestroyProtectionCreate()`

```php
cloudBucketsDestroyProtectionCreate($id, $destroy_protection_request): \PidginHost\Sdk\Model\DestroyProtection
```



Enable or disable destroy protection.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.
$destroy_protection_request = new \PidginHost\Sdk\Model\DestroyProtectionRequest(); // \PidginHost\Sdk\Model\DestroyProtectionRequest

try {
    $result = $apiInstance->cloudBucketsDestroyProtectionCreate($id, $destroy_protection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsDestroyProtectionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |
| **destroy_protection_request** | [**\PidginHost\Sdk\Model\DestroyProtectionRequest**](../Model/DestroyProtectionRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\DestroyProtection**](../Model/DestroyProtection.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsList()`

```php
cloudBucketsList(): \PidginHost\Sdk\Model\Bucket[]
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudBucketsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\Bucket[]**](../Model/Bucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsResizeCreate()`

```php
cloudBucketsResizeCreate($id, $bucket_resize_request): \PidginHost\Sdk\Model\Bucket
```



Resize a bucket

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.
$bucket_resize_request = new \PidginHost\Sdk\Model\BucketResizeRequest(); // \PidginHost\Sdk\Model\BucketResizeRequest

try {
    $result = $apiInstance->cloudBucketsResizeCreate($id, $bucket_resize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsResizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |
| **bucket_resize_request** | [**\PidginHost\Sdk\Model\BucketResizeRequest**](../Model/BucketResizeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsRetrieve()`

```php
cloudBucketsRetrieve($id): \PidginHost\Sdk\Model\Bucket
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.

try {
    $result = $apiInstance->cloudBucketsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudBucketsVisibilityCreate()`

```php
cloudBucketsVisibilityCreate($id, $bucket_visibility_request): \PidginHost\Sdk\Model\Bucket
```



Set bucket visibility

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this S3 bucket.
$bucket_visibility_request = new \PidginHost\Sdk\Model\BucketVisibilityRequest(); // \PidginHost\Sdk\Model\BucketVisibilityRequest

try {
    $result = $apiInstance->cloudBucketsVisibilityCreate($id, $bucket_visibility_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudBucketsVisibilityCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this S3 bucket. | |
| **bucket_visibility_request** | [**\PidginHost\Sdk\Model\BucketVisibilityRequest**](../Model/BucketVisibilityRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Bucket**](../Model/Bucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetCreate()`

```php
cloudFirewallRulesSetCreate($firewall_rules_set_request): \PidginHost\Sdk\Model\FirewallRulesSet
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_rules_set_request = new \PidginHost\Sdk\Model\FirewallRulesSetRequest(); // \PidginHost\Sdk\Model\FirewallRulesSetRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetCreate($firewall_rules_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_rules_set_request** | [**\PidginHost\Sdk\Model\FirewallRulesSetRequest**](../Model/FirewallRulesSetRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetDestroy()`

```php
cloudFirewallRulesSetDestroy($id)
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this firewall rules set.

try {
    $apiInstance->cloudFirewallRulesSetDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this firewall rules set. | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetList()`

```php
cloudFirewallRulesSetList(): \PidginHost\Sdk\Model\FirewallRulesSet[]
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudFirewallRulesSetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet[]**](../Model/FirewallRulesSet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetPartialUpdate()`

```php
cloudFirewallRulesSetPartialUpdate($id, $patched_firewall_rules_set_request): \PidginHost\Sdk\Model\FirewallRulesSet
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this firewall rules set.
$patched_firewall_rules_set_request = new \PidginHost\Sdk\Model\PatchedFirewallRulesSetRequest(); // \PidginHost\Sdk\Model\PatchedFirewallRulesSetRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetPartialUpdate($id, $patched_firewall_rules_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this firewall rules set. | |
| **patched_firewall_rules_set_request** | [**\PidginHost\Sdk\Model\PatchedFirewallRulesSetRequest**](../Model/PatchedFirewallRulesSetRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRetrieve()`

```php
cloudFirewallRulesSetRetrieve($id): \PidginHost\Sdk\Model\FirewallRulesSet
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this firewall rules set.

try {
    $result = $apiInstance->cloudFirewallRulesSetRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this firewall rules set. | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesCreate()`

```php
cloudFirewallRulesSetRulesCreate($rules_set_id, $firewall_rule_request): \PidginHost\Sdk\Model\FirewallRule
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rules_set_id = 'rules_set_id_example'; // string
$firewall_rule_request = new \PidginHost\Sdk\Model\FirewallRuleRequest(); // \PidginHost\Sdk\Model\FirewallRuleRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesCreate($rules_set_id, $firewall_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rules_set_id** | **string**|  | |
| **firewall_rule_request** | [**\PidginHost\Sdk\Model\FirewallRuleRequest**](../Model/FirewallRuleRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesDestroy()`

```php
cloudFirewallRulesSetRulesDestroy($rule_id, $rules_set_id)
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$rules_set_id = 'rules_set_id_example'; // string

try {
    $apiInstance->cloudFirewallRulesSetRulesDestroy($rule_id, $rules_set_id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |
| **rules_set_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesList()`

```php
cloudFirewallRulesSetRulesList($rules_set_id): \PidginHost\Sdk\Model\FirewallRule[]
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rules_set_id = 'rules_set_id_example'; // string

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesList($rules_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rules_set_id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule[]**](../Model/FirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesPartialUpdate()`

```php
cloudFirewallRulesSetRulesPartialUpdate($rule_id, $rules_set_id, $patched_firewall_rule_request): \PidginHost\Sdk\Model\FirewallRule
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$rules_set_id = 'rules_set_id_example'; // string
$patched_firewall_rule_request = new \PidginHost\Sdk\Model\PatchedFirewallRuleRequest(); // \PidginHost\Sdk\Model\PatchedFirewallRuleRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesPartialUpdate($rule_id, $rules_set_id, $patched_firewall_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |
| **rules_set_id** | **string**|  | |
| **patched_firewall_rule_request** | [**\PidginHost\Sdk\Model\PatchedFirewallRuleRequest**](../Model/PatchedFirewallRuleRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesRetrieve()`

```php
cloudFirewallRulesSetRulesRetrieve($rule_id, $rules_set_id): \PidginHost\Sdk\Model\FirewallRule
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$rules_set_id = 'rules_set_id_example'; // string

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesRetrieve($rule_id, $rules_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |
| **rules_set_id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetRulesUpdate()`

```php
cloudFirewallRulesSetRulesUpdate($rule_id, $rules_set_id, $firewall_rule_request): \PidginHost\Sdk\Model\FirewallRule
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$rules_set_id = 'rules_set_id_example'; // string
$firewall_rule_request = new \PidginHost\Sdk\Model\FirewallRuleRequest(); // \PidginHost\Sdk\Model\FirewallRuleRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetRulesUpdate($rule_id, $rules_set_id, $firewall_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetRulesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |
| **rules_set_id** | **string**|  | |
| **firewall_rule_request** | [**\PidginHost\Sdk\Model\FirewallRuleRequest**](../Model/FirewallRuleRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRule**](../Model/FirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFirewallRulesSetUpdate()`

```php
cloudFirewallRulesSetUpdate($id, $firewall_rules_set_request): \PidginHost\Sdk\Model\FirewallRulesSet
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this firewall rules set.
$firewall_rules_set_request = new \PidginHost\Sdk\Model\FirewallRulesSetRequest(); // \PidginHost\Sdk\Model\FirewallRulesSetRequest

try {
    $result = $apiInstance->cloudFirewallRulesSetUpdate($id, $firewall_rules_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFirewallRulesSetUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this firewall rules set. | |
| **firewall_rules_set_request** | [**\PidginHost\Sdk\Model\FirewallRulesSetRequest**](../Model/FirewallRulesSetRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FirewallRulesSet**](../Model/FirewallRulesSet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4AuthorizationsList()`

```php
cloudFloatingIpv4AuthorizationsList($id, $page): \PidginHost\Sdk\Model\PaginatedFloatingIPAuthorizationList
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudFloatingIpv4AuthorizationsList($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4AuthorizationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedFloatingIPAuthorizationList**](../Model/PaginatedFloatingIPAuthorizationList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4AuthorizeCreate()`

```php
cloudFloatingIpv4AuthorizeCreate($id, $floating_ip_authorize_request): \PidginHost\Sdk\Model\FloatingIPv4AuthorizeResponse
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.
$floating_ip_authorize_request = new \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest(); // \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest

try {
    $result = $apiInstance->cloudFloatingIpv4AuthorizeCreate($id, $floating_ip_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4AuthorizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |
| **floating_ip_authorize_request** | [**\PidginHost\Sdk\Model\FloatingIPAuthorizeRequest**](../Model/FloatingIPAuthorizeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv4AuthorizeResponse**](../Model/FloatingIPv4AuthorizeResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4Create()`

```php
cloudFloatingIpv4Create($floating_ipv4_create_request): \PidginHost\Sdk\Model\FloatingIPv4
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$floating_ipv4_create_request = new \PidginHost\Sdk\Model\FloatingIPv4CreateRequest(); // \PidginHost\Sdk\Model\FloatingIPv4CreateRequest

try {
    $result = $apiInstance->cloudFloatingIpv4Create($floating_ipv4_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **floating_ipv4_create_request** | [**\PidginHost\Sdk\Model\FloatingIPv4CreateRequest**](../Model/FloatingIPv4CreateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv4**](../Model/FloatingIPv4.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4Destroy()`

```php
cloudFloatingIpv4Destroy($id)
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.

try {
    $apiInstance->cloudFloatingIpv4Destroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4Destroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4List()`

```php
cloudFloatingIpv4List($page): \PidginHost\Sdk\Model\PaginatedFloatingIPv4List
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudFloatingIpv4List($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4List: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedFloatingIPv4List**](../Model/PaginatedFloatingIPv4List.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4RdnsCreate()`

```php
cloudFloatingIpv4RdnsCreate($id, $reverse_dns_request): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for the IPv4 address wrapped by this floating IP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.
$reverse_dns_request = new \PidginHost\Sdk\Model\ReverseDNSRequest(); // \PidginHost\Sdk\Model\ReverseDNSRequest

try {
    $result = $apiInstance->cloudFloatingIpv4RdnsCreate($id, $reverse_dns_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4RdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |
| **reverse_dns_request** | [**\PidginHost\Sdk\Model\ReverseDNSRequest**](../Model/ReverseDNSRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4RdnsRetrieve()`

```php
cloudFloatingIpv4RdnsRetrieve($id): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for the IPv4 address wrapped by this floating IP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.

try {
    $result = $apiInstance->cloudFloatingIpv4RdnsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4RdnsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4Retrieve()`

```php
cloudFloatingIpv4Retrieve($id): \PidginHost\Sdk\Model\FloatingIPv4
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.

try {
    $result = $apiInstance->cloudFloatingIpv4Retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4Retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv4**](../Model/FloatingIPv4.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv4UnauthorizeCreate()`

```php
cloudFloatingIpv4UnauthorizeCreate($id, $floating_ip_authorize_request): \PidginHost\Sdk\Model\FloatingIPv4UnauthorizeResponse
```



Manage floating IPv4 addresses. A floating IP can be authorized on multiple VMs simultaneously; the customer asserts ownership inside the guest via keepalived/VRRP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv4.
$floating_ip_authorize_request = new \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest(); // \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest

try {
    $result = $apiInstance->cloudFloatingIpv4UnauthorizeCreate($id, $floating_ip_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv4UnauthorizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv4. | |
| **floating_ip_authorize_request** | [**\PidginHost\Sdk\Model\FloatingIPAuthorizeRequest**](../Model/FloatingIPAuthorizeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv4UnauthorizeResponse**](../Model/FloatingIPv4UnauthorizeResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6AuthorizationsList()`

```php
cloudFloatingIpv6AuthorizationsList($id, $page): \PidginHost\Sdk\Model\PaginatedFloatingIPAuthorizationList
```



Manage floating IPv6 addresses.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudFloatingIpv6AuthorizationsList($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6AuthorizationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedFloatingIPAuthorizationList**](../Model/PaginatedFloatingIPAuthorizationList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6AuthorizeCreate()`

```php
cloudFloatingIpv6AuthorizeCreate($id, $floating_ip_authorize_request): \PidginHost\Sdk\Model\FloatingIPv6AuthorizeResponse
```



Manage floating IPv6 addresses.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.
$floating_ip_authorize_request = new \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest(); // \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest

try {
    $result = $apiInstance->cloudFloatingIpv6AuthorizeCreate($id, $floating_ip_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6AuthorizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |
| **floating_ip_authorize_request** | [**\PidginHost\Sdk\Model\FloatingIPAuthorizeRequest**](../Model/FloatingIPAuthorizeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv6AuthorizeResponse**](../Model/FloatingIPv6AuthorizeResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6Create()`

```php
cloudFloatingIpv6Create($floating_ipv6_create_request): \PidginHost\Sdk\Model\FloatingIPv6
```



Manage floating IPv6 addresses.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$floating_ipv6_create_request = new \PidginHost\Sdk\Model\FloatingIPv6CreateRequest(); // \PidginHost\Sdk\Model\FloatingIPv6CreateRequest

try {
    $result = $apiInstance->cloudFloatingIpv6Create($floating_ipv6_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **floating_ipv6_create_request** | [**\PidginHost\Sdk\Model\FloatingIPv6CreateRequest**](../Model/FloatingIPv6CreateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv6**](../Model/FloatingIPv6.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6Destroy()`

```php
cloudFloatingIpv6Destroy($id)
```



Manage floating IPv6 addresses.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.

try {
    $apiInstance->cloudFloatingIpv6Destroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6Destroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6List()`

```php
cloudFloatingIpv6List($page): \PidginHost\Sdk\Model\PaginatedFloatingIPv6List
```



Manage floating IPv6 addresses.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudFloatingIpv6List($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6List: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedFloatingIPv6List**](../Model/PaginatedFloatingIPv6List.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6RdnsCreate()`

```php
cloudFloatingIpv6RdnsCreate($id, $reverse_dns_request): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for the IPv6 address wrapped by this floating IP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.
$reverse_dns_request = new \PidginHost\Sdk\Model\ReverseDNSRequest(); // \PidginHost\Sdk\Model\ReverseDNSRequest

try {
    $result = $apiInstance->cloudFloatingIpv6RdnsCreate($id, $reverse_dns_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6RdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |
| **reverse_dns_request** | [**\PidginHost\Sdk\Model\ReverseDNSRequest**](../Model/ReverseDNSRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6RdnsRetrieve()`

```php
cloudFloatingIpv6RdnsRetrieve($id): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for the IPv6 address wrapped by this floating IP.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.

try {
    $result = $apiInstance->cloudFloatingIpv6RdnsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6RdnsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6Retrieve()`

```php
cloudFloatingIpv6Retrieve($id): \PidginHost\Sdk\Model\FloatingIPv6
```



Manage floating IPv6 addresses.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.

try {
    $result = $apiInstance->cloudFloatingIpv6Retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6Retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv6**](../Model/FloatingIPv6.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudFloatingIpv6UnauthorizeCreate()`

```php
cloudFloatingIpv6UnauthorizeCreate($id, $floating_ip_authorize_request): \PidginHost\Sdk\Model\FloatingIPv6UnauthorizeResponse
```



Manage floating IPv6 addresses.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this floating IPv6.
$floating_ip_authorize_request = new \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest(); // \PidginHost\Sdk\Model\FloatingIPAuthorizeRequest

try {
    $result = $apiInstance->cloudFloatingIpv6UnauthorizeCreate($id, $floating_ip_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudFloatingIpv6UnauthorizeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this floating IPv6. | |
| **floating_ip_authorize_request** | [**\PidginHost\Sdk\Model\FloatingIPAuthorizeRequest**](../Model/FloatingIPAuthorizeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\FloatingIPv6UnauthorizeResponse**](../Model/FloatingIPv6UnauthorizeResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysCreate()`

```php
cloudGatewaysCreate($gateway_create_request): \PidginHost\Sdk\Model\Gateway
```



Reserve a gateway and queue its provisioning (spec 11.1); its state shows the progress.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_create_request = new \PidginHost\Sdk\Model\GatewayCreateRequest(); // \PidginHost\Sdk\Model\GatewayCreateRequest

try {
    $result = $apiInstance->cloudGatewaysCreate($gateway_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_create_request** | [**\PidginHost\Sdk\Model\GatewayCreateRequest**](../Model/GatewayCreateRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Gateway**](../Model/Gateway.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysDestroy()`

```php
cloudGatewaysDestroy($id, $networks, $revision, $servers): \PidginHost\Sdk\Model\GatewayOperation
```



Delete the gateway (spec 11.5): its VM is destroyed, then its networks and IPv4 are released. Without the preview's revision, networks and servers, 409 with a fresh preview.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$networks = array(56); // int[] | The preview's network ids.
$revision = 56; // int | The gateway's desired revision from the preview; without it, a preview.
$servers = array(56); // int[] | The preview's server ids.

try {
    $result = $apiInstance->cloudGatewaysDestroy($id, $networks, $revision, $servers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **networks** | [**int[]**](../Model/int.md)| The preview&#39;s network ids. | [optional] |
| **revision** | **int**| The gateway&#39;s desired revision from the preview; without it, a preview. | [optional] |
| **servers** | [**int[]**](../Model/int.md)| The preview&#39;s server ids. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysFirewallRulesCreate()`

```php
cloudGatewaysFirewallRulesCreate($gateway_id, $gateway_firewall_rule_write_request): \PidginHost\Sdk\Model\GatewayFirewallRule
```



Add a rule after the last one (spec 5.7); it is pending until the agent applies its revision.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$gateway_firewall_rule_write_request = new \PidginHost\Sdk\Model\GatewayFirewallRuleWriteRequest(); // \PidginHost\Sdk\Model\GatewayFirewallRuleWriteRequest

try {
    $result = $apiInstance->cloudGatewaysFirewallRulesCreate($gateway_id, $gateway_firewall_rule_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysFirewallRulesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **gateway_firewall_rule_write_request** | [**\PidginHost\Sdk\Model\GatewayFirewallRuleWriteRequest**](../Model/GatewayFirewallRuleWriteRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayFirewallRule**](../Model/GatewayFirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysFirewallRulesDestroy()`

```php
cloudGatewaysFirewallRulesDestroy($gateway_id, $id, $revision): \PidginHost\Sdk\Model\GatewayOperation
```



Delete a rule (spec 5.11): 202 with the record the agent's acknowledgement completes. Without the preview's revision, 409 with a fresh one.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$revision = 56; // int | The gateway's desired revision from the preview; without it, a preview.

try {
    $result = $apiInstance->cloudGatewaysFirewallRulesDestroy($gateway_id, $id, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysFirewallRulesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **revision** | **int**| The gateway&#39;s desired revision from the preview; without it, a preview. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysFirewallRulesList()`

```php
cloudGatewaysFirewallRulesList($gateway_id, $page): \PidginHost\Sdk\Model\PaginatedGatewayFirewallRuleList
```



A gateway's firewall rules, in evaluation order

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudGatewaysFirewallRulesList($gateway_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysFirewallRulesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedGatewayFirewallRuleList**](../Model/PaginatedGatewayFirewallRuleList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysFirewallRulesMoveCreate()`

```php
cloudGatewaysFirewallRulesMoveCreate($gateway_id, $id, $gateway_firewall_move_request, $revision): \PidginHost\Sdk\Model\GatewayFirewallRule
```



Move a rule to a position, the others keeping their order. Without the preview's revision, 409 with a fresh one.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$gateway_firewall_move_request = new \PidginHost\Sdk\Model\GatewayFirewallMoveRequest(); // \PidginHost\Sdk\Model\GatewayFirewallMoveRequest
$revision = 56; // int | The gateway's desired revision from the preview; without it, a preview.

try {
    $result = $apiInstance->cloudGatewaysFirewallRulesMoveCreate($gateway_id, $id, $gateway_firewall_move_request, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysFirewallRulesMoveCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **gateway_firewall_move_request** | [**\PidginHost\Sdk\Model\GatewayFirewallMoveRequest**](../Model/GatewayFirewallMoveRequest.md)|  | |
| **revision** | **int**| The gateway&#39;s desired revision from the preview; without it, a preview. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayFirewallRule**](../Model/GatewayFirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysFirewallRulesPartialUpdate()`

```php
cloudGatewaysFirewallRulesPartialUpdate($gateway_id, $id, $patched_gateway_firewall_rule_write_request): \PidginHost\Sdk\Model\GatewayFirewallRule
```



Change a rule's fields; a source or destination is replaced whole. Its position stays.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$patched_gateway_firewall_rule_write_request = new \PidginHost\Sdk\Model\PatchedGatewayFirewallRuleWriteRequest(); // \PidginHost\Sdk\Model\PatchedGatewayFirewallRuleWriteRequest

try {
    $result = $apiInstance->cloudGatewaysFirewallRulesPartialUpdate($gateway_id, $id, $patched_gateway_firewall_rule_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysFirewallRulesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **patched_gateway_firewall_rule_write_request** | [**\PidginHost\Sdk\Model\PatchedGatewayFirewallRuleWriteRequest**](../Model/PatchedGatewayFirewallRuleWriteRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayFirewallRule**](../Model/GatewayFirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysFirewallRulesRetrieve()`

```php
cloudGatewaysFirewallRulesRetrieve($gateway_id, $id): \PidginHost\Sdk\Model\GatewayFirewallRule
```



A gateway's firewall rules, in evaluation order

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->cloudGatewaysFirewallRulesRetrieve($gateway_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysFirewallRulesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayFirewallRule**](../Model/GatewayFirewallRule.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysList()`

```php
cloudGatewaysList($page): \PidginHost\Sdk\Model\PaginatedGatewayList
```



Manage gateways

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudGatewaysList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedGatewayList**](../Model/PaginatedGatewayList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysListenersCreate()`

```php
cloudGatewaysListenersCreate($gateway_id, $gateway_lb_listener_write_request): \PidginHost\Sdk\Model\GatewayLBListener
```



Add a listener (spec 6.8): tcp and udp name a pool, http takes routes. Pending until applied.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$gateway_lb_listener_write_request = new \PidginHost\Sdk\Model\GatewayLBListenerWriteRequest(); // \PidginHost\Sdk\Model\GatewayLBListenerWriteRequest

try {
    $result = $apiInstance->cloudGatewaysListenersCreate($gateway_id, $gateway_lb_listener_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysListenersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **gateway_lb_listener_write_request** | [**\PidginHost\Sdk\Model\GatewayLBListenerWriteRequest**](../Model/GatewayLBListenerWriteRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayLBListener**](../Model/GatewayLBListener.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysListenersDestroy()`

```php
cloudGatewaysListenersDestroy($gateway_id, $id, $revision): \PidginHost\Sdk\Model\GatewayOperation
```



Delete a listener and its routes (spec 5.11): 202 with the record the agent's acknowledgement completes. Without the preview's revision, 409 with a fresh one.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$revision = 56; // int | The gateway's desired revision from the preview; without it, a preview.

try {
    $result = $apiInstance->cloudGatewaysListenersDestroy($gateway_id, $id, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysListenersDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **revision** | **int**| The gateway&#39;s desired revision from the preview; without it, a preview. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysListenersList()`

```php
cloudGatewaysListenersList($gateway_id, $page): \PidginHost\Sdk\Model\PaginatedGatewayLBListenerList
```



A gateway's load balancer listeners

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudGatewaysListenersList($gateway_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysListenersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedGatewayLBListenerList**](../Model/PaginatedGatewayLBListenerList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysListenersPartialUpdate()`

```php
cloudGatewaysListenersPartialUpdate($gateway_id, $id, $patched_gateway_lb_listener_write_request): \PidginHost\Sdk\Model\GatewayLBListener
```



Change a listener's pool, sources, comment or enabled flag; protocol, port and mode are fixed.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$patched_gateway_lb_listener_write_request = new \PidginHost\Sdk\Model\PatchedGatewayLBListenerWriteRequest(); // \PidginHost\Sdk\Model\PatchedGatewayLBListenerWriteRequest

try {
    $result = $apiInstance->cloudGatewaysListenersPartialUpdate($gateway_id, $id, $patched_gateway_lb_listener_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysListenersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **patched_gateway_lb_listener_write_request** | [**\PidginHost\Sdk\Model\PatchedGatewayLBListenerWriteRequest**](../Model/PatchedGatewayLBListenerWriteRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayLBListener**](../Model/GatewayLBListener.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysListenersRetrieve()`

```php
cloudGatewaysListenersRetrieve($gateway_id, $id): \PidginHost\Sdk\Model\GatewayLBListener
```



A gateway's load balancer listeners

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->cloudGatewaysListenersRetrieve($gateway_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysListenersRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayLBListener**](../Model/GatewayLBListener.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysListenersRoutesCreate()`

```php
cloudGatewaysListenersRoutesCreate($gateway_id, $listener_id, $gateway_route_write_request): \PidginHost\Sdk\Model\GatewayRoute
```



Add a route (spec 5.6): hostnames and a path prefix to a pool. Pending until applied.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$listener_id = 56; // int
$gateway_route_write_request = new \PidginHost\Sdk\Model\GatewayRouteWriteRequest(); // \PidginHost\Sdk\Model\GatewayRouteWriteRequest

try {
    $result = $apiInstance->cloudGatewaysListenersRoutesCreate($gateway_id, $listener_id, $gateway_route_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysListenersRoutesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **listener_id** | **int**|  | |
| **gateway_route_write_request** | [**\PidginHost\Sdk\Model\GatewayRouteWriteRequest**](../Model/GatewayRouteWriteRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayRoute**](../Model/GatewayRoute.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysListenersRoutesDestroy()`

```php
cloudGatewaysListenersRoutesDestroy($gateway_id, $id, $listener_id, $revision): \PidginHost\Sdk\Model\GatewayOperation
```



Delete a route (spec 5.11): 202 with the record the agent's acknowledgement completes. Without the preview's revision, 409 with a fresh one.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$listener_id = 56; // int
$revision = 56; // int | The gateway's desired revision from the preview; without it, a preview.

try {
    $result = $apiInstance->cloudGatewaysListenersRoutesDestroy($gateway_id, $id, $listener_id, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysListenersRoutesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **listener_id** | **int**|  | |
| **revision** | **int**| The gateway&#39;s desired revision from the preview; without it, a preview. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysListenersRoutesList()`

```php
cloudGatewaysListenersRoutesList($gateway_id, $listener_id, $page): \PidginHost\Sdk\Model\PaginatedGatewayRouteList
```



An http listener's routes

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$listener_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudGatewaysListenersRoutesList($gateway_id, $listener_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysListenersRoutesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **listener_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedGatewayRouteList**](../Model/PaginatedGatewayRouteList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysListenersRoutesPartialUpdate()`

```php
cloudGatewaysListenersRoutesPartialUpdate($gateway_id, $id, $listener_id, $patched_gateway_route_write_request): \PidginHost\Sdk\Model\GatewayRoute
```



Change a route; hostnames are replaced whole.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$listener_id = 56; // int
$patched_gateway_route_write_request = new \PidginHost\Sdk\Model\PatchedGatewayRouteWriteRequest(); // \PidginHost\Sdk\Model\PatchedGatewayRouteWriteRequest

try {
    $result = $apiInstance->cloudGatewaysListenersRoutesPartialUpdate($gateway_id, $id, $listener_id, $patched_gateway_route_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysListenersRoutesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **listener_id** | **int**|  | |
| **patched_gateway_route_write_request** | [**\PidginHost\Sdk\Model\PatchedGatewayRouteWriteRequest**](../Model/PatchedGatewayRouteWriteRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayRoute**](../Model/GatewayRoute.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysListenersRoutesRetrieve()`

```php
cloudGatewaysListenersRoutesRetrieve($gateway_id, $id, $listener_id): \PidginHost\Sdk\Model\GatewayRoute
```



An http listener's routes

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$listener_id = 56; // int

try {
    $result = $apiInstance->cloudGatewaysListenersRoutesRetrieve($gateway_id, $id, $listener_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysListenersRoutesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **listener_id** | **int**|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayRoute**](../Model/GatewayRoute.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysNetworksCreate()`

```php
cloudGatewaysNetworksCreate($gateway_id, $gateway_network_create_request): \PidginHost\Sdk\Model\GatewayOperation
```



Attach a network (spec 11.3): the operation reserves it and hotplugs the gateway's NIC.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$gateway_network_create_request = new \PidginHost\Sdk\Model\GatewayNetworkCreateRequest(); // \PidginHost\Sdk\Model\GatewayNetworkCreateRequest

try {
    $result = $apiInstance->cloudGatewaysNetworksCreate($gateway_id, $gateway_network_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysNetworksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **gateway_network_create_request** | [**\PidginHost\Sdk\Model\GatewayNetworkCreateRequest**](../Model/GatewayNetworkCreateRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysNetworksDestroy()`

```php
cloudGatewaysNetworksDestroy($gateway_id, $network_id, $revision, $servers): \PidginHost\Sdk\Model\GatewayOperation
```



Detach a network (spec 11.3). Without the preview's revision and servers, 409 with a fresh preview.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$network_id = 56; // int
$revision = 56; // int | The gateway's desired revision from the preview; without it, a preview.
$servers = array(56); // int[] | The preview's server ids.

try {
    $result = $apiInstance->cloudGatewaysNetworksDestroy($gateway_id, $network_id, $revision, $servers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysNetworksDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **network_id** | **int**|  | |
| **revision** | **int**| The gateway&#39;s desired revision from the preview; without it, a preview. | [optional] |
| **servers** | [**int[]**](../Model/int.md)| The preview&#39;s server ids. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysNetworksList()`

```php
cloudGatewaysNetworksList($gateway_id, $page): \PidginHost\Sdk\Model\PaginatedGatewayNetworkList
```



A gateway's private networks, by network id

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudGatewaysNetworksList($gateway_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysNetworksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedGatewayNetworkList**](../Model/PaginatedGatewayNetworkList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysNetworksPartialUpdate()`

```php
cloudGatewaysNetworksPartialUpdate($gateway_id, $network_id, $revision, $servers, $patched_gateway_network_update_request): \PidginHost\Sdk\Model\GatewayNetwork
```



Switch a router network's SNAT (spec 6.4). Turning it off without the preview's revision and servers answers 409 with a fresh preview; the change is pending until the agent applies it.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$network_id = 56; // int
$revision = 56; // int | The gateway's desired revision from the preview; without it, a preview.
$servers = array(56); // int[] | The preview's server ids.
$patched_gateway_network_update_request = new \PidginHost\Sdk\Model\PatchedGatewayNetworkUpdateRequest(); // \PidginHost\Sdk\Model\PatchedGatewayNetworkUpdateRequest

try {
    $result = $apiInstance->cloudGatewaysNetworksPartialUpdate($gateway_id, $network_id, $revision, $servers, $patched_gateway_network_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysNetworksPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **network_id** | **int**|  | |
| **revision** | **int**| The gateway&#39;s desired revision from the preview; without it, a preview. | [optional] |
| **servers** | [**int[]**](../Model/int.md)| The preview&#39;s server ids. | [optional] |
| **patched_gateway_network_update_request** | [**\PidginHost\Sdk\Model\PatchedGatewayNetworkUpdateRequest**](../Model/PatchedGatewayNetworkUpdateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayNetwork**](../Model/GatewayNetwork.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysNetworksRetrieve()`

```php
cloudGatewaysNetworksRetrieve($gateway_id, $network_id): \PidginHost\Sdk\Model\GatewayNetwork
```



A gateway's private networks, by network id

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$network_id = 56; // int

try {
    $result = $apiInstance->cloudGatewaysNetworksRetrieve($gateway_id, $network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysNetworksRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **network_id** | **int**|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayNetwork**](../Model/GatewayNetwork.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysOperationsList()`

```php
cloudGatewaysOperationsList($gateway_id, $page): \PidginHost\Sdk\Model\PaginatedGatewayOperationList
```



A gateway's operations, newest first

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudGatewaysOperationsList($gateway_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysOperationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedGatewayOperationList**](../Model/PaginatedGatewayOperationList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysOperationsRetrieve()`

```php
cloudGatewaysOperationsRetrieve($gateway_id, $id): \PidginHost\Sdk\Model\GatewayOperation
```



A gateway's operations, newest first

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 'id_example'; // string

try {
    $result = $apiInstance->cloudGatewaysOperationsRetrieve($gateway_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysOperationsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPartialUpdate()`

```php
cloudGatewaysPartialUpdate($id, $patched_gateway_update_request): \PidginHost\Sdk\Model\Gateway
```



Rename the gateway or change its maintenance window. The name is not compiled, so no revision follows; a new window reaches the agent in a new revision (spec 11.4).

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$patched_gateway_update_request = new \PidginHost\Sdk\Model\PatchedGatewayUpdateRequest(); // \PidginHost\Sdk\Model\PatchedGatewayUpdateRequest

try {
    $result = $apiInstance->cloudGatewaysPartialUpdate($id, $patched_gateway_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **patched_gateway_update_request** | [**\PidginHost\Sdk\Model\PatchedGatewayUpdateRequest**](../Model/PatchedGatewayUpdateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Gateway**](../Model/Gateway.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPoolsBackendsCreate()`

```php
cloudGatewaysPoolsBackendsCreate($gateway_id, $pool_id, $gateway_backend_write_request): \PidginHost\Sdk\Model\GatewayBackend
```



Add a server to the pool (spec 5.5); it is pending until the agent applies its revision.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$pool_id = 56; // int
$gateway_backend_write_request = new \PidginHost\Sdk\Model\GatewayBackendWriteRequest(); // \PidginHost\Sdk\Model\GatewayBackendWriteRequest

try {
    $result = $apiInstance->cloudGatewaysPoolsBackendsCreate($gateway_id, $pool_id, $gateway_backend_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPoolsBackendsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **pool_id** | **int**|  | |
| **gateway_backend_write_request** | [**\PidginHost\Sdk\Model\GatewayBackendWriteRequest**](../Model/GatewayBackendWriteRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayBackend**](../Model/GatewayBackend.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPoolsBackendsDestroy()`

```php
cloudGatewaysPoolsBackendsDestroy($gateway_id, $id, $pool_id, $revision): \PidginHost\Sdk\Model\GatewayOperation
```



Remove a server (spec 5.11): 202 with the record the agent's acknowledgement completes. Without the preview's revision, 409 with a fresh one.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$pool_id = 56; // int
$revision = 56; // int | The gateway's desired revision from the preview; without it, a preview.

try {
    $result = $apiInstance->cloudGatewaysPoolsBackendsDestroy($gateway_id, $id, $pool_id, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPoolsBackendsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **pool_id** | **int**|  | |
| **revision** | **int**| The gateway&#39;s desired revision from the preview; without it, a preview. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPoolsBackendsList()`

```php
cloudGatewaysPoolsBackendsList($gateway_id, $pool_id, $page): \PidginHost\Sdk\Model\PaginatedGatewayBackendList
```



A backend pool's servers

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$pool_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudGatewaysPoolsBackendsList($gateway_id, $pool_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPoolsBackendsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **pool_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedGatewayBackendList**](../Model/PaginatedGatewayBackendList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPoolsBackendsPartialUpdate()`

```php
cloudGatewaysPoolsBackendsPartialUpdate($gateway_id, $id, $pool_id, $patched_gateway_backend_write_request): \PidginHost\Sdk\Model\GatewayBackend
```



Change a server. The last enabled server of a pool in use cannot be disabled.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$pool_id = 56; // int
$patched_gateway_backend_write_request = new \PidginHost\Sdk\Model\PatchedGatewayBackendWriteRequest(); // \PidginHost\Sdk\Model\PatchedGatewayBackendWriteRequest

try {
    $result = $apiInstance->cloudGatewaysPoolsBackendsPartialUpdate($gateway_id, $id, $pool_id, $patched_gateway_backend_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPoolsBackendsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **pool_id** | **int**|  | |
| **patched_gateway_backend_write_request** | [**\PidginHost\Sdk\Model\PatchedGatewayBackendWriteRequest**](../Model/PatchedGatewayBackendWriteRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayBackend**](../Model/GatewayBackend.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPoolsBackendsRetrieve()`

```php
cloudGatewaysPoolsBackendsRetrieve($gateway_id, $id, $pool_id): \PidginHost\Sdk\Model\GatewayBackend
```



A backend pool's servers

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$pool_id = 56; // int

try {
    $result = $apiInstance->cloudGatewaysPoolsBackendsRetrieve($gateway_id, $id, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPoolsBackendsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **pool_id** | **int**|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayBackend**](../Model/GatewayBackend.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPoolsCreate()`

```php
cloudGatewaysPoolsCreate($gateway_id, $gateway_backend_pool_write_request): \PidginHost\Sdk\Model\GatewayBackendPool
```



Add a backend pool (spec 5.5); it is pending until the agent applies its revision.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$gateway_backend_pool_write_request = new \PidginHost\Sdk\Model\GatewayBackendPoolWriteRequest(); // \PidginHost\Sdk\Model\GatewayBackendPoolWriteRequest

try {
    $result = $apiInstance->cloudGatewaysPoolsCreate($gateway_id, $gateway_backend_pool_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPoolsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **gateway_backend_pool_write_request** | [**\PidginHost\Sdk\Model\GatewayBackendPoolWriteRequest**](../Model/GatewayBackendPoolWriteRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayBackendPool**](../Model/GatewayBackendPool.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPoolsDestroy()`

```php
cloudGatewaysPoolsDestroy($gateway_id, $id, $revision): \PidginHost\Sdk\Model\GatewayOperation
```



Delete an unused pool and its servers (spec 5.11): 202 with the record the agent's acknowledgement completes. Without the preview's revision, 409 with a fresh one.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$revision = 56; // int | The gateway's desired revision from the preview; without it, a preview.

try {
    $result = $apiInstance->cloudGatewaysPoolsDestroy($gateway_id, $id, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPoolsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **revision** | **int**| The gateway&#39;s desired revision from the preview; without it, a preview. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPoolsList()`

```php
cloudGatewaysPoolsList($gateway_id, $page): \PidginHost\Sdk\Model\PaginatedGatewayBackendPoolList
```



A gateway's backend pools

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudGatewaysPoolsList($gateway_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPoolsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedGatewayBackendPoolList**](../Model/PaginatedGatewayBackendPoolList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPoolsPartialUpdate()`

```php
cloudGatewaysPoolsPartialUpdate($gateway_id, $id, $patched_gateway_backend_pool_write_request): \PidginHost\Sdk\Model\GatewayBackendPool
```



Change a pool; health_check takes the fields to change. Every listener and route on it must still fit.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$patched_gateway_backend_pool_write_request = new \PidginHost\Sdk\Model\PatchedGatewayBackendPoolWriteRequest(); // \PidginHost\Sdk\Model\PatchedGatewayBackendPoolWriteRequest

try {
    $result = $apiInstance->cloudGatewaysPoolsPartialUpdate($gateway_id, $id, $patched_gateway_backend_pool_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPoolsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **patched_gateway_backend_pool_write_request** | [**\PidginHost\Sdk\Model\PatchedGatewayBackendPoolWriteRequest**](../Model/PatchedGatewayBackendPoolWriteRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayBackendPool**](../Model/GatewayBackendPool.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPoolsRetrieve()`

```php
cloudGatewaysPoolsRetrieve($gateway_id, $id): \PidginHost\Sdk\Model\GatewayBackendPool
```



A gateway's backend pools

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->cloudGatewaysPoolsRetrieve($gateway_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPoolsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayBackendPool**](../Model/GatewayBackendPool.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPortForwardsCreate()`

```php
cloudGatewaysPortForwardsCreate($gateway_id, $gateway_forward_write_request): \PidginHost\Sdk\Model\GatewayForward
```



Add a port forward (spec 6.7); it is pending until the agent applies its revision.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$gateway_forward_write_request = new \PidginHost\Sdk\Model\GatewayForwardWriteRequest(); // \PidginHost\Sdk\Model\GatewayForwardWriteRequest

try {
    $result = $apiInstance->cloudGatewaysPortForwardsCreate($gateway_id, $gateway_forward_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPortForwardsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **gateway_forward_write_request** | [**\PidginHost\Sdk\Model\GatewayForwardWriteRequest**](../Model/GatewayForwardWriteRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayForward**](../Model/GatewayForward.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPortForwardsDestroy()`

```php
cloudGatewaysPortForwardsDestroy($gateway_id, $id, $revision): \PidginHost\Sdk\Model\GatewayOperation
```



Delete a forward (spec 5.11): 202 with the record the agent's acknowledgement completes. Without the preview's revision, 409 with a fresh one.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$revision = 56; // int | The gateway's desired revision from the preview; without it, a preview.

try {
    $result = $apiInstance->cloudGatewaysPortForwardsDestroy($gateway_id, $id, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPortForwardsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **revision** | **int**| The gateway&#39;s desired revision from the preview; without it, a preview. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPortForwardsList()`

```php
cloudGatewaysPortForwardsList($gateway_id, $page): \PidginHost\Sdk\Model\PaginatedGatewayForwardList
```



A gateway's port forwards

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudGatewaysPortForwardsList($gateway_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPortForwardsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedGatewayForwardList**](../Model/PaginatedGatewayForwardList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPortForwardsPartialUpdate()`

```php
cloudGatewaysPortForwardsPartialUpdate($gateway_id, $id, $patched_gateway_forward_write_request): \PidginHost\Sdk\Model\GatewayForward
```



Change a forward's fields; public_ports and target are each replaced whole.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int
$patched_gateway_forward_write_request = new \PidginHost\Sdk\Model\PatchedGatewayForwardWriteRequest(); // \PidginHost\Sdk\Model\PatchedGatewayForwardWriteRequest

try {
    $result = $apiInstance->cloudGatewaysPortForwardsPartialUpdate($gateway_id, $id, $patched_gateway_forward_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPortForwardsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |
| **patched_gateway_forward_write_request** | [**\PidginHost\Sdk\Model\PatchedGatewayForwardWriteRequest**](../Model/PatchedGatewayForwardWriteRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayForward**](../Model/GatewayForward.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysPortForwardsRetrieve()`

```php
cloudGatewaysPortForwardsRetrieve($gateway_id, $id): \PidginHost\Sdk\Model\GatewayForward
```



A gateway's port forwards

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_id = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->cloudGatewaysPortForwardsRetrieve($gateway_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysPortForwardsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gateway_id** | **int**|  | |
| **id** | **int**|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayForward**](../Model/GatewayForward.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysReenrollCreate()`

```php
cloudGatewaysReenrollCreate($id, $gateway_reenroll_request): \PidginHost\Sdk\Model\GatewayOperation
```



Re-enroll the gateway (spec 8.1 step 6): its agent token is revoked and it restarts to enroll again. Without the preview's revision, networks and servers, 409 with a fresh preview.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$gateway_reenroll_request = new \PidginHost\Sdk\Model\GatewayReenrollRequest(); // \PidginHost\Sdk\Model\GatewayReenrollRequest

try {
    $result = $apiInstance->cloudGatewaysReenrollCreate($id, $gateway_reenroll_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysReenrollCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **gateway_reenroll_request** | [**\PidginHost\Sdk\Model\GatewayReenrollRequest**](../Model/GatewayReenrollRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysRetrieve()`

```php
cloudGatewaysRetrieve($id): \PidginHost\Sdk\Model\Gateway
```



Manage gateways

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->cloudGatewaysRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\Gateway**](../Model/Gateway.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGatewaysStatusRetrieve()`

```php
cloudGatewaysStatusRetrieve($id): \PidginHost\Sdk\Model\GatewayStatus
```



The gateway's state and the customer part of its agent's last report (spec 9.5).

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->cloudGatewaysStatusRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGatewaysStatusRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayStatus**](../Model/GatewayStatus.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGenerationsList()`

```php
cloudGenerationsList(): \PidginHost\Sdk\Model\HardwareGeneration[]
```

List hardware generations

Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudGenerationsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGenerationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\HardwareGeneration[]**](../Model/HardwareGeneration.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudGenerationsRetrieve()`

```php
cloudGenerationsRetrieve($slug): \PidginHost\Sdk\Model\HardwareGeneration
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->cloudGenerationsRetrieve($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudGenerationsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\HardwareGeneration**](../Model/HardwareGeneration.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudImagesList()`

```php
cloudImagesList($page): \PidginHost\Sdk\Model\PaginatedOSImageList
```



List of available OS images

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudImagesList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudImagesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedOSImageList**](../Model/PaginatedOSImageList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudImagesRetrieve()`

```php
cloudImagesRetrieve($id): \PidginHost\Sdk\Model\OSImage
```



List of available OS images

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this operating system.

try {
    $result = $apiInstance->cloudImagesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudImagesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this operating system. | |

### Return type

[**\PidginHost\Sdk\Model\OSImage**](../Model/OSImage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4Create()`

```php
cloudIpv4Create(): \PidginHost\Sdk\Model\PublicIPv4
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudIpv4Create();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\PublicIPv4**](../Model/PublicIPv4.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4Destroy()`

```php
cloudIpv4Destroy($id)
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.

try {
    $apiInstance->cloudIpv4Destroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4Destroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4DetachCreate()`

```php
cloudIpv4DetachCreate($id): \PidginHost\Sdk\Model\DetachIPv4Response
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.

try {
    $result = $apiInstance->cloudIpv4DetachCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4DetachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |

### Return type

[**\PidginHost\Sdk\Model\DetachIPv4Response**](../Model/DetachIPv4Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4List()`

```php
cloudIpv4List($page): \PidginHost\Sdk\Model\PaginatedPublicIPv4List
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudIpv4List($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4List: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedPublicIPv4List**](../Model/PaginatedPublicIPv4List.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4RdnsCreate()`

```php
cloudIpv4RdnsCreate($id, $reverse_dns_request): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for this IPv4 address.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.
$reverse_dns_request = new \PidginHost\Sdk\Model\ReverseDNSRequest(); // \PidginHost\Sdk\Model\ReverseDNSRequest

try {
    $result = $apiInstance->cloudIpv4RdnsCreate($id, $reverse_dns_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4RdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |
| **reverse_dns_request** | [**\PidginHost\Sdk\Model\ReverseDNSRequest**](../Model/ReverseDNSRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4RdnsRetrieve()`

```php
cloudIpv4RdnsRetrieve($id): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for this IPv4 address.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.

try {
    $result = $apiInstance->cloudIpv4RdnsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4RdnsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv4Retrieve()`

```php
cloudIpv4Retrieve($id): \PidginHost\Sdk\Model\PublicIPv4
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv4.

try {
    $result = $apiInstance->cloudIpv4Retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv4Retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv4. | |

### Return type

[**\PidginHost\Sdk\Model\PublicIPv4**](../Model/PublicIPv4.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6Create()`

```php
cloudIpv6Create(): \PidginHost\Sdk\Model\PublicIPv6
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudIpv6Create();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\PublicIPv6**](../Model/PublicIPv6.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6Destroy()`

```php
cloudIpv6Destroy($id)
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.

try {
    $apiInstance->cloudIpv6Destroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6Destroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6DetachCreate()`

```php
cloudIpv6DetachCreate($id): \PidginHost\Sdk\Model\DetachIPv6Response
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.

try {
    $result = $apiInstance->cloudIpv6DetachCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6DetachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |

### Return type

[**\PidginHost\Sdk\Model\DetachIPv6Response**](../Model/DetachIPv6Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6List()`

```php
cloudIpv6List($page): \PidginHost\Sdk\Model\PaginatedPublicIPv6List
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudIpv6List($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6List: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedPublicIPv6List**](../Model/PaginatedPublicIPv6List.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6RdnsCreate()`

```php
cloudIpv6RdnsCreate($id, $reverse_dns_request): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for this IPv6 address.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.
$reverse_dns_request = new \PidginHost\Sdk\Model\ReverseDNSRequest(); // \PidginHost\Sdk\Model\ReverseDNSRequest

try {
    $result = $apiInstance->cloudIpv6RdnsCreate($id, $reverse_dns_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6RdnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |
| **reverse_dns_request** | [**\PidginHost\Sdk\Model\ReverseDNSRequest**](../Model/ReverseDNSRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6RdnsRetrieve()`

```php
cloudIpv6RdnsRetrieve($id): \PidginHost\Sdk\Model\ReverseDNS
```



Get or update reverse DNS (PTR) for this IPv6 address.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.

try {
    $result = $apiInstance->cloudIpv6RdnsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6RdnsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |

### Return type

[**\PidginHost\Sdk\Model\ReverseDNS**](../Model/ReverseDNS.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudIpv6Retrieve()`

```php
cloudIpv6Retrieve($id): \PidginHost\Sdk\Model\PublicIPv6
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Public IPv6.

try {
    $result = $apiInstance->cloudIpv6Retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudIpv6Retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this Public IPv6. | |

### Return type

[**\PidginHost\Sdk\Model\PublicIPv6**](../Model/PublicIPv6.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksAddServerCreate()`

```php
cloudPrivateNetworksAddServerCreate($id, $private_network_add_host_request): \PidginHost\Sdk\Model\AddServerResponse
```



Manage private networks

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$private_network_add_host_request = new \PidginHost\Sdk\Model\PrivateNetworkAddHostRequest(); // \PidginHost\Sdk\Model\PrivateNetworkAddHostRequest

try {
    $result = $apiInstance->cloudPrivateNetworksAddServerCreate($id, $private_network_add_host_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksAddServerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **private_network_add_host_request** | [**\PidginHost\Sdk\Model\PrivateNetworkAddHostRequest**](../Model/PrivateNetworkAddHostRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AddServerResponse**](../Model/AddServerResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksApplyRouteCreate()`

```php
cloudPrivateNetworksApplyRouteCreate($id, $apply_route_request): \PidginHost\Sdk\Model\GatewayOperation
```



Re-render the named servers' routes and reboot them (spec 6.3); naming a server acknowledges its reboot.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$apply_route_request = new \PidginHost\Sdk\Model\ApplyRouteRequest(); // \PidginHost\Sdk\Model\ApplyRouteRequest

try {
    $result = $apiInstance->cloudPrivateNetworksApplyRouteCreate($id, $apply_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksApplyRouteCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **apply_route_request** | [**\PidginHost\Sdk\Model\ApplyRouteRequest**](../Model/ApplyRouteRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\GatewayOperation**](../Model/GatewayOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksCreate()`

```php
cloudPrivateNetworksCreate($private_network_request): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$private_network_request = new \PidginHost\Sdk\Model\PrivateNetworkRequest(); // \PidginHost\Sdk\Model\PrivateNetworkRequest

try {
    $result = $apiInstance->cloudPrivateNetworksCreate($private_network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **private_network_request** | [**\PidginHost\Sdk\Model\PrivateNetworkRequest**](../Model/PrivateNetworkRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksDestroy()`

```php
cloudPrivateNetworksDestroy($id)
```



Manage private networks

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.

try {
    $apiInstance->cloudPrivateNetworksDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksList()`

```php
cloudPrivateNetworksList($page): \PidginHost\Sdk\Model\PaginatedPrivateNetworkList
```



Manage private networks

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudPrivateNetworksList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedPrivateNetworkList**](../Model/PaginatedPrivateNetworkList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksPartialUpdate()`

```php
cloudPrivateNetworksPartialUpdate($id, $patched_private_network_update_request): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$patched_private_network_update_request = new \PidginHost\Sdk\Model\PatchedPrivateNetworkUpdateRequest(); // \PidginHost\Sdk\Model\PatchedPrivateNetworkUpdateRequest

try {
    $result = $apiInstance->cloudPrivateNetworksPartialUpdate($id, $patched_private_network_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **patched_private_network_update_request** | [**\PidginHost\Sdk\Model\PatchedPrivateNetworkUpdateRequest**](../Model/PatchedPrivateNetworkUpdateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksRemoveServerCreate()`

```php
cloudPrivateNetworksRemoveServerCreate($id, $private_network_remove_host_request): \PidginHost\Sdk\Model\RemoveServerResponse
```



Manage private networks

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$private_network_remove_host_request = new \PidginHost\Sdk\Model\PrivateNetworkRemoveHostRequest(); // \PidginHost\Sdk\Model\PrivateNetworkRemoveHostRequest

try {
    $result = $apiInstance->cloudPrivateNetworksRemoveServerCreate($id, $private_network_remove_host_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksRemoveServerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **private_network_remove_host_request** | [**\PidginHost\Sdk\Model\PrivateNetworkRemoveHostRequest**](../Model/PrivateNetworkRemoveHostRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\RemoveServerResponse**](../Model/RemoveServerResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksRetrieve()`

```php
cloudPrivateNetworksRetrieve($id): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.

try {
    $result = $apiInstance->cloudPrivateNetworksRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksRouteStatusRetrieve()`

```php
cloudPrivateNetworksRouteStatusRetrieve($id): \PidginHost\Sdk\Model\RouteStatus
```



Each server's default route against the spec 6.2 rule, read from Proxmox, and the network's route applies.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->cloudPrivateNetworksRouteStatusRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksRouteStatusRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\PidginHost\Sdk\Model\RouteStatus**](../Model/RouteStatus.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudPrivateNetworksUpdate()`

```php
cloudPrivateNetworksUpdate($id, $private_network_update_request): \PidginHost\Sdk\Model\PrivateNetwork
```



Manage private networks

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this private network.
$private_network_update_request = new \PidginHost\Sdk\Model\PrivateNetworkUpdateRequest(); // \PidginHost\Sdk\Model\PrivateNetworkUpdateRequest

try {
    $result = $apiInstance->cloudPrivateNetworksUpdate($id, $private_network_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudPrivateNetworksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this private network. | |
| **private_network_update_request** | [**\PidginHost\Sdk\Model\PrivateNetworkUpdateRequest**](../Model/PrivateNetworkUpdateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PrivateNetwork**](../Model/PrivateNetwork.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServerPackagesByGenerationRetrieve()`

```php
cloudServerPackagesByGenerationRetrieve(): \PidginHost\Sdk\Model\ServerProduct
```



List of available server products

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudServerPackagesByGenerationRetrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServerPackagesByGenerationRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\ServerProduct**](../Model/ServerProduct.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServerPackagesList()`

```php
cloudServerPackagesList($generation, $page): \PidginHost\Sdk\Model\PaginatedServerProductList
```



List of available server products

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generation = 'generation_example'; // string | Filter packages available on the given hardware generation (slug). Excludes free-tier-only packages when the generation is not free-tier eligible.
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudServerPackagesList($generation, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServerPackagesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generation** | **string**| Filter packages available on the given hardware generation (slug). Excludes free-tier-only packages when the generation is not free-tier eligible. | [optional] |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedServerProductList**](../Model/PaginatedServerProductList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServerPackagesRetrieve()`

```php
cloudServerPackagesRetrieve($id): \PidginHost\Sdk\Model\ServerProduct
```



List of available server products

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this metered product.

try {
    $result = $apiInstance->cloudServerPackagesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServerPackagesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this metered product. | |

### Return type

[**\PidginHost\Sdk\Model\ServerProduct**](../Model/ServerProduct.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersActivityRetrieve()`

```php
cloudServersActivityRetrieve($id): \PidginHost\Sdk\Model\ActivityLogResponse
```



Get activity log for a server.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersActivityRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersActivityRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ActivityLogResponse**](../Model/ActivityLogResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersAttachIpv4Create()`

```php
cloudServersAttachIpv4Create($id, $attach_ipv4_request): \PidginHost\Sdk\Model\AttachIPv4Response
```



Attach IPv4 address to server. The first attach lands on the primary NIC; subsequent attaches add a new secondary NIC carrying just that IPv4. The address is written to the machine's network configuration, which the guest OS only reads while booting: a running server answers `reboot_required: true` and stays unreachable on that address until it is restarted. Send `reboot: true` to have the restart issued here.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$attach_ipv4_request = new \PidginHost\Sdk\Model\AttachIPv4Request(); // \PidginHost\Sdk\Model\AttachIPv4Request

try {
    $result = $apiInstance->cloudServersAttachIpv4Create($id, $attach_ipv4_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersAttachIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **attach_ipv4_request** | [**\PidginHost\Sdk\Model\AttachIPv4Request**](../Model/AttachIPv4Request.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AttachIPv4Response**](../Model/AttachIPv4Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersAttachIpv6Create()`

```php
cloudServersAttachIpv6Create($id, $attach_ipv6_request): \PidginHost\Sdk\Model\AttachIPv6Response
```



Attach IPv6 address to server. Like IPv4, the address is written to the machine's network configuration and the guest OS reads it while booting: a running server answers `reboot_required: true` until it is restarted. Send `reboot: true` to have the restart issued here.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$attach_ipv6_request = new \PidginHost\Sdk\Model\AttachIPv6Request(); // \PidginHost\Sdk\Model\AttachIPv6Request

try {
    $result = $apiInstance->cloudServersAttachIpv6Create($id, $attach_ipv6_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersAttachIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **attach_ipv6_request** | [**\PidginHost\Sdk\Model\AttachIPv6Request**](../Model/AttachIPv6Request.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AttachIPv6Response**](../Model/AttachIPv6Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersBootIsosList()`

```php
cloudServersBootIsosList($id): \PidginHost\Sdk\Model\BootISO[]
```



List the ISO catalog entries visible to this user and their package compatibility.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersBootIsosList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersBootIsosList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\BootISO[]**](../Model/BootISO.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersConsoleCreate()`

```php
cloudServersConsoleCreate($id): \PidginHost\Sdk\Model\ConsoleToken
```



Get a VNC console token for browser-based access.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersConsoleCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersConsoleCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ConsoleToken**](../Model/ConsoleToken.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersCreate()`

```php
cloudServersCreate($server_add_request): \PidginHost\Sdk\Model\ServerAddResponse
```



Create new server

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_add_request = new \PidginHost\Sdk\Model\ServerAddRequest(); // \PidginHost\Sdk\Model\ServerAddRequest

try {
    $result = $apiInstance->cloudServersCreate($server_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_add_request** | [**\PidginHost\Sdk\Model\ServerAddRequest**](../Model/ServerAddRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ServerAddResponse**](../Model/ServerAddResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersDestroy()`

```php
cloudServersDestroy($id)
```



Cloud servers

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $apiInstance->cloudServersDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersDestroyProtectionCreate()`

```php
cloudServersDestroyProtectionCreate($id, $destroy_protection_request): \PidginHost\Sdk\Model\DestroyProtectionResponse
```



Enable or disable destroy protection.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$destroy_protection_request = new \PidginHost\Sdk\Model\DestroyProtectionRequest(); // \PidginHost\Sdk\Model\DestroyProtectionRequest

try {
    $result = $apiInstance->cloudServersDestroyProtectionCreate($id, $destroy_protection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDestroyProtectionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **destroy_protection_request** | [**\PidginHost\Sdk\Model\DestroyProtectionRequest**](../Model/DestroyProtectionRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\DestroyProtectionResponse**](../Model/DestroyProtectionResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersDetachIpv4Create()`

```php
cloudServersDetachIpv4Create($id, $ipv4): \PidginHost\Sdk\Model\ServerDetachIPv4Response
```



Detach IPv4 from server. Without `ipv4`, the primary NIC's IPv4 is detached. Pass `ipv4=<id|slug>` to target a specific attached address (required when the server has more than one IPv4).

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$ipv4 = 'ipv4_example'; // string | ID or slug of the IPv4 address to detach.

try {
    $result = $apiInstance->cloudServersDetachIpv4Create($id, $ipv4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDetachIpv4Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **ipv4** | **string**| ID or slug of the IPv4 address to detach. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\ServerDetachIPv4Response**](../Model/ServerDetachIPv4Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersDetachIpv6Create()`

```php
cloudServersDetachIpv6Create($id): \PidginHost\Sdk\Model\DetachIPv6
```



Detach IPv6 from server

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersDetachIpv6Create($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersDetachIpv6Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\DetachIPv6**](../Model/DetachIPv6.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersList()`

```php
cloudServersList($page): \PidginHost\Sdk\Model\PaginatedServerList
```



Cloud servers

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudServersList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedServerList**](../Model/PaginatedServerList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersModifyPackageCreate()`

```php
cloudServersModifyPackageCreate($id, $server_product_upgrade_request): \PidginHost\Sdk\Model\ServerUpgradeResponse
```



Modify server package: downgrade available only for packages with the same disk size.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server_product_upgrade_request = new \PidginHost\Sdk\Model\ServerProductUpgradeRequest(); // \PidginHost\Sdk\Model\ServerProductUpgradeRequest

try {
    $result = $apiInstance->cloudServersModifyPackageCreate($id, $server_product_upgrade_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersModifyPackageCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server_product_upgrade_request** | [**\PidginHost\Sdk\Model\ServerProductUpgradeRequest**](../Model/ServerProductUpgradeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ServerUpgradeResponse**](../Model/ServerUpgradeResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersMonitoringRetrieve()`

```php
cloudServersMonitoringRetrieve($id): \PidginHost\Sdk\Model\ServerMonitoring
```



Show whether monitoring alerts are on for this server.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersMonitoringRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersMonitoringRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ServerMonitoring**](../Model/ServerMonitoring.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersMonitoringUpdate()`

```php
cloudServersMonitoringUpdate($id, $server_monitoring_request): \PidginHost\Sdk\Model\ServerMonitoring
```



Turn monitoring alerts on or off. Only an active server can change it.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server_monitoring_request = new \PidginHost\Sdk\Model\ServerMonitoringRequest(); // \PidginHost\Sdk\Model\ServerMonitoringRequest

try {
    $result = $apiInstance->cloudServersMonitoringUpdate($id, $server_monitoring_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersMonitoringUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server_monitoring_request** | [**\PidginHost\Sdk\Model\ServerMonitoringRequest**](../Model/ServerMonitoringRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\ServerMonitoring**](../Model/ServerMonitoring.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPartialUpdate()`

```php
cloudServersPartialUpdate($id, $patched_server_detail_request): \PidginHost\Sdk\Model\ServerDetail
```



Cloud servers

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$patched_server_detail_request = new \PidginHost\Sdk\Model\PatchedServerDetailRequest(); // \PidginHost\Sdk\Model\PatchedServerDetailRequest

try {
    $result = $apiInstance->cloudServersPartialUpdate($id, $patched_server_detail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **patched_server_detail_request** | [**\PidginHost\Sdk\Model\PatchedServerDetailRequest**](../Model/PatchedServerDetailRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\ServerDetail**](../Model/ServerDetail.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPowerManagementCreate()`

```php
cloudServersPowerManagementCreate($id, $power_management_request): \PidginHost\Sdk\Model\PowerManagement
```



Queue a power action and return the state observed before queueing. If the state cannot be read, the action is refused with HTTP 503.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$power_management_request = new \PidginHost\Sdk\Model\PowerManagementRequest(); // \PidginHost\Sdk\Model\PowerManagementRequest

try {
    $result = $apiInstance->cloudServersPowerManagementCreate($id, $power_management_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPowerManagementCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **power_management_request** | [**\PidginHost\Sdk\Model\PowerManagementRequest**](../Model/PowerManagementRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\PowerManagement**](../Model/PowerManagement.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPowerManagementRetrieve()`

```php
cloudServersPowerManagementRetrieve($id): \PidginHost\Sdk\Model\PowerManagement
```



Read the server's power state and the reason if it is unavailable.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersPowerManagementRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPowerManagementRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\PowerManagement**](../Model/PowerManagement.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPublicInterfaceCreate()`

```php
cloudServersPublicInterfaceCreate($id, $public_interface_request): \PidginHost\Sdk\Model\PublicInterface
```



Public interface

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$public_interface_request = new \PidginHost\Sdk\Model\PublicInterfaceRequest(); // \PidginHost\Sdk\Model\PublicInterfaceRequest

try {
    $result = $apiInstance->cloudServersPublicInterfaceCreate($id, $public_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPublicInterfaceCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **public_interface_request** | [**\PidginHost\Sdk\Model\PublicInterfaceRequest**](../Model/PublicInterfaceRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PublicInterface**](../Model/PublicInterface.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPublicInterfaceDestroy()`

```php
cloudServersPublicInterfaceDestroy($id)
```



Public interface

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $apiInstance->cloudServersPublicInterfaceDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPublicInterfaceDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersPublicInterfaceRetrieve()`

```php
cloudServersPublicInterfaceRetrieve($id): \PidginHost\Sdk\Model\PublicInterface
```



Public interface

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersPublicInterfaceRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersPublicInterfaceRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\PublicInterface**](../Model/PublicInterface.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersRescueEnterCreate()`

```php
cloudServersRescueEnterCreate($id, $iso_boot_request): \PidginHost\Sdk\Model\RescueEnterQueued
```



Boot the server from the default rescue image or a catalog ISO. The server is powered off first; use the console to complete the repair or installation. Not available for HA servers.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$iso_boot_request = new \PidginHost\Sdk\Model\IsoBootRequest(); // \PidginHost\Sdk\Model\IsoBootRequest

try {
    $result = $apiInstance->cloudServersRescueEnterCreate($id, $iso_boot_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersRescueEnterCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **iso_boot_request** | [**\PidginHost\Sdk\Model\IsoBootRequest**](../Model/IsoBootRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\RescueEnterQueued**](../Model/RescueEnterQueued.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersRescueExitCreate()`

```php
cloudServersRescueExitCreate($id): \PidginHost\Sdk\Model\RescueExitQueued
```



Exit rescue mode: detach the rescue ISO, restore the original boot order, and boot normally.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersRescueExitCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersRescueExitCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\RescueExitQueued**](../Model/RescueExitQueued.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersRetrieve()`

```php
cloudServersRetrieve($id): \PidginHost\Sdk\Model\ServerDetail
```



Cloud servers

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ServerDetail**](../Model/ServerDetail.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersRetryProvisionCreate()`

```php
cloudServersRetryProvisionCreate($id): \PidginHost\Sdk\Model\RetryProvision
```



Retry provision in case of a failed server

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersRetryProvisionCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersRetryProvisionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\RetryProvision**](../Model/RetryProvision.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsCreate()`

```php
cloudServersSnapshotsCreate($id, $snapshot_create_request): \PidginHost\Sdk\Model\SnapshotCreateQueued
```



Cloud servers

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$snapshot_create_request = new \PidginHost\Sdk\Model\SnapshotCreateRequest(); // \PidginHost\Sdk\Model\SnapshotCreateRequest

try {
    $result = $apiInstance->cloudServersSnapshotsCreate($id, $snapshot_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersSnapshotsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **snapshot_create_request** | [**\PidginHost\Sdk\Model\SnapshotCreateRequest**](../Model/SnapshotCreateRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\SnapshotCreateQueued**](../Model/SnapshotCreateQueued.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsDestroy()`

```php
cloudServersSnapshotsDestroy($id, $snapshot_name): \PidginHost\Sdk\Model\SnapshotDeleteQueued
```



Delete a snapshot.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$snapshot_name = 'snapshot_name_example'; // string

try {
    $result = $apiInstance->cloudServersSnapshotsDestroy($id, $snapshot_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersSnapshotsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **snapshot_name** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\SnapshotDeleteQueued**](../Model/SnapshotDeleteQueued.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsList()`

```php
cloudServersSnapshotsList($id): \PidginHost\Sdk\Model\Snapshot[]
```



List snapshots for this server or queue a new snapshot.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersSnapshotsList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersSnapshotsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\Snapshot[]**](../Model/Snapshot.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersSnapshotsRollbackCreate()`

```php
cloudServersSnapshotsRollbackCreate($id, $snapshot_name): \PidginHost\Sdk\Model\SnapshotRollbackQueued
```



Rollback the server to a specific snapshot.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$snapshot_name = 'snapshot_name_example'; // string

try {
    $result = $apiInstance->cloudServersSnapshotsRollbackCreate($id, $snapshot_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersSnapshotsRollbackCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **snapshot_name** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\SnapshotRollbackQueued**](../Model/SnapshotRollbackQueued.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersTrafficRetrieve()`

```php
cloudServersTrafficRetrieve($id): \PidginHost\Sdk\Model\ServerTrafficResponse
```



Get this month's traffic usage for a server.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersTrafficRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersTrafficRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ServerTrafficResponse**](../Model/ServerTrafficResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersUpdate()`

```php
cloudServersUpdate($id, $server_detail_request): \PidginHost\Sdk\Model\ServerDetail
```



Cloud servers

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.
$server_detail_request = new \PidginHost\Sdk\Model\ServerDetailRequest(); // \PidginHost\Sdk\Model\ServerDetailRequest

try {
    $result = $apiInstance->cloudServersUpdate($id, $server_detail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |
| **server_detail_request** | [**\PidginHost\Sdk\Model\ServerDetailRequest**](../Model/ServerDetailRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\ServerDetail**](../Model/ServerDetail.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersUsageRetrieve()`

```php
cloudServersUsageRetrieve($id): \PidginHost\Sdk\Model\ServerUsageResponse
```



Get current resource usage for a server.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this virtual machine.

try {
    $result = $apiInstance->cloudServersUsageRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersUsageRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this virtual machine. | |

### Return type

[**\PidginHost\Sdk\Model\ServerUsageResponse**](../Model/ServerUsageResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesCreate()`

```php
cloudServersVolumesCreate($server_id, $volume_request): \PidginHost\Sdk\Model\Volume
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_request = new \PidginHost\Sdk\Model\VolumeRequest(); // \PidginHost\Sdk\Model\VolumeRequest

try {
    $result = $apiInstance->cloudServersVolumesCreate($server_id, $volume_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume_request** | [**\PidginHost\Sdk\Model\VolumeRequest**](../Model/VolumeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesDestroy()`

```php
cloudServersVolumesDestroy($server_id, $volume_id)
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_id = 'volume_id_example'; // string

try {
    $apiInstance->cloudServersVolumesDestroy($server_id, $volume_id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesList()`

```php
cloudServersVolumesList($server_id): \PidginHost\Sdk\Model\Volume[]
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string

try {
    $result = $apiInstance->cloudServersVolumesList($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume[]**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesPartialUpdate()`

```php
cloudServersVolumesPartialUpdate($server_id, $volume_id, $patched_volume_update_request): \PidginHost\Sdk\Model\Volume
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_id = 'volume_id_example'; // string
$patched_volume_update_request = new \PidginHost\Sdk\Model\PatchedVolumeUpdateRequest(); // \PidginHost\Sdk\Model\PatchedVolumeUpdateRequest

try {
    $result = $apiInstance->cloudServersVolumesPartialUpdate($server_id, $volume_id, $patched_volume_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume_id** | **string**|  | |
| **patched_volume_update_request** | [**\PidginHost\Sdk\Model\PatchedVolumeUpdateRequest**](../Model/PatchedVolumeUpdateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesRetrieve()`

```php
cloudServersVolumesRetrieve($server_id, $volume_id): \PidginHost\Sdk\Model\Volume
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_id = 'volume_id_example'; // string

try {
    $result = $apiInstance->cloudServersVolumesRetrieve($server_id, $volume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume_id** | **string**|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServersVolumesUpdate()`

```php
cloudServersVolumesUpdate($server_id, $volume_id, $volume_update_request): \PidginHost\Sdk\Model\Volume
```



Adds :class:`~account.iam_enforcement.IAMActionPermission` as an intersection with the route's existing permission classes (spec §6).  Detail routes (``self.detail``) defer the role/scope check to ``has_object_permission`` so the account-scoped ``get_object`` answers 404 for foreign IDs before any role denial; every other route enforces in ``has_permission``. A detail action that never calls ``get_object`` would skip enforcement — the route probes pin the denial for each route.

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string
$volume_id = 'volume_id_example'; // string
$volume_update_request = new \PidginHost\Sdk\Model\VolumeUpdateRequest(); // \PidginHost\Sdk\Model\VolumeUpdateRequest

try {
    $result = $apiInstance->cloudServersVolumesUpdate($server_id, $volume_id, $volume_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudServersVolumesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**|  | |
| **volume_id** | **string**|  | |
| **volume_update_request** | [**\PidginHost\Sdk\Model\VolumeUpdateRequest**](../Model/VolumeUpdateRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudStorageProductsList()`

```php
cloudStorageProductsList($page): \PidginHost\Sdk\Model\PaginatedStorageProductList
```



List of available storage products

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->cloudStorageProductsList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudStorageProductsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |

### Return type

[**\PidginHost\Sdk\Model\PaginatedStorageProductList**](../Model/PaginatedStorageProductList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudStorageProductsRetrieve()`

```php
cloudStorageProductsRetrieve($id): \PidginHost\Sdk\Model\StorageProduct
```



List of available storage products

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this metered product.

try {
    $result = $apiInstance->cloudStorageProductsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudStorageProductsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this metered product. | |

### Return type

[**\PidginHost\Sdk\Model\StorageProduct**](../Model/StorageProduct.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesAttachCreate()`

```php
cloudVolumesAttachCreate($id, $attach_volume_request): \PidginHost\Sdk\Model\AttachVolume
```



Attach existing volume to a server

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.
$attach_volume_request = new \PidginHost\Sdk\Model\AttachVolumeRequest(); // \PidginHost\Sdk\Model\AttachVolumeRequest

try {
    $result = $apiInstance->cloudVolumesAttachCreate($id, $attach_volume_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesAttachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |
| **attach_volume_request** | [**\PidginHost\Sdk\Model\AttachVolumeRequest**](../Model/AttachVolumeRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\AttachVolume**](../Model/AttachVolume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesDestroy()`

```php
cloudVolumesDestroy($id)
```



Volumes management

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.

try {
    $apiInstance->cloudVolumesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesDetachCreate()`

```php
cloudVolumesDetachCreate($id): \PidginHost\Sdk\Model\DetachVolume
```



Detach volume from server

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.

try {
    $result = $apiInstance->cloudVolumesDetachCreate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesDetachCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |

### Return type

[**\PidginHost\Sdk\Model\DetachVolume**](../Model/DetachVolume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesList()`

```php
cloudVolumesList(): \PidginHost\Sdk\Model\Volume[]
```



Volumes management

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudVolumesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PidginHost\Sdk\Model\Volume[]**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesPartialUpdate()`

```php
cloudVolumesPartialUpdate($id, $patched_volume_update_request): \PidginHost\Sdk\Model\Volume
```



Volumes management

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.
$patched_volume_update_request = new \PidginHost\Sdk\Model\PatchedVolumeUpdateRequest(); // \PidginHost\Sdk\Model\PatchedVolumeUpdateRequest

try {
    $result = $apiInstance->cloudVolumesPartialUpdate($id, $patched_volume_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |
| **patched_volume_update_request** | [**\PidginHost\Sdk\Model\PatchedVolumeUpdateRequest**](../Model/PatchedVolumeUpdateRequest.md)|  | [optional] |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesRetrieve()`

```php
cloudVolumesRetrieve($id): \PidginHost\Sdk\Model\Volume
```



Volumes management

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.

try {
    $result = $apiInstance->cloudVolumesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudVolumesUpdate()`

```php
cloudVolumesUpdate($id, $volume_update_request): \PidginHost\Sdk\Model\Volume
```



Volumes management

### Example

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


$apiInstance = new PidginHost\Sdk\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this storage.
$volume_update_request = new \PidginHost\Sdk\Model\VolumeUpdateRequest(); // \PidginHost\Sdk\Model\VolumeUpdateRequest

try {
    $result = $apiInstance->cloudVolumesUpdate($id, $volume_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudVolumesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this storage. | |
| **volume_update_request** | [**\PidginHost\Sdk\Model\VolumeUpdateRequest**](../Model/VolumeUpdateRequest.md)|  | |

### Return type

[**\PidginHost\Sdk\Model\Volume**](../Model/Volume.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
