<?php
namespace app\panel\validate;
use think\Validate;

class Position extends Validate
{
    // 验证字段
    protected $rule = [
        'ptname'  =>  'require|max:30|unique:position',
    ];

    // 验证信息
    protected $message  =   [
        'ptname.require' => '职位名称必须填写',
        'ptname.max' => '职位名称长度不得大于30位',
        'ptname.unique' => '职位名称已存在',
    ];

    // 验证场景
    protected $scene = [
        'add'  =>  ['ptname'],
        'edit'  =>  ['ptname'],
    ];
}