<?php
namespace app\panel\model;
use think\Model;
class Position extends Model
{
    public function addpt($data)
    {
        if ($this::save($data))
        {
            return true;
        } else {
            return false;
        }
    }

    public function getpt()
    {
        return $this::order('id asc')->paginate('5');
    }

    public function chagept($data)
    {
        if ($this::update($data))
        {
            return true;
        } else {
            return false;
        }
    }

    public function delpt($id)
    {
        if ($this::destroy($id))
        {
            return true;
        } else {
            return false;
        }
    }

}