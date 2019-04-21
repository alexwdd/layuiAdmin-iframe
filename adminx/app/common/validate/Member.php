<?php
namespace app\common\validate;

use think\Validate;

class Member extends Validate
{

    protected $rule =   [
        'mobile' => 'require|unique:member',
        'username' => 'require|unique:member',
        'password' => 'require|length:6,20',
    ];

    protected $message  =   [
        'mobile.require'       => '手机号不能为空',
        'mobile.unique'       => '手机号重复',        
        'password.require'       => '请输入密码',
        'password.length'       => '密码应为6-20位'
    ];

    protected $scene = [
        'add' => ['mobile', 'sncode','password'],
        'login' =>  ['account','password','checkcode'],
        'password' =>  ['password','oldpwd'],
        'getpwd' =>  ['password','payPassword','checkcode'],
    ];

}


