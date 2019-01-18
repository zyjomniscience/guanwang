<?php
/**
 * Created by PhpStorm.
 * User: 74985
 * Date: 2019/1/13
 * Time: 15:02
 */

namespace app\index\controller;


use think\Controller;

class index extends Controller
{
    public function index(){
       return $this->fetch();
    }
}