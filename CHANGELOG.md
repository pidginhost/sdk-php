# Changelog

All notable changes to the PidginHost PHP SDK are documented here.

This SDK is auto-generated from the [PidginHost API schema](https://www.pidginhost.com/api/schema/).
Version bumps reflect schema changes, not hand-written code changes.

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
