<?php
$redis = new Redis();
$redis->connect('redis',6379);
$redis->set('test','陈柳希');
echo $redis->get('test');