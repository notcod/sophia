<?php
############################################
    /** CHANGE INFORMATIONS BELLOW */
############################################

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



define('DIR', str_replace("\\", "/",dirname(dirname(__FILE__))."/"));
define('APPROOT', str_replace("\\", "/",dirname(dirname(dirname(__FILE__))))."/");

define('ROOT', str_replace($_SERVER["DOCUMENT_ROOT"], "", str_replace("\\", "/", dirname(dirname(dirname(__FILE__))))).'/');
define('IMGROOT', ROOT == '/' ? '' : substr(ROOT, 0, -1));

define("DEV_MODE", "1");
define("CREATE_FILE", "1");

define("URLROOT", "http://$_SERVER[HTTP_HOST]".ROOT);