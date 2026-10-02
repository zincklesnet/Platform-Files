# Platform 1.2.1 hotfix

Fixes the fatal error caused by unconditional construction of `Network\AggregationController` when that optional class is absent from a reconstructed package.

Admin components are now registered only when their classes are available. Missing components emit `zca_platform_component_missing`; the plugin continues in a degraded but recoverable mode. Platform translation loading is deferred to `init`.

This does not fabricate the missing Network implementation. Restore the original Network classes before enabling their related screens.
