<?php

$redis = new Redis();
$redis->pconnect('127.0.0.1', 6379);

$redis->select(1);

$redis->multi();

$redis->set('mKey1', 'aaaa');
$redis->set('mKey2', 'bbbb');
$result = $redis->set('mKey3');

$redis->set('mKey4', 'cccc');

if (!$result) {
    $redis->discard();
}
$redis->exec();
