<?php


namespace App\Exception\Handler;


use App\Exception\ApiException;
use Hyperf\ExceptionHandler\ExceptionHandler;
use Psr\Http\Message\ResponseInterface;
use Hyperf\HttpMessage\Stream\SwooleStream;
use Throwable;

class ApiExceptionHandler extends ExceptionHandler
{

    public function handle(Throwable $throwable, ResponseInterface $response)
    {
        // TODO: Implement handle() method.
        if ($throwable instanceof ApiException) {
            // 格式化输出

        }
        $data = json_encode([
            'code' => $throwable->getCode(),
            'message' => $throwable->getMessage(),
        ], JSON_UNESCAPED_UNICODE);
        $response = $response->withAddedHeader('content-type', 'application/json; charset=utf-8');
        // 阻止异常冒泡
        $this->stopPropagation();
        return $response->withStatus(500)->withBody(new SwooleStream($data));
        // 交给下一个异常处理器
       // return $response;

        // 或者不做处理直接屏蔽异常
    }

    public function isValid(Throwable $throwable): bool
    {
        // TODO: Implement isValid() method.
       // return  true;
        return  $throwable instanceof ApiException;
    }
}
