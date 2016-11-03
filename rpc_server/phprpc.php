<?php
require_once('./vendor/autoload.php');

function helloWorld($params) {
    return 'Hello World!!!'.$params;
}

$server = new PHPRPC_Server();
$server->add('helloWorld');
$server->start();