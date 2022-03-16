<?php
namespace App\Event;


class UserRegister
{
    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

}
