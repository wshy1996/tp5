<?php
/**
 * Created by PhpStorm.
 * User: bryzf1
 * Date: 2018/12/4
 * Time: 下午2:09
 */

namespace app\lib\exception;



use Exception;
use think\exception\Handle;
use think\Request;

class HandleException extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    /**
     * 处理异常信息
     * @param Exception $e
     * @return \think\Response|\think\response\Json
     */
    public function render(Exception $e)
    {
        if ($e instanceof BaseException){
            $this->code = $e->code;
            $this->msg =$e->msg;
            $this->errorCode =$e->errorCode;
        } else{
            if (config('app_debug')){
                return parent::render($e);
            } else{
                $this->code = 500;
                $this->msg ='服务器错误';
                $this->errorCode =999;
            }
        }
        $request = Request::instance();
        $result = [
            'error_code' => $this->errorCode,
            'msg' => $this->msg,
            'request_url' => $request->url()
        ];
        return json($result,$this->code);
    }

}