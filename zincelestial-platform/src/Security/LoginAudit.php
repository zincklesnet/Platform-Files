<?php
namespace ZinCelestial\Platform\Security; defined('ABSPATH')||exit;
final class LoginAudit{public function report():array{return array('xmlrpc_enabled'=>(bool)apply_filters('xmlrpc_enabled',true),'anyone_can_register'=>(bool)get_option('users_can_register'),'default_role'=>(string)get_option('default_role'),'application_passwords_available'=>function_exists('wp_is_application_passwords_available')?(bool)wp_is_application_passwords_available():null);}}
