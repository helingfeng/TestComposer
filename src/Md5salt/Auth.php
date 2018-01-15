<?php 

namespace Md5salt;

class Auth
{
    public function password2security($password)
    {
        $random_str = $this->createRandomStr();

        return ['password'=>md5($password.$random_str) , 'salt'=>$random_str];
    }

    protected function createRandomStr($len = 10){

        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }

        return $str;
    }

}
