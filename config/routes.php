<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/favicon.ico', function () {
    return '';
});
Router::addGroup('/admin',function() {
    Router::get('/index/index','App\Controller\Admin\IndexController@index');
    Router::get('/index/test','App\Controller\Admin\IndexController@test');
    Router::get('/goods','App\Controller\Admin\GoodsController@index');
    Router::post("/ajaxLogin", "App\Controller\Admin\LoginController@ajaxLogin");
});
Router::get("/admin/login", 'App\Controller\Admin\LoginController@login');

Router::addGroup("/api/", function() {
    Router::post("login", 'App\Controller\Api\LoginController@login');
    Router::post('index','App\Controller\Api\IndexController@index');
}
, ['middleware' => [\App\Middleware\ApiMiddleware::class]]
//, ['middleware' => [Phper666\JWTAuth\Middleware\JWTAuthDefaultSceneMiddleware::class]]
);
//Router::post("/api/login", 'App\Controller\Api\LoginController@login');

