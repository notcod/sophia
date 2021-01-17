<?php
session_start();

function is_defined($Constant)
{
    $constants = get_defined_constants(true);
    return isset($constants['user'][$Constant]);
}

if(!is_defined("APPROOT")) define('APPROOT', dirname(dirname(dirname(__FILE__))));

if(!is_defined("ROOT")   ) define('ROOT', str_replace($_SERVER["DOCUMENT_ROOT"], "", str_replace("\\", "/", dirname(dirname(__FILE__)))).'/');
if(!is_defined("IMGROOT")) define('IMGROOT', ROOT == '/' ? '' : substr(ROOT, 0, -1));

if(!is_defined("DEV_MODE")) define("DEV_MODE", "1");

if(!is_defined("URLROOT")) define("URLROOT", "http://$_SERVER[HTTP_HOST]".ROOT);


