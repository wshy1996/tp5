<?php
namespace app\index\controller;

use app\index\validate\UserValidate;
use app\lib\exception\IDException;
use think\Controller;
use think\Request;

class IndexController extends Controller
{
    public function index()
    {
        $tel = '15732891998';
        (new UserValidate())->goCheck();

    }
    public function hello()
    {
        (new UserValidate())->goCheck();
        throw new IDException();

    }
}
