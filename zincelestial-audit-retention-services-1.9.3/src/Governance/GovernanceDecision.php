<?php
namespace ZinCelestial\Platform\Governance;defined('ABSPATH')||exit;
final class GovernanceDecision{public function __construct(public readonly string $id,public readonly int $site_id,public readonly string $policy_id,public readonly string $operation,public readonly string $result,public readonly int $requester_id,public readonly array $approver_ids,public readonly int $decided_at){}public function to_array():array{return get_object_vars($this);}}
