<?php
// +----------------------------------------------------------------------
// | Tplay [ WE ONLY DO WHAT IS NECESSARY ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://tplay.pengyichen.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +----------------------------------------------------------------------


namespace app\home\controller;

use \think\Cache;
use \think\Controller;
use think\Loader;
use think\Db;
use \think\Session;
class Permissions extends Controller
{

    /**
     * 检查操作用户的ip是否在黑名单里
     * 检查用户是否登录
     * 检查用户访问的url在不在其角色组的权限范围内
     * @return [type] [description]
     */
    protected function _initialize()
    {
        //检查当前ip是不是在黑名单
        $black_ip = Db::name('webconfig')->where('web','web')->value('black_ip');
        
        if(!empty($black_ip)) {
            //转化成数组
            $black_ip = explode(',',$black_ip);
            //获取当前访问的ip
            $ip = $this->request->ip();
            if(in_array($ip,$black_ip)) {
                //清空session
                if(Session::has('admin')) {
                    Session::delete('admin');
                }
                return $this->error('你已被封禁！');
            }
        }
        
		
    }
}
