<?php

namespace app\home\controller;

use \think\Controller;
use think\Db;
use app\home\controller\Permissions;
class Index extends Permissions
{
    public function index()
    {
        return $this->fetch();
    }
}
