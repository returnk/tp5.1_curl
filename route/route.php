<?php

use think\facade\Route;

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/*Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');*/
/*Route::group('admin',function (){
   Route::get('login','@admin/login/index')->name('admin/login/index');
   Route::post('login','@admin/login/checkLogin')->name('admin/login/index');
});*/

/*Route::group('admin',function(){
   Route::get('login','@admin/login/index')->name('admin/login/index');
   Route::post('login','@admin/login/checkLogin')->name('admin/login/checkLogin');
});*/

/*Route::group('admin',function(){
   Route::get('login','@admin/login/index')->name('admin/login/index');
   Route::post('login','@admin/login/checkLogin')->name('admin/login/checkLogin');
});*/

/*Route::group('admin',function(){
   Route::get('login','@admin/login/index')->name('admin/login/index');
   Route::post('login','@admin/login/checkLogin')->name('admin/login/checkLogin');
});*/


/*//               访问dd         模块/控制器/方法    别名
Route::get('dd', 'admin/index/index')->name('admin/index/index');
            //后面route不用再写admin 上面列
Route::group(['prefix' => 'admin/', 'name' => 'admin'], function () {
    // 后台登录
    Route::get('login', 'login/index')->name('admin/login/index');
    Route::post('login', 'login/checkLogin')->name('admin/login/checkLogin');

    Route::group(['middleware' => ['CheckLogin']], function () {
        // 后台首页
        Route::get('index', 'index/index')->name('admin/index/index');
    });
});*/

/*Route::group(['prefix'=>'admin/','name'=>'admin'], function () {
    // 后台登录
    Route::get('login', 'login/index')->name('admin/login/index');
    Route::post('login', 'login/checkLogin')->name('admin/login/checkLogin');
    Route::group(['middleware'=>['CheckLogin']],function(){
        // 后台首页
        Route::get('index', 'index/index')->name('admin/index/index');
        Route::get('login', 'login/logout')->name('admin/login/logout');
    });


});*/

Route::group(['prefix' => 'admin/', 'name' => 'admin'], function () {
    // 后台登录
    Route::get('login', 'login/index')->name('admin/login/index');
    Route::post('login', 'login/checkLogin')->name('admin/login/checkLogin');
    // 后台首页
    Route::group(['middleware' => ['CheckLogin']], function () {
        Route::get('index', 'index/index')->name('admin/index/index');
        // 文章
        Route::resource('art', 'article');
    });


});