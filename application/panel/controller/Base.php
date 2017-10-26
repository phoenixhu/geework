<?php
namespace app\panel\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize()
    {
        if (!session('id') || !session('username'))
        {
            $this->error('对比起，您还未登录！', '/index/index');
        }
    }
}