<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 鱼paker < 838764236@qq.com >
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../app/');
// 定义版本号
define('TPLAY_VERSION', '1.0.0');
//重定义扩展类库目录
define('EXTEND_PATH', __DIR__ . '/../simport/extend/');
//重定义第三方类库目录
define('VENDOR_PATH', __DIR__ . '/../simport/vendor/');
// 加载框架引导文件
require __DIR__ . '/../simport/thinkphp/start.php';