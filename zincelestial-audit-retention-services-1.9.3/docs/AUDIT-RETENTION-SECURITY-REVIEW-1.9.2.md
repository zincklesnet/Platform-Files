# Audit retention security review

Hardened controls: minimum/maximum retention bounds; tenant-scoped deletion; legal-hold exclusion; verified export prerequisite; explicit approval identifier; transactional purge; evidence and export integrity hashes; retention index. Never permit application roles to UPDATE audit history. Use WORM/object-lock exports, dual control for retention changes, immutable purge audit events, key escrow/rotation, restore drills, clock monitoring, and jurisdiction-specific retention configuration.

Production gaps: schema ALTER via dbDelta must be tested on every supported database; purge and its audit receipt should be atomically coordinated; export verification needs an external verifier; legal-hold creation/release needs separate approval and immutable logging.
