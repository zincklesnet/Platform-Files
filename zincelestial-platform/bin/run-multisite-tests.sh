#!/usr/bin/env bash
set -euo pipefail
WP_TESTS_MULTISITE=1 vendor/bin/phpunit -c phpunit.xml.dist
