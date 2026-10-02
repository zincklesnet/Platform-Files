<?php
$tests=getenv('WP_TESTS_DIR')?:'/tmp/wordpress-tests-lib';require $tests.'/includes/functions.php';tests_add_filter('muplugins_loaded',function(){require dirname(__DIR__,2).'/zincelestial-platform.php';});require $tests.'/includes/bootstrap.php';
