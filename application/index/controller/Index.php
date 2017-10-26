<?php
namespace app\index\controller;
use think\Controller;
use app\panel\model\User;
class Index extends Controller
{
    public function index()
    {
        if (request()->isPost())
        {
            $this->check(input('code'));
            $user = new User();
            $num = $user->login(input('post.'));
            if ($num == true) {
                $this->success('您已成功登录!', '/panel/index');
            } else {
                $this->error('用户名或者密码错误');
            }
            return;
        }
        return $this->fetch('index');
    }
    // 验证码检测
    public function check($code='')
    {
        if (!captcha_check($code)) {
            $this->error('验证码错误！');
        } else {
            return true;
        }
    }
}
