<?php
namespace ZinCelestial\Platform\Compliance;defined('ABSPATH')||exit;
final class ComplianceResult{public function __construct(public readonly string $control_id,public readonly string $status,public readonly array $evidence_ids,public readonly array $reasons,public readonly int $evaluated_at){}public function to_array():array{return get_object_vars($this);}}
