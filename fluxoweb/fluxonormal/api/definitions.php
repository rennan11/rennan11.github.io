<?php

define("SITE_NAME","Carger");

define("DB_LOCAL_HOST", "localhost");
define("DB_LOCAL_USER", "root");
define("DB_LOCAL_PASS", "");
define("DB_LOCAL_DB", "carger");

define("DB_REMOTE_HOST", "");
define("DB_REMOTE_USER", "");
define("DB_REMOTE_PASS", "");
define("DB_REMOTE_DB", "");

define("DEBUG", false);
define("SHOW_QUERIES", false);
define("API_URL", "api");
define("SECURE", isset($_SERVER["HTTPS"]));
define("DEFAULT_EMAIL", "");
if(in_array($_SERVER['HTTP_HOST'], array('localhost', "192.168.1.149", "::1"))) {
    define("LOCAL", true);
    define("BASE_URL", (SECURE ? "https" : "http") . "://localhost/rennan11.github.io/fluxoweb/fluxonormal/");

    define("DB_HOST", DB_LOCAL_HOST);
    define("DB_USER", DB_LOCAL_USER);
    define("DB_PASS", DB_LOCAL_PASS);
    define("DB_DB", DB_LOCAL_DB);
} else {
    define("LOCAL", false);
    define("BASE_URL", (SECURE ? "https" : "http") . "://rennansantos.me/rennan11.github.io/fluxoweb/fluxonormal/");

    define("DB_HOST", DB_REMOTE_HOST);
    define("DB_USER", DB_REMOTE_USER);
    define("DB_PASS", DB_REMOTE_PASS);
    define("DB_DB", DB_REMOTE_DB);
}

if(SHOW_QUERIES || DEBUG) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}

define("DEFAULT_RESPONSE", BASE_URL);

$logged_in = false;