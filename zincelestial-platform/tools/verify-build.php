<?php
foreach(['verify-autoload.php','verify-dependencies.php','verify-manifest.php'] as $f){passthru(PHP_BINARY.' '.escapeshellarg(__DIR__.'/'.$f),$c);if($c!==0){echo "BUILD FAILED
";exit($c);}}echo "BUILD PASSED
";