<?php
namespace app\panel\controller;
use app\panel\model\User as UserModel;
class User extends Base
{
    // 获取员工列表
    public function lst()
    {
        $user = new UserModel();
        $userres = $user->getuser();
        $this->assign(array(
            'userres'=> $userres,
            )
        );
        //dump($userres); die;
        return $this->fetch('list');
    }

    // 新增员工
    public function add()
    {
        //dump(input('post.')); die;
        $pters = db('position')->select(); // 获取所有职位列表在前端展示职位
        if (request()->isPost())
        {
            // 调用验证器
            $validate = \think\Loader::validate('user');

            $user = new UserModel();
            if(!$validate->scene('add')->check(input('post.')))
            {
                $this->error($validate->getError());
                die;
            } elseif ($user->adduser(input('post.'))) {
                $this->success('员工添加成功！', 'lst');
            } else {
                $this->error('员工添加失败！');
            }
            return;
        }
        $this->assign(array(
            'ptres' => $pters,
            )
        );
        return $this->fetch('add');
    }

    // 更改员工信息
    public function edit($id)
    {
        $pters = db('position')->select(); // 获取所有职位列表在前端展示职位
        $userres = db('user')->find($id); // 获取选择的id的信息

        if (request()->isPost())
        {
            // 调用验证器
            $validate = \think\Loader::validate('user');

            $user = new UserModel();
            if(!$validate->scene('edit')->check(input('post.')))
            {
                $this->error($validate->getError());
                die;
            } elseif ($user->chageuser(input('post.'))) {
                $this->success('员工修改成功！', 'lst');
            } else {
                $this->error('员工修改失败！');
            }
            return;
        }
        $this->assign(array(
                'userres'=> $userres,
                'ptres'=> $pters,
            )
        );
        return $this->fetch('edit');
    }

    // 删除员工信息
    public function del($id)
    {
        $user = new UserModel();
        if ($user->deluser($id))
        {
            $this->success('员工删除成功！');
        } else {
            $this->error('员工删除失败！');
        }

    }

    // 退出登录
    public function logout()
    {
        session(null);
        $this->success('您已退出登录！', '/index/index');
    }
}
