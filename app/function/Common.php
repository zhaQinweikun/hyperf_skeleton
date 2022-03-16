<?php

if (!function_exists('p')) {
    function p($data)
    {
        if (method_exists($data, 'toArray')) {
            var_dump($data->toArray());
        } else {
            var_dump($data);
        }
    }
}

if(!function_exists('auths')){
    function auths(string $guard = 'api'){
        return make(\HyperfExt\Auth\Contracts\AuthManagerInterface::class)->guard($guard);
    }
}

if(!function_exists('success')){
    function success($data)
    {
        if(is_array($data)){
            $data = json_encode($data);
        }
        throw new \App\Exception\ApiException($data, 200);
    }
}
