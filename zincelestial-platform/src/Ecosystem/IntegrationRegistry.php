<?php
namespace ZinCelestial\Platform\Ecosystem; defined('ABSPATH')||exit;
final class IntegrationRegistry{private array $items=[];public function register(string $id,callable $detector,array $meta=[]):void{$this->items[sanitize_key($id)]=[$detector,$meta];}public function available(string $id):bool{$id=sanitize_key($id);return isset($this->items[$id])&&(bool)call_user_func($this->items[$id][0]);}public function all():array{$out=[];foreach($this->items as $id=>$item)$out[$id]=$item[1]+['available'=>(bool)call_user_func($item[0])];return $out;}}
