<?php
namespace app\panel\validate;
use think\Validate;

class User extends Validate
{
    // 验证字段
    protected $rule = [
        'username'  =>  'require|max:20|unique:user',
        'password' =>  'require',
        'sex' =>  'require',
        'phone' =>  'require|number',
        'mail' =>  'require|email',
        'position' =>  'require',
    ];

    // 验证信息
    protected $message  =   [
        'username.require' => '名称必须填写',
        'username.max' => '名称长度不得大于20位',
        'username.unique' => '名称已存在',
        'password.require' => '密码必须填写',
        'sex.require' => '性别必须选择',
        'phone.require' => '手机号必须填写',
        'phone.number' => '请填写一个合法的手机号',
        'mail.require' => '邮箱必须填写',
        'email.email' => '请填写一个合法的邮箱地址',
        'position.require' => '职位必须选择',
    ];

    // 验证场景
    protected $scene = [
        'add' => ['username', 'password', 'sex', 'phone', 'email', 'position'],
        'edit' => ['username', 'password', 'sex', 'phone', 'email', 'position'],
    ];
}