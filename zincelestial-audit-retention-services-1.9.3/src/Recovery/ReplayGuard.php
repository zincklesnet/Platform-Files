<?php
namespace ZinCelestial\Platform\Recovery;use RuntimeException;defined('ABSPATH')||exit;
final class ReplayGuard {private array $used=[];public function consume(string $jti):void{$key=hash('sha256',$jti);if(isset($this->used[$key]))throw new RuntimeException('Replay token already consumed.');$this->used[$key]=true;}public function assert_safe_context(array $context):void{foreach(['password','token','secret','authorization','cookie'] as $k)if(array_key_exists($k,array_change_key_case($context,CASE_LOWER)))throw new RuntimeException('Sensitive replay context rejected.');}}
