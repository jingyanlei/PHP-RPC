<?php
/**
 * Created by PhpStorm.
 * User: jingyanlei
 * Date: 16/10/10
 * Time: 17:20
 */
$client = new Yar_Client('http://server.rpc.com/yar_server.php');
echo $client->api('hello yar!!!!');