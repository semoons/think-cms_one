<?php
namespace app\index\controller;

use think\Config;
use cms\Controller;

class Index extends Controller
{

    /**
     * 首页
     *
     * @return string
     */
    public function index()
    {
        $site_info = [
            'site_title' => Config::get('site_title'),
            'site_keyword' => Config::get('site_keyword'),
            'site_description' => Config::get('site_description')
        ];
        $this->assign('site_info', $site_info);
        
        return $this->fetch();
    }
}
 