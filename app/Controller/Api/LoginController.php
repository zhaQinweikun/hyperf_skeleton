<?php


namespace App\Controller\Api;


use App\Controller\AbstractController;
use App\Exception\ApiException;
use App\Request\UserRequest;
use Hyperf\Context\Context;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Di\Annotation\Inject;
use App\Service\AdminService;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Phper666\JWTAuth\JWT;

class LoginController extends AbstractController
{
    /**
     * @Inject
     * @var AdminService
     */
    protected  $userService;
    /**
     * @Inject
     * @var JWT
     */
    protected $jwt;
    public function login(UserRequest  $responseData)
    {
        $validated  = $responseData->validated();
        $user = $this->userService->login($validated);
        $userData = [
            'uid'       => $user->id,
            'account'  => $user->username,
        ];
        $token = $this->jwt->getToken("application",$userData);
        var_dump($token->toString());
        return $this->response->json([
            'token' => $token->toString(),
            'exp' => $this->jwt->getTTL($token->toString()),
        ]);
    }


}
