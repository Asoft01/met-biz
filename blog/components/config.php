<?php

if (preg_match('/^cli/i', php_sapi_name()) || !isset($_SERVER['REQUEST_METHOD'])) {
    $desiredServerName = php_uname("n");
    $invokedFromCLI = true;
} else {
    $desiredServerName = $_SERVER['SERVER_NAME'];
}

if (preg_match('/^localhost/', $desiredServerName)) {
    define("ROOT_DIR", "http://localhost/main-website/blog/");
    define("ROOT_DIR_MAIN", "http://localhost/main-website/");
    $site_version = "localhost";
} else {
    define("ROOT_DIR", "http://msbmonline.org.uk/ui-test/");
    $site_version = "online";
}