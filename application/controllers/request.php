<?php
/**
 * Created by PhpStorm.
 * User: yuxuefeng
 * Date: 2018/4/4
 * Time: 上午9:03
 */
$request = new Yaf_Request_Simple("CLI", "Index", "Controller", "Hello", array("para" => 2));
print_r($request);