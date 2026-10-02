<?php
namespace ZinCelestial\Platform\Recovery;defined('ABSPATH')||exit;
final class RecoveryAuthorization {public function authorize(int $actor,int $site,string $run,string $operation,string $nonce):bool{if($site<1||!in_array($operation,['resume','replay','compensate'],true))return false;if(!wp_verify_nonce($nonce,'zcp_recovery_'.$site.'_'.$run.'_'.$operation))return false;if(!user_can($actor,'manage_options'))return false;return !is_multisite()||user_can($actor,'manage_sites');}}
