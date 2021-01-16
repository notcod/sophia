<?php


ini_set("log_errors", 1);
error_reporting(E_ERROR | E_PARSE);
ini_set("error_log", "/home/developer/web/betanalize.com/public_htmllogs/php-error.log");

require_once("vendor/autoload.php");
$init = new Sophia\Core();
