<?php

require_once './vendor/autoload.php';

$encrypt = new \FileEncrypt\EncryptFacade();

$encrypt->encryptFile('a.txt','b.data');