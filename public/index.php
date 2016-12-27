<?php

// WEB目录
define('WEB_PATH', __DIR__);

// 应用目录
define('APP_PATH', dirname(WEB_PATH) . '/application/');

// 框架引导文件
require dirname(WEB_PATH) . '/thinkphp/start.php';
