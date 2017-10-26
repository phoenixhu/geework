<?php
namespace app\panel\controller;
use app\panel\model\Daily as DailyModel;
class Daily extends Base
{
    public function lst()
    {
        return $this->fetch('list');
    }
    public function add()
    {
        $userres = db('user')->field('username')->select();
        if (request()->isPost())
        {
            $daily = new DailyModel();
            if ($daily->adddaily(input('post.')))
            {
                $this->success('日报发送成功！', 'lst');
            } else {
                $this->error('日报发送失败！');
            }

        }
        $this->assign(array(
            'userres' => $userres,
            )
        );
        return $this->fetch('add');
    }
}
