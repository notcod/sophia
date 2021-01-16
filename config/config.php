<?php
session_start();

//Database params
define('DB_HOST', 'localhost'); //Add your db host
define('DB_USER', 'root'); // Add your DB root
define('DB_PASS', ''); //Add your DB pass
define('DB_NAME', 'proto'); //Add your DB Name

//APPROOT
define('APPROOT', dirname(dirname(dirname(__FILE__))));

$root = str_replace($_SERVER["DOCUMENT_ROOT"], "", str_replace("\\", "/", dirname(dirname(__FILE__))));
define('ROOT', $root.'/');
define('IMGROOT', $root == '/' ? '' : substr(ROOT,0,-1));

//URLROOT (Dynamic links)
define('URLROOT', 'https://milioner.com'.$root);

define('SITENAME', 'Sophia PHP framework');


define("EMAIL_NAME", "Sophia");
define("EMAIL_HOST", "server.example.rs");
define("EMAIL_USERNAME", "122121@example.com");
define("EMAIL_PASSWORD", "12221212");


define("DEV_MODE", "1");
define("MINIMIZE_CSS", "0");