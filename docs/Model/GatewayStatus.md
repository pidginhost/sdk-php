# GatewayStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | [**\PidginHost\Sdk\Model\GatewayStateEnum**](GatewayStateEnum.md) |  |
**state_reason** | **string** |  |
**state_changed_at** | **string** |  |
**desired_revision** | **int** |  |
**applied_revision** | **int** |  |
**last_status_at** | **string** |  |
**agent_version** | **string** |  |
**envoy_version** | **string** |  |
**image_version** | **string** |  |
**attempted_revision** | **int** |  |
**local_ready** | **bool** |  |
**clock_synchronized** | **bool** |  |
**apply_error** | [**\PidginHost\Sdk\Model\GatewayApplyError**](GatewayApplyError.md) |  |
**interfaces** | [**\PidginHost\Sdk\Model\GatewayInterface[]**](GatewayInterface.md) |  |
**conntrack** | [**\PidginHost\Sdk\Model\GatewayConntrack**](GatewayConntrack.md) |  |
**egress_probe** | [**\PidginHost\Sdk\Model\GatewayEgressProbe**](GatewayEgressProbe.md) |  |
**security_updates** | **int** |  |
**reboot_required** | **bool** |  |
**uptime_s** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
