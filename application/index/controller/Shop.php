<?php
namespace app\index\controller;
//导入系统Config
use think\Config;
//导入Controller
use think\Controller;
class Shop extends Controller
{
    public function getindex()
    {
        //加载后台模板
        // echo "1";
    	return $this->fetch("Shop/shop");
    }
}
