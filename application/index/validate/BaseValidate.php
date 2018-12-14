<?php
/**
 * Created by PhpStorm.
 * User: bryzf1
 * Date: 2018/12/4
 * Time: 下午2:54
 */

namespace app\index\validate;


use app\lib\exception\ParamException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $params = $request->param();
        if (!$this->batch()->check($params)){
            $exception = new ParamException([
               'msg'=>is_array($this->error)?implode(';',$this->error):$this->error,
            ]);
            throw $exception;
        }
        return true;
    }

}