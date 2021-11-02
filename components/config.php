<?php

if (preg_match('/^cli/i', php_sapi_name()) || !isset($_SERVER['REQUEST_METHOD'])) {
    $desiredServerName = php_uname("n");
    $invokedFromCLI = true;
} else {
    $desiredServerName = $_SERVER['SERVER_NAME'];
}

if (preg_match('/^localhost/', $desiredServerName)) {
    define("ROOT_DIR", "http://localhost/msbm/main-website/");
    $site_version = "localhost";
} else {
    define("ROOT_DIR", "https://msbm.org.uk/ui-test/prototype/");
    $site_version = "online";
}
