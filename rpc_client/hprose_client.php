<?php
require('./vendor/autoload.php');

use Hprose\Http\Client;
use Hprose\Future;



//1.同步客户端
$client = Client::create('http://server.rpc.com/hprose_server.php', false);
echo $client->hello(' Hprose1');


//2.异步客户端
$client = Client::create('http://server.rpc.com/hprose_server.php');
$var_dump = Future\wrap('var_dump');

//调用方式1
$var_dump($client->hello(' Hprose1'));

//调用方式2
$hello = $client->hello;
$var_dump($hello(' Hprose2'));

//调用方式3
$client->hello(' Hprose3')->then(function($result){var_dump($result);});

//调用方式4
$test = $client->hello(' Hprose4');



