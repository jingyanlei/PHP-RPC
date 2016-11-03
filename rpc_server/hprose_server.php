<?php
require('./vendor/autoload.php');

use Hprose\Http\Server;

function hello($name) {
    return 'hello'. $name;
}

$server = new Server();
$server->addFunction('hello');
$server->start();