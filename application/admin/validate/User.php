<?php

namespace app\admin\validate;

use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
	    'code' => 'require|captcha',
	    'username' => 'require|token',
	    'password' => 'require',
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'code.require' => '验证码不可以为空',
        'code.captcha' =>'验证码错误',
        'username.require' => '用户名不可以为空',
        'password.require' => '用户名不可以为空',
    ];
}
