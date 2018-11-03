<?php

use \xiaolin\Support\Str;

if (!function_exists('api_response')) {
    /**
     * @param $data
     * @param string $code
     * @param string $msg
     */
    function api_response($data, $code = '0', $msg = 'ok')
    {
        $json = [
            'data' => $data,
            'code' => $code,
            'msg' => $msg,
            'time' => (string)time(),
            '_ut' => (string)round(microtime(TRUE) - $_SERVER['REQUEST_TIME_FLOAT'], 5),
        ];

        $response = new Yaf_Response_Http();
        $response->setHeader('Content-Type', 'application/json;charset=utf-8');
        $response->setBody(json_encode($json));

        $response->response();

        exit;
    }
}

if (!function_exists('api_error')) {
    /**
     * @param $data
     * @param string $code
     * @param string $msg
     */
    function api_error($code = '0', $msg = 'ok', $data = [])
    {
        $json = [
            'data' => $data,
            'code' => $code,
            'msg' => $msg,
            'time' => (string)time(),
            '_ut' => (string)round(microtime(TRUE) - $_SERVER['REQUEST_TIME_FLOAT'], 5),
        ];

        $response = new Yaf_Response_Http();
        $response->setHeader('Content-Type', 'application/json;charset=utf-8');
        $response->setBody(json_encode($json));

        $response->response();
        exit;
    }
}

if (!function_exists('generate_unique_id')) {
    /**
     * 生成唯一ID
     * @return string
     */
    function generate_unique_id($index = null)
    {
        $token = isset($index) ? $index . ':' : '';
        return $token . str_replace(".", '', uniqid(str_random(20), true));
    }
}

if (!function_exists('str_random')) {
    /**
     * Generate a more truly "random" alpha-numeric string.
     *
     * @param  int $length
     * @return string
     *
     * @throws \RuntimeException
     */
    function str_random($length = 16)
    {
        return Str::random($length);
    }
}