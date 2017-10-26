<?php
namespace app\panel\model;
use think\Model;
class Daily extends Model
{
    // 自动写入时间戳
    protected $createTime = 'creadate';
    protected $updateTime = 'creadate';
    // 新增日报
    public function adddaily($data)
    {
        if ($_FILES['attachment']['tmp_name'])
        {
            $file = request()->file('attachment');
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
            $data['attachment'] = '/uploads/' . $info->getSaveName();
        }
        // 将接收到的值保存到数据库
        if ($this->save($data))
        {
            return true;
        } else {
            return false;
        }
    }

    /*// 获取员工列表
    public function getuser()
    {
        return $this::order('id asc')->paginate('5');
    }

    // 更改员工信息
    public function chageuser($data)
    {
        // 将接收到的密码加密
        if ($data['password'])
        {
            $data['password'] = md5($data['password']);
        }
        // 如果选中状态为on则等于1，默认情况下等于0
        if (input('state') == 'on')
        {
            $data['state'] = 1;
        } else {
            $data['state'] = 0;
        }
        // 如果选中状态为on则等于1，默认情况下等于0
        if (input('state') == 'on')
        {
            $data['state'] = 1;
        } else {
            $data['state'] = 0;
        }
        if ($this::update($data))
        {
            return true;
        } else {
            return false;
        }
    }

    // 删除员工信息
    public function deluser($id)
    {
        if ($this::destroy($id))
        {
            return true;
        } else {
            return false;
        }
    }

    // 登录用户
    public function login($data)
    {
        $info = User::getByUsername($data['username']);
        if ($info) {
            if ($info['password'] == md5($data['password'])) {
                session('id', $info['id']);
                session('username', $info['username']);
                return true; //密码正确
            } else {
                return false; //用户或密码不正确
            }

        }
    }*/
}