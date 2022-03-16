<?php
namespace App\Controller\Admin;


use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\View\RenderInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Contract\SessionInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Http\Message\ResponseInterface as Psr7ResponseInterface;

/**
 * @AutoController()
 * @package App\Controller\Admin
 */
class CommonController extends AbstractController
{
    /**
     * @Inject()
     * @var SessionInterface
     */
    protected $session;
    /**
     * @Inject
     * @var  ResponseInterface
     */
    protected  $response;
    public function __construct()
    {
        $sessions =  $this->session->all();
        if(!isset($sessions['uid']) && !isset($sessions['username'])){
            return $this->redirect1();
        }
    }
    public function redirect1(): Psr7ResponseInterface
    {
        //var_dump($this->response->redirect('/admin/login'));
        return $this->response->redirect('/admin/login');
    }
}
