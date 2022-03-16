<?php
namespace  App\Traits;

use Hyperf\Context\Context;
use Hyperf\HttpMessage\Stream\SwooleStream;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Constants\HttpCode;
use Hyperf\Utils\Contracts\Arrayable;
use Hyperf\Utils\Contracts\Jsonable;

trait ApiResponseTrait
{
    private $httpCode = HttpCode::Ok;
    private $headers =[
        'Author' => 'Colorado'
    ];
    private $errorCode = 10000;
   // private $response;

    /**
     * 成功响应
     * @return ResponseInterface
     */
    public function success($data) :ResponseInterface
    {
        return $this->respond($data);
    }

    /**
     * 错误返回
     * @return ResponseInterface
     */
    public function fail(string $err_msg = '', int $err_code = 20000, array $data =[]):ResponseInterface
    {
        return  $this->setHttpCode($this->httpCode == HttpCode::Ok ? HttpCode::BAD_REQUEST: $this->httpCode)
            ->respond([
                'code' => $err_code ?? $this->errorCode,
                'msg' => $err_msg ?? '',
                'data' => $data
            ]);
    }
    /*
     * 设置http返回状态码
     * return $this
     */
    public function setHttpCode(int $code = HttpCode::Ok):selt
    {
        $this->httpCode = $code;
        return $this;
    }
    /**
     *设置返回头部header值
     * @return $this
     */
    public function addHttpHeader(string $key, $value):self
    {
        $this->headers += [$key => $value];
        return $this;
    }
    /**
     * 批量设置头部返回
     * @param array $headers    header数组：[key1 => value1, key2 => value2]
     * @return $this
     */
    public function addHttpHeaders(array $headers = []): self
    {
        $this->headers += $headers;
        return $this;
    }

    /**
     * @param $response
     * @return ResponseInterface
     */
    private function respond($response1):ResponseInterface
    {
        var_dump($response1);
        if(is_array($response1)){
            return $this->response()->withAddedHeader('content-type','text/plain')
                ->withBody(new SwooleStream($response1));
        }
        if(is_array($response1) || $response1 instanceof Arrayable){
            return  $this->response()
                ->withAddedHeader('content-type', 'application/json')
                ->withBody(new SwooleStream((string) $response1));
        }
        if($response1 instanceof Jsonable){
            return  $this->response()
                ->withAddedHeader('content-type', 'application/json')
                ->withBody(new SwooleStream((string) $response1));
        }
        return  $this->response()->withAddedHeader('content-type','text/plain')
            ->withBody(new SwooleStream((string) $response1));
    }


    protected function response() : ResponseInterface
    {
        $response = Context::get(ResponseInterface::class);
        var_dump($response);
//        foreach($this->headers as $key => $value){
//            $response = $response->withHeader($key, $value);
//        }
        return  $response;
    }
}
