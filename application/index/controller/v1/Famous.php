<?php
/**
 * Created by PhpStorm.
 * User: 74985
 * Date: 2018/12/24
 * Time: 17:30
 */



namespace app\index\controller\v1;
header( "Access-Control-Allow-Origin:*");

header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with,content-type');



use think\Controller;
use app\common\model\Famous as FamousModel;

class Famous extends Controller
{
    public function getFamous(){
        $data=FamousModel::all();
        return json($data);
    }
}