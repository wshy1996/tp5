<?php
/**
 * Created by PhpStorm.
 * User: bryzf1
 * Date: 2018/12/4
 * Time: 下午3:10
 */

namespace app\lib\exception;


class ParamException extends BaseException
{
    public $code = 400;
    public $msg ='参数错误';
    public $errorCode = 10001;

}