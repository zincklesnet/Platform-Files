<?php
use PHPUnit\Framework\TestCase;use ZinCelestial\Platform\Recovery\ReplayGuard;
final class ReplaySecurityTest extends TestCase {public function test_replay_is_single_use():void{$g=new ReplayGuard();$g->consume('jti');$this->expectException(RuntimeException::class);$g->consume('jti');}public function test_sensitive_context_is_rejected():void{$this->expectException(RuntimeException::class);(new ReplayGuard())->assert_safe_context(['token'=>'secret']);}}
