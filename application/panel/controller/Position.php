<?php
namespace app\panel\controller;
use app\panel\model\Position as PtModel;
class Position extends Base
{
    public function lst()
    {
        $pt = new PtModel();
        $ptres = $pt->getpt();
        $this->assign('ptres', $ptres);
        return $this->fetch('list');
    }

    public function add()
    {
        if (request()->isPost())
        {
            // 调用验证器
            $validate = \think\Loader::validate('Position');
            $pt = new PtModel();
            if(!$validate->scene('add')->check(input('post.')))
            {
                $this->error($validate->getError());
                die;
            } elseif ($pt->addpt(input('post.'))) {
                $this->success('职位添加成功！', 'lst');
            } else {
                $this->error('职位添加失败！');
            }
            return;
        }
        return $this->fetch('add');
    }

    public function edit($id)
    {
        $ptres = db('position')->find($id);

        if (request()->isPost())
        {
            // 调用验证器
            $validate = \think\Loader::validate('Position');
            $pt = new PtModel();
            if(!$validate->scene('edit')->check(input('post.')))
            {
                $this->error($validate->getError());
                die;
            } elseif ($pt->chagept(input('post.'))) {
                $this->success('职位修改成功！', 'lst');
            } else {
                $this->error('职位修改失败！');
            }
            return;
        }
        $this->assign('ptres', $ptres);
        return $this->fetch('edit');
    }

    public function del($id)
    {
        $pt = new PtModel();
        if ($pt->delpt($id))
        {
            $this->success('职位删除成功！');
        } else {
            $this->error('职位删除失败！');
        }

    }
}
