<?php


namespace App\Controller\Admin;

use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\Contract\SessionInterface;
use Hyperf\Di\Annotation\Inject;


class GoodsController
{
    /**
     * @Inject()
     * @var SessionInterface
     */
    protected $session;
    public function index()
    {

        return time();
    }
}
