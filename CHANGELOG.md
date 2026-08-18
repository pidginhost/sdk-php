# Changelog

All notable changes to the PidginHost PHP SDK are documented here.

This SDK is auto-generated from the [PidginHost API schema](https://www.pidginhost.com/api/schema/).
Version bumps reflect schema changes, not hand-written code changes.

## v0.12.0

### Changed (breaking)

- **The eight `/api/cloud/buckets/` routes now describe their real request and
  response bodies.** The bucket viewset advertised its fully read-only `Bucket`
  serializer as the body of every route, so `create`, `resize` and `visibility`
  documented no writable field to send, and `credentials/reveal` and
  `credentials/rotate` claimed to return `Bucket` while really returning an
  access key and secret. Any client that trusted the documented shape
  read a credential response that could not contain credentials -- and on
  `rotate` the old keys are already invalidated by then.

  New components: `BucketCreate` (`name`, `quota_gb`, `public_read`),
  `BucketResize` (`quota_gb`), `BucketVisibility` (`public_read`),
  `BucketCredentials` (`bucket`, `endpoint`, `region`, `access_key`,
  `secret_key`) and `BucketCancelResponse` (`id`, `status`). `create` documents
  the `202` it really answers; `DELETE` returns `202` with a body rather than
  `204`; the two credential routes take no request body and declare
  `Cache-Control: no-store`.

- **Decimal fields are now `string` instead of `float`.** The API serialises every
  `DecimalField` as a JSON string (Django REST Framework's
  `COERCE_DECIMAL_TO_STRING` default), and the schema says so:
  `type: string, format: decimal`. This generator mapped that to `float` anyway,
  which cannot decode `"12.50"` -- so **every response carrying a price failed
  to parse**, including `Deposit`, `Invoice`, `Subscription`, `Service`,
  `Profile.funds`, `TLD` pricing, `ClusterDetail.price_per_month` and
  `FundsBalanceResponse.balance`. 35 properties across 22 components were
  affected. The Python, JS and Rust SDKs already produced strings; only this
  one and Go did not.

  Read the value as a string and parse it with a decimal type of your choosing.
  Do not use a binary float for money.

### Fixed

- Generator bumped to openapi-generator 7.24.0, which fixes the escaping of
  `validate:"regexp=..."` struct tags on pattern-constrained fields. No API
  shapes changed.

## v0.11.0

> Versions v0.8.0 through v0.10.2 shipped without entries in this file. The
> [Go changelog](https://github.com/pidginhost/sdk-go/blob/main/CHANGELOG.md)
> records those schema changes; they apply to this SDK too.

### Changed (breaking)

- **`AttachIPv4` → `AttachIPv4Request`, `AttachIPv6` → `AttachIPv6Request`.** The server attach routes now have distinct request and response components, so the generated request types are renamed.
- **`POST /api/cloud/servers/{id}/detach-ipv4/` returns `ServerDetachIPv4Response`** instead of `DetachIPv4Response`. The `detached` field is unchanged. `DetachIPv4Response` still serves the standalone `POST /api/cloud/ipv4/{id}/detach/` route.
- **Six enum components renamed off content-derived names.** Where several serializers expose a field called `status`, `type` or `priority` over different choice sets, drf-spectacular was naming the component by hashing its values, so adding a single choice silently renamed the type. These are now pinned:

  | Was | Now |
  |-----|-----|
  | `Priority3cdEnum` | `TicketPriorityEnum` |
  | `Status03cEnum` | `InvoiceStatusEnum` |
  | `Status63aEnum` | `ServiceStatusEnum` |
  | `StatusA57Enum` | `ResourceStatusEnum` |
  | `StatusEf2Enum` | `TicketStatusEnum` |
  | `Type85bEnum` | `ClusterTypeEnum` |

  A one-time rename: the names no longer move when a choice set gains a value. `ClusterType.type` had already been renamed once this way (`Type2faEnum` → `Type85bEnum` when `beta` was added) and now shares the pre-existing `ClusterTypeEnum`, which carried the identical `dev`/`prod`/`beta` set under a second name.

### Added

- **`reboot` on `AttachIPv4Request` and `AttachIPv6Request`** (boolean, default `false`). A public address is written to the machine config and the guest OS only reads it while booting, so on a running server the address is inert until a restart. Set `reboot` to have the API issue that restart.
- **`reboot_required` and `rebooted` on `AttachIPv4Response` and `AttachIPv6Response`.** `attached` alone could describe a server that answers neither ping nor SSH on the new address; these say whether a restart is still owed and whether one was performed. A stopped server reports both `false` and is never booted just to pick the address up, and `reboot: true` on a rescue-mode or transitioning server keeps `reboot_required: true` rather than rebooting out of the rescue ISO.
- **`AttachIPv6Response`** is new. `POST /api/cloud/servers/{id}/attach-ipv6/` previously echoed the request body back, so there was no `attached` flag to check.
- **Rescue mode**: `POST /api/cloud/servers/{id}/rescue/enter/` and `.../rescue/exit/`, typed as `RescueEnterQueued` / `RescueExitQueued`.
- **Boot ISOs**: `GET /api/cloud/servers/{id}/boot-isos/` with `BootISO`, `PaginatedBootISOList`, and `IsoBootRequest`.
- **Glue / personal-DNS records**: `/api/domain/domain/{domain}/dns/` and `/api/domain/domain/{domain}/dns/{name}/`, typed as `DNSGlue` and `PaginatedDNSGlueList`.
- `TicketMessage`, `ServiceCompany`, `DestroyProtectionResponse`, and `CategoryEnum`.

### Fixed

- **`attach-ipv4` reports a missing field as a missing field.** Omitting `ipv4` returned `Object with address=None does not exist`, which reads as a bad address rather than a bad field name; it is now `400 {"ipv4": ["This field is required."]}`.
- **`attach-ipv6` rejects a conflicting address with a `400`** instead of `200` plus a message, so a failed attach no longer looks like a success. Re-attaching the address a server already has is idempotent.

### Notes

In this SDK, model class names match the component names; accessors follow (`getRebootRequired()`).


## v0.7.0

### Added

- Floating IP support. New API groups `cloud_floating_ipv4` and `cloud_floating_ipv6` cover list, create, retrieve, destroy, plus the `authorize`, `unauthorize`, and `authorizations` actions. Floating IPs can be authorized on multiple servers simultaneously for customer-managed HA (keepalived/VRRP inside the guest).
- New models: `FloatingIPv4`, `FloatingIPv6`, `FloatingIPv4Create`, `FloatingIPv6Create`, `FloatingIPAuthorization`, `FloatingIPAuthorizeRequest`, and their authorize/unauthorize response types.

## v0.6.0

### Added

- `ServerAdd::setUserData()` for cloud-init startup scripts (bash with shebang or `#cloud-config` YAML), max 64 KiB, Linux images only.

## v0.5.0

### Added

- `CHANGELOG.md` is now bundled with the generated package, mirroring the Go SDK practice.

### Changed

- Build pipeline overhauled: fail-fast schema validation, per-language smoke tests, single-click release approval gate.

### Notes

- No SDK API changes — generated from the same schema as 0.4.x.

## v0.4.1

### Changed

- Regenerated alongside the Go SDK 0.4.1 patch release (no functional changes for PHP).

## v0.4.0

### Added

- `Server::getGeneration()` exposing the server hardware generation (e.g. `general-purpose`).
- New API endpoints: cloud generations, server packages by generation.
- `ServerAdd::setNoNetworkAcknowledged()` for creating servers without public networking.

### Changed

- Regenerated from latest API schema.

## v0.3.0

### Added

- Kubernetes API: clusters, node pools, nodes, HTTP/TCP/UDP routes.
- Billing API: funds, deposits, invoices, services, subscriptions.
- Dedicated servers API.
- FreeDNS API.
- Hosting API.
- Support tickets API.
- Domain API: registrants, transfers, nameservers, TLD listing.

### Changed

- Regenerated from latest API schema with full API coverage.

## v0.2.0

### Added

- Cloud compute: servers, images, packages, volumes, firewalls, IPs, networks.
- Account management: profile, SSH keys, API tokens.
- Convenience wrapper: `PidginHost\Sdk\PidginHost`.
