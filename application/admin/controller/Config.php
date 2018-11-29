<?php
namespace app\admin\controller;
use think\Controller;
class Config extends Controller
{
    public function lst()
    {
        $confList = db('conf')->field('id,cname,ename,value,values')->paginate(10);
        $this->assign("confList",$confList);
        return view();
    }

    public function configlst()
    {
        $confList = db('conf')->select();
        $this->assign('confList',$confList);
        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $validate = validate('Conf');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $res = db('conf')->insert($data);
            if ($res) {
                $this->success('添加配置项成功!',url('lst'));
            } else {
                $this->error('添加配置失败!');
            }
        }
        return view();
    }

    public function edit($id)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $validate = validate('Conf');
            if (!$validate->scene('edit')->check($data)) {
                $this->error($validate->getError());
            }
            $res = db('conf')->update($data);
            if ($res!==false) {
                $this->success('修改配置成功!',url('lst'));
            } else {
                $this->error('修改配置失败!');
            }
        }
        $confInfo = db('conf')->find($id);
        $this->assign("confInfo",$confInfo);
        return view();
    }

    public function delete($id)
    {
        $res = db('conf')->delete($id);
        if ($res) {
            $this->success('删除配置成功!',url('lst'));
        } else {
            $this->error('删除配置失败!');
        }
    }
}
