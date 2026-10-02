<?php
namespace ZinCelestial\Platform\Ecosystem; defined('ABSPATH')||exit;
final class CapabilityRegistry{private array $items=[];public function register(string $id,callable $resolver):void{$this->items[sanitize_key($id)]=$resolver;}public function has(string $id,?int $site_id=null):bool{$id=sanitize_key($id);if(!isset($this->items[$id]))return false;if($site_id&&is_multisite()){switch_to_blog($site_id);try{return(bool)call_user_func($this->items[$id]);}finally{restore_current_blog();}}return(bool)call_user_func($this->items[$id]);}}
