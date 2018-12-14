<?php
/**
 * Created by PhpStorm.
 * User: bryzf1
 * Date: 2018/12/5
 * Time: 上午9:58
 */

namespace app\admin\controller;


use think\Controller;
use think\Request;

class IndexController extends Controller
{
    public function login()
    {
        return view();
    }
    public function index()
    {
        $infoList=[
            '0'=>['imed'=>''],
            '1'=>['imed'=>'1'],
            '2'=>['imed'=>''],
            '3'=>['imed'=>'2'],
            '4'=>['imed'=>''],
            '5'=>['imed'=>'2'],
        ];
        foreach ($infoList as $v) {
            $v['type'] = 0;
            if ($v['imed'] != "") { //佰融
                $v['type'] = 1;
            }
            if ($v['imed'] == "") { //辰森
                $v['type'] = 2;
            }
        }
    }

}