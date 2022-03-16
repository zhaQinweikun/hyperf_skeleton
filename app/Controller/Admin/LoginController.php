<?php


namespace App\Controller\Admin;


use App\Controller\AbstractController;
use App\Lib\UserPasswrod;
use Hyperf\HttpMessage\Cookie\Cookie;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\View\RenderInterface;
use Hyperf\Di\Annotation\Inject;
use App\Model\User as UserModel;
use App\Service\UserSerivce;
use Hyperf\Contract\SessionInterface;
use Qbhy\HyperfAuth\Annotation\Auth;
use Qbhy\HyperfAuth\AuthManager;


class LoginController  extends AbstractController
{
    /**
     * @Inject()
     * @var UserPasswrod
     */
    protected UserPasswrod $userLib;
    /**
     * @Inject()
     * @var UserModel
     */
    protected UserModel $userModel;
    /**
     * @Inject()
     * @var UserSerivce
     */
    protected UserSerivce $userService;
    /**
     * @Inject()
     * @var SessionInterface
     */
    private $session;
    /**
     * @Inject
     * @var AuthManager
     */
    protected $auth;
    public function login(RenderInterface $render){
        return $render->render("/admin/login/login");
    }

    /**
     * 登录提交
     */
    public function ajaxLogin(RequestInterface $request, ResponseInterface $response)
    {
        $query = $request->all();

        if(!$request->has(['username', 'password'])){
            return $response->json([
                'code' => 500,
                'msg' => '请输入账号或者密码'
            ]);
        }
        $res = $this->userModel::query()->where(['username' => $query['username']])->first();
        if(!$res){
            return $response->json([
                'code' => 500,
                'msg' => '账号不存在!'
            ]);
        }
        if($res->status != 0){
           return $response->json([
                'code' => 500,
                'msg' => '账号异常,请联系管理人员'
            ]);
        }
        $password = $this->userLib->setPassword($query['password']);
        if($password != $res->password){
            return  $response->json([
                'code' => 500,
                'msg' => '账号或者密码错误,请重新输入'
            ]);
        }
        $this->session->set('uid', $res->id);
        $this->session->set('username', $res->username);
        $this->session->set('avatar', $res->avatar);
        suss();
        $user = [
            'uid' => $res->id,
            'username' => $res->username,
        ];
        return  $response->json([
            'code' => 200,
            'msg' => '成功'
        ]);
    }
}
