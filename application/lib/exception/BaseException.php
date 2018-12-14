<?php
/**
 * Created by PhpStorm.
 * User: bryzf1
 * Date: 2018/12/4
 * Time: 下午2:09
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    public $code;//状态码
    public $msg;//错误信息
    public $errorCode;//错误码

    /**
     * 初始化
     * BaseException constructor.
     * @param array $params
     */
    public function __construct($params=[])
    {
        if (!is_array($params)){
            return ;
        }
        if (array_key_exists('code',$params)){
            $this->code =$params['code'];
        }
        if (array_key_exists('msg',$params)){
            $this->msg =$params['msg'];
        }
        if (array_key_exists('errorCode',$params)){
            $this->errorCode =$params['errorCode'];
        }
    }

}