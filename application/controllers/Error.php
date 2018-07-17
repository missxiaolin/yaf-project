<?php

/**
 * @name ErrorController
 * @desc 错误控制器, 在发生未捕获的异常时刻被调用
 * @see http://www.php.net/manual/en/yaf-dispatcher.catchexception.php
 * @author mac
 */
class ErrorController extends Yaf_Controller_Abstract
{

    //从2.1开始, errorAction支持直接通过参数获取异常
    public function errorAction($exception)
    {
        if ($exception instanceof Enums_CodeException) {
            api_error($exception->getCode(), $exception->getMessage());
        }
        //1. assign to view engine
        $this->getView()->assign("exception", $exception);
        //5. render by Yaf
    }
}
