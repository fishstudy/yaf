<?php
ini_set("display_errors",1);
error_reporting(2047);

define('APPLICATION_PATH', dirname(dirname(__FILE__)));

$application = new Yaf\Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
