<?php

namespace app\admin\controller;

use app\admin\validate\User;
use think\Controller;
use think\Request;

class Login extends Controller
{
    // 登录显示页
    public function index()
    {
        return view('admin@login/index');
    }
    // 登录处理
    public function checkLogin(Request $request)
    {
        $data = $request->post();
        // 验证
        $res = $this->validate($data,User::class);
        if(true !== $res) {
            return $this->error($res);
        }
        // 查询数据库
        $res = model('user')->checkUser($data);
        if($res) {
            return redirect('admin/index/index');
        } else {
            return $this->error('用户名或密码错误');
        }
    }
}
