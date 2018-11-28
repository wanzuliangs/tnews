<?php
namespace app\admin\controller;
use think\Controller;
class Config extends Controller
{
    public function lst()
    {
        return view();
    }

     public function configlst()
    {
        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res = db('conf')->insert($data);
            if ($res) {
                $this->success('添加配置项成功!',url('lst'));
            } else {
                $this->error('添加配置失败!');
            }
        }
        return view();
    }

     public function edit()
    {
        return view();
    }
}
