<?php

declare(strict_types=1);

namespace App\Middleware;

use App\Exception\ApiException;
use Phper666\JWTAuth\Exception\JWTException;
use Phper666\JWTAuth\Util\JWTUtil;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use App\Service\AdminService ;
use Phper666\JWTAuth\JWT;
use Phper666\JWTAuth\Exception\TokenValidException;


class ApiMiddleware implements MiddlewareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**@Inject
     * @var AdminService
     */
    protected $jwt;
    public function __construct(ContainerInterface $container,JWT $jwt)
    {
        $this->container = $container;
        $this->jwt = $jwt;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        try {
            //白名单设置
            $routers = ['/api/login'];
            $path = $request->getUri()->getPath();
            $methon = $request->getMethod();
            $token = $request->getHeaderLine('Authorization') ?? '';
            if($token == '' && in_array($path, $routers)){
                return  $handler->handle($request);
            }
            if($token == '' && !in_array($path, $routers)){
                throw  new JWTException("token不存在!!",400);
            }
            //判断是否登录
//            $tokenBool = JWTUtil::handleToken($token);
//            var_dump([$tokenBool,$this->jwt->verifyTokenAndScene('application', $token)]);
//            if($tokenBool !== false && $this->jwt->verifyTokenAndScene('application', $token)){
//                //登录以后进行其他逻辑的判断
//                return  $handler->handle($request);
//            }
            if( $this->jwt->verifyTokenAndScene('application', $token)){
                //登录以后进行其他逻辑的判断

                return  $handler->handle($request);
            }
        }catch (\Exception $e){
            throw  new ApiException($e->getMessage());
        }
        //没有登录 报错
        throw new ApiException("token验证失败",400);
    }

    /**
     * 刷新token
     */
    public function refreshToken()
    {
        $token = $this->jwt->refreshToken();
        $data = [
            'code' => 0,
            'msg' => 'success',
            'data' => [
                'token' => $token->toString(),
                'exp' => $this->jwt->getTTL($token->toString()),
            ]
        ];
        throw new ApiException(json_encode($data),200);
    }
}
