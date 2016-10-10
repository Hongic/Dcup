<?php
$redis = new Redis();
$redis->connect('redis',6379); # host 是yml文件中redis服务的名称
$redis->set('cc', ' redis 服务运行 ... ');
echo $redis->get('cc');