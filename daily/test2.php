<?php

//$list = array(
//    12,34,9,68,26,95,6,118
//);
//rsort($list);
//print_r($list);

//$str = 'hello world';
//$list = str_split($str);
//print_r($list);


// 连接到Redis服务器
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

// 尝试获取锁
$lockKey = 'my_lock_key';
$lockValue = uniqid(); // 使用唯一ID作为锁的值
$lockTimeout = 10; // 锁的超时时间（秒）

if ($redis->set($lockKey, $lockValue, 'EX', $lockTimeout, 'NX')) {
    // 获取锁成功
    echo "Lock acquired successfully.\n";

    // 在这里执行需要锁定的操作
    // ...

    // 释放锁
    if ($redis->get($lockKey) == $lockValue) {
        $redis->del($lockKey);
        echo "Lock released successfully.\n";
    } else {
        echo "Failed to release the lock. It may have expired or been released by another process.\n";
    }
} else {
    // 获取锁失败
    echo "Failed to acquire the lock. It is already held by another process.\n";
}

