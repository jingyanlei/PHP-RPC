# PHP-RPC PHPRPC、YAR、HPRose测试、firephp测试

### 1.服务器或虚拟机
```
虚拟机二台centos6.5
IP:10.211.55.100 10.211.55.106
```
### 2.ip:10.211.55.100
```
php5.6
mysql5.7 order数据库
nginx配置
	rpc.com
```
### 3.ip:10.211.55.106
```
php5.6
nginx配置
	server.rpc.com
```
### 4.hosts配置
```
本机hosts
10.211.55.100 rpc.com

虚拟机10.211.55.100 hosts
10.211.55.106 server.rpc.com
```
### 5. 测试代码
```
1.PHPRPC和firephp(firephp需要在浏览器安装插件)
http://rpc.com/client.php
 
2.yar(需要在服务器端安装扩展)
http://rpc.com/yar_client.php

3.HPRose
http://rpc.com/hprose_client.php
```
### 6.目录
```
rpc_client 客户端
rpc_server 服务器端
```
```
rpc和mysql分布式两阶段提交2-PC参数
https://github.com/jingyanlei/PHP-2PC
```