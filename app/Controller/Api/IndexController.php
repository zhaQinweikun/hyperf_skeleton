<?php


namespace App\Controller\Api;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Service\UserSerivce;
use App\Service\AdminService;

class IndexController extends Common
{
    /**
     * @Inject()
     * @var UserSerivce
     */
    protected $userService;
    /**
     * @Inject
     * @var  AdminService
     */
    protected $adminService;
    public function index(ResponseInterface $response)
    {
        $where = [
            'id' => 1
        ];
        $user = $this->adminService->getInfo($where);
      return  $response->json([
          '123'
      ]);
    }
}
