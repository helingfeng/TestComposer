<?php


namespace FileEncrypt;


class CipherMachine
{
    /**
     * 对明文进行加密
     *
     * @param $content
     * @return string
     */
    public function encrypt($content)
    {
        return md5($content);
    }
}