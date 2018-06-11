<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];
use think\Route;
//前台路由
//首页
Route::controller("/index","index/Index");
//购物车
Route::controller("/car","index/Car");
//登录页
Route::controller("/login","index/Login");
//商城页
Route::controller("/shop","index/Shop");
//支付页
Route::controller("/payments","index/Pay");
//商品页
Route::controller("/goods","index/Goods");
//注册页
Route::controller("/register","index/Reg");
//个人页
Route::controller("/personal","index/Personal");
//个人页
Route::controller("/trade","index/Trade");
//订单页
Route::controller("/order","index/Order");
