<?php

class image
{
    public $imageName = 'resource/image/computer.jpg';
    public $imageKey = 'image';

    public function getRedisClient()
    {
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        return $redis;
    }
    public function saveImage($imageName = null)
    {
        if ($imageName) {
            $this->imageName = $imageName;
        }

        if (!file_exists($this->imageName)) {
            echo "文件不存在" . $this->imageName;
            exit();
        }

        // 以二进制模式打开文件
        $handle = fopen($this->imageName, 'rb');

        // 读取文件内容
        $imageData = fread($handle, filesize($this->imageName));

        // 关闭文件句柄
        fclose($handle);

        $redisClient = $this->getRedisClient();
        $result = $redisClient->set($this->imageKey, $imageData, ['NX']);
        if ($result) {
            echo "图片读取成功";
            exit();
        }

        echo "已经保存了相同的图片，可以直接读取";
    }

    public function readImage($imageName = null)
    {
        if ($imageName) {
            $this->imageName = $imageName;
        }

        $redisClient = $this->getRedisClient();
        $imageData = $redisClient->get($this->imageKey);

        // 设置内容类型为image/jpeg
        header('Content-Type: image/jpeg');
        echo $imageData;
    }
}