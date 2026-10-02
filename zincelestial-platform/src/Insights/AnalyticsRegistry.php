<?php
namespace ZinCelestial\Platform\Insights; defined('ABSPATH')||exit;
final class AnalyticsRegistry{private array $providers=[];public function register(string $id,callable $provider):void{$this->providers[sanitize_key($id)]=$provider;}public function collect():array{$out=[];foreach($this->providers as $id=>$provider){$v=call_user_func($provider);if(is_array($v))$out[$id]=$v;}return $out;}}
