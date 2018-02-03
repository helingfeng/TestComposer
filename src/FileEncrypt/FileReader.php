<?php

namespace FileEncrypt;

class FileReader
{
    /**
     * 读取源文件内容并返回
     *
     * @param $file_name
     * @return bool|string
     */
    public function read($file_name)
    {
        return file_get_contents($file_name);
    }
}