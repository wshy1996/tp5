<?php
/**
 * Created by PhpStorm.
 * User: bryzf1
 * Date: 2018/12/4
 * Time: 下午2:22
 */

namespace app\lib\exception;


class IDException extends BaseException
{
    public $code = 500;
    public $msg  ='id错误';
    public $errorCode = 901;
}