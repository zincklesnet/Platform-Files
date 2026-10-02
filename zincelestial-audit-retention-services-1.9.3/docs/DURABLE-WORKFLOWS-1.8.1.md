# Durable Workflows 1.8.1

Provides a wpdb repository with optimistic version checks, site-scoped reads, leased claims, heartbeats, a schema installer, append-only event-store interface, bounded exponential retry with jitter, and compensation support. Mutating handlers must remain allowlisted and idempotent. Approvals bind to workflow version/scope and expire. Do not store credentials in workflow context or events. Database persistence must be deployed with backups and migration rollback.
