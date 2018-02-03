<?php


namespace FileEncrypt;


class EncryptFacade
{
    private $cipher = null;
    private $reader = null;
    private $writer = null;

    public function __construct()
    {
        $this->cipher = new CipherMachine();
        $this->reader = new FileReader();
        $this->writer = new FileWriter();
    }

    public function encryptFile($src, $tar)
    {
        $content = $this->reader->read($src);
        echo '读取明文:'.$content."\r\n";
        $encryptContent = $this->cipher->encrypt($content);
        echo '加密明文:'.$encryptContent."\r\n";
        $this->writer->write($encryptContent,$tar);
        echo '成功写入文件.'."\r\n";
    }
}