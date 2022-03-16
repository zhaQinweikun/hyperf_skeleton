<?php


namespace App\Model;


class User extends Model
{
    protected  $table='user';
    const CREATED_AT = "add_time";
    const UPDATED_AT = "update_time";
}
