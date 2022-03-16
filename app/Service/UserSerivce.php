<?php
namespace App\Service;

use App\Exception\ApiException;
use App\Model\User as UserModel;
use Hyperf\Di\Annotation\Inject;

class UserSerivce
{
    /**
     * @Inject
     * @var
     * UserModel
     */
    protected UserModel $userModel;

    /**
     * 获取一条数据
     *
     */
    public function getInfo($where){
       return $this->userModel::query()->where($where)->first();
    }

    public function login($data)
    {
       $res =  $this->userModel::query()->where([
            'username' => $data['username']
        ])->first();
       if(!$res){
           throw new ApiException("用户不存在!!!", 500);
       }
       $password = sha1(md5($data['password']). config("constant.password_salt"));
       if($res->password != $password){
           throw new ApiException("用户或者密码错误", 500);
       }

    }


}
