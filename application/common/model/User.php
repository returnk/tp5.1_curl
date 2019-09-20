<?php

namespace app\common\model;

use think\Model;

class User extends Model
{
    public function checkUser($data)
    {
        $res = $this->where('username',$data['username'])->find();
        if(!$res) {
            return false;
        }
        $pwd = $res['password'];
        $pass  = md5($data['password']);
        if($pwd != $pass) {
            return false;
        }
        // 登录成功保存数据到session中
        session('admin.user',$res);
        return true;
    }
}
