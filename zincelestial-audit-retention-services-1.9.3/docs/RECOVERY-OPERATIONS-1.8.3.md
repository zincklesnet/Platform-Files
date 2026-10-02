# Recovery Operations 1.8.3

Adds capability- and nonce-gated recovery requests, short-lived HMAC replay tokens bound to tenant/run/version, single-use replay guards, immutable audit callbacks, resume/compensation controls, and end-to-end Operations Center REST tests.

Security rules: replay never mutates the original immutable history; create a new run with a new idempotency key. Persist consumed JTIs atomically, separate requester/approver/executor roles, reauthorize every step, redact context, require explicit compensation plans, and rate-limit recovery endpoints. Production release requires real WordPress REST, multisite, concurrency, migration, crash, replay, and rollback testing.
