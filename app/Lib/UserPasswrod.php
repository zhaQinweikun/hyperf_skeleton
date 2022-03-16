<?php
namespace  App\Lib;


class UserPasswrod
{
   public function setPassword($passowrd) {
        return md5(md5($passowrd));
   }

}
