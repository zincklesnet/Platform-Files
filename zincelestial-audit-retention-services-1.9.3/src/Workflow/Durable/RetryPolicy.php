<?php
namespace ZinCelestial\Platform\Workflow\Durable;defined('ABSPATH')||exit;
final class RetryPolicy {public function __construct(private int $max_attempts=3,private int $base_seconds=60,private int $max_seconds=3600){}public function can_retry(int $attempt):bool{return $attempt<$this->max_attempts;}public function delay(int $attempt):int{$raw=min($this->max_seconds,$this->base_seconds*(2**max(0,$attempt-1)));return $raw+random_int(0,max(1,(int)($raw*.2)));}}
