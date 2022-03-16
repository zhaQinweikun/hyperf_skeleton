<?php

declare(strict_types=1);

namespace App\Middleware;

use Hyperf\Context\Context;
use Hyperf\HttpServer\Router\Dispatched;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Qbhy\HyperfAuth\Annotation\Auth;
use Qbhy\HyperfAuth\AuthManager;
use Hyperf\Di\Annotation\Inject;

class AdminMiddleware implements MiddlewareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;


    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {

        $request  =  $handler->handle($request);
        return  $request;
    }


}
