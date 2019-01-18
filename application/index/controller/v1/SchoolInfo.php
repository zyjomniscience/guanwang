<?php
/**
 * Created by PhpStorm.
 * User: 74985
 * Date: 2019/1/15
 * Time: 16:17
 */

namespace app\index\controller\v1;


use think\Controller;

class SchoolInfo extends Controller
{
    public static function getSchoolInfo(){
        $schoolInfo=\app\common\model\SchoolInfo::where('id','=',1)->find();

        return json($schoolInfo);
    }
}