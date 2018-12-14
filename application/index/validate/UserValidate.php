<?php
/**
 * Created by PhpStorm.
 * User: bryzf1
 * Date: 2018/12/4
 * Time: 下午3:25
 */

namespace app\index\validate;


class UserValidate extends BaseValidate
{
    protected $rule=[
        'id' =>'require|max:5|min:3',
        'age' =>'require|number|between:1,100',
        'name' => 'require'
    ];
    protected $message=[
        'id.require' =>'id必传'
    ];

}