<?php


namespace App\Service;

use App\Event\UserRegister;
use App\Exception\ApiException;
use App\Model\Admin;
use App\Task\AnnotationTask;
use Hyperf\Di\Annotation\Inject;
use App\Model\Admin as AdminModel;
use Hyperf\Task\Task;
use Hyperf\Task\TaskExecutor;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Utils\Coroutine;
use HyperfExt\Auth;
use HyperfExt\Auth\AuthManager;
use Psr\EventDispatcher\EventDispatcherInterface;

class AdminService
{
    /**
     * @Inject
     * @var  AdminModel
     */
    protected $admin;
    /**
     * @Inject
     * @var AuthManager
     */
    protected $auth;

    /**
     * @Inject()
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    public function login($data)
    {
        $res =  $this->admin::query()->where([
            'username' => $data['username']
        ])->first();
        if(!$res){
            throw new ApiException("用户不存在!!!", 500);
        }
        $password = sha1(md5($data['password']). config("constant.password_salt"));
        if($res->password != $password){
            throw new ApiException("用户或者密码错误", 500);
        }
        if($res->deleted == 1){
            throw  new ApiException("账户已经删除,请联系管理人员", 500);
        }
        return $res;
    }

    public function token($user)
    {

    }

    public function getInfo($where)
    {
      $data = $this->admin::query()->where($where)->first();
      //1.事件机制调用
     // $this->dongIng($data);
        //2.协程处理
//        co(function () use($data){
//            var_dump(time());
//            var_dump($data->username);
//        });
        //3 task任务处理
        $container  = ApplicationContext::getContainer();
        $task  = $container->get(TaskExecutor::class);
        $result  = $task->execute(new Task([AnnotationTask::class, 'handle'], [Coroutine::id(),['name' => 123]]));
        var_dump($result);
      return  $data;
    }

    /**
     * 事件机制  功能:发送用户注册成功的邮件
     * @param $user
     */
    public function dongIng($user){
        $this->eventDispatcher->dispatch(new UserRegister($user));
    }
}
