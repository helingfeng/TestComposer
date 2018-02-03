<?php


namespace FileEncrypt;


class FileWriter
{
    /**
     * 写入加密文件
     *
     * @param $content
     * @param $new_file_name
     * @return bool|int
     */
    public function write($content,$new_file_name)
    {
        return file_put_contents($new_file_name,$content);
    }
}