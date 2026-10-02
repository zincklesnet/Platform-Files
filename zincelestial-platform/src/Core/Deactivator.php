<?php
namespace ZinCelestial\Platform\Core; defined('ABSPATH')||exit;
final class Deactivator{public static function deactivate():void{foreach(array('zcp_network_aggregate_batch','zcp_network_aggregate_recovery') as $hook){$timestamp=wp_next_scheduled($hook);while($timestamp){wp_unschedule_event($timestamp,$hook);$timestamp=wp_next_scheduled($hook);}}}}
