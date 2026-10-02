<?php
namespace ZinCelestial\Platform\Compliance;use InvalidArgumentException;defined('ABSPATH')||exit;
final class ComplianceControl{public function __construct(public readonly string $id,public readonly string $framework,public readonly string $severity,public readonly array $evidence_types,public readonly int $evidence_max_age){if(!preg_match('/^[a-z0-9_.-]+$/',$id)||!in_array($severity,['low','medium','high','critical'],true)||$evidence_max_age<60)throw new InvalidArgumentException('Invalid compliance control.');}}
