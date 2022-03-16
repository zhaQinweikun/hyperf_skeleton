<?php


namespace App\Listener;


use App\Event\UserRegister;
use Hyperf\Event\Contract\ListenerInterface;

class UserRegisteredListener  implements ListenerInterface
{

    public function listen(): array
    {
        // TODO: Implement listen() method.
        return [
            UserRegister::class
        ];
    }

    /**
     * @param  UserRegister  $event
     *
     */
    public function process(object $event)
    {
        // TODO: Implement process() method.
        // 事件触发后该监听器要执行的代码写在这里，比如该示例下的发送用户注册成功短信等
        // 直接访问 $event 的 user 属性获得事件触发时传递的参数值
        // $event->user;
        var_dump("这是事件!!!!!!");
        var_dump($event->user);
    }
}
