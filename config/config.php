<?php
session_start();

//APPROOT
define('APPROOT', dirname(dirname(dirname(__FILE__))));

$root = str_replace($_SERVER["DOCUMENT_ROOT"], "", str_replace("\\", "/", dirname(dirname(__FILE__))));
define('ROOT', $root.'/');
define('IMGROOT', $root == '/' ? '' : substr(ROOT,0,-1));


############################################
    /** CHANGE INFORMATIONS BELLOW */
############################################


//URLROOT (Dynamic links)
define('URLROOT', 'https://milioner.com'.$root);

define('SITENAME', 'Sophia PHP framework');

//Database params
define('DB_HOST', 'localhost'); //Add your db host
define('DB_USER', 'root'); // Add your DB root
define('DB_PASS', ''); //Add your DB pass
define('DB_NAME', 'test'); //Add your DB Name

define("EMAIL_NAME", "Sophia");
define("EMAIL_HOST", "smtp.google.com");
define("EMAIL_USERNAME", "example@gmail.com");
define("EMAIL_PASSWORD", "undefiend");


define("DEV_MODE", "1");