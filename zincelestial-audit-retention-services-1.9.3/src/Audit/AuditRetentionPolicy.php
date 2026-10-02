<?php
namespace ZinCelestial\Platform\Audit;use InvalidArgumentException;defined('ABSPATH')||exit;
final class AuditRetentionPolicy{public function __construct(public readonly int $retain_days=2555,public readonly int $legal_hold_days=0,public readonly bool $require_verified_export=true){if($retain_days<30||$retain_days>36500||$legal_hold_days<0)throw new InvalidArgumentException('Invalid retention policy.');}public function deletable_before(int $now):int{return $now-(max($this->retain_days,$this->legal_hold_days)*DAY_IN_SECONDS);}}
