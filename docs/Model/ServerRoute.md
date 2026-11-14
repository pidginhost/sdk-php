# ServerRoute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**server** | **int** |  |
**hostname** | **string** |  |
**power** | [**\PidginHost\Sdk\Model\RoutePowerEnum**](RoutePowerEnum.md) |  |
**config** | [**\PidginHost\Sdk\Model\RouteConfigEnum**](RouteConfigEnum.md) | The spec 6.2 rule over current config.  * &#x60;ok&#x60; - ok * &#x60;missing&#x60; - missing * &#x60;duplicate&#x60; - duplicate * &#x60;obsolete&#x60; - obsolete * &#x60;unknown&#x60; - unknown |
**pending** | [**\PidginHost\Sdk\Model\RouteConfigEnum**](RouteConfigEnum.md) | The rule over the config a reboot applies; null without one.  * &#x60;ok&#x60; - ok * &#x60;missing&#x60; - missing * &#x60;duplicate&#x60; - duplicate * &#x60;obsolete&#x60; - obsolete * &#x60;unknown&#x60; - unknown |
**routes_here** | **bool** | The rule gives this network&#39;s interface the default route. |
**acknowledged** | **bool** | The last route apply&#39;s config and boot still hold. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
