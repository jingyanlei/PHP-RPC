<?php
require('./vendor/autoload.php');

$client = new PHPRPC_Client('http://server.rpc.com/phprpc.php');
echo $client->helloWorld('aaaaa');

$var = ['test1'=>1, 'test2'=>2, 'test3'=>'hprose'];

//firephp
$firephp = FirePHP::getInstance(true);

$firephp->fb('Hello World'); /* Defaults to FirePHP::LOG */

$firephp->fb('Log message'  ,FirePHP::LOG);
$firephp->fb('Info message' ,FirePHP::INFO);
$firephp->fb('Warn message' ,FirePHP::WARN);
$firephp->fb('Error message',FirePHP::ERROR);

$firephp->fb('Message with label','Label',FirePHP::LOG);

$firephp->fb(array('key1'=>'val1',
    'key2'=>array(array('v1','v2'),'v3')),
    'TestArray',FirePHP::LOG);

function hello() {
    global $firephp;
    $firephp->fb('Hello Workd', FirePHP::TRACE);
}

function greet() {
    hello();
}

greet();


