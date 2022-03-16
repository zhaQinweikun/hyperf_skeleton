<?php
namespace App\Controller\Admin;

use Hyperf\View\RenderInterface;

class IndexController extends CommonController
{
    public function index(RenderInterface $render){
       return $render->render("admin/index/index");
    }
    public function test(RenderInterface $render)
    {
        return $render->render("admin/index/test");
    }
}
