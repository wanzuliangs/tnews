<?php
namespace app\admin\controller;

class Config extends Common
{
    public function lst()
    {
        $confList = db('conf')->field('id,cname,ename,value,values')->paginate(10);
        $this->assign("confList",$confList);
        return view();
    }

    public function configlst()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $enameArr = db('conf')->column('ename');
            // 找出上传表单控件名
            $imgcolumn = db('conf')->where('dt_type',6)->column('ename');
            foreach ($data as $k => $v) {
                if (is_array($v)) {
                    $v = implode(',',$v);
                }
                db('conf')->where('ename',$k)->update(['value' => $v]);
            }  
            foreach ($enameArr as $k => $v) {
                if (!in_array($v,array_keys($data)) && !in_array($v,$imgcolumn)) {
                    db('conf')->where('ename',$v)->update(['value' => '']);
                }
            } 
            // 上传
            foreach ($imgcolumn as $k => $v) {
                $file = request()->file($v);
                if ($_FILES[$v]['tmp_name']) {
                     $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
                     $imgpath = $info->getSaveName();
                     if ($imgpath != '') {
                         db('conf')->where('ename',$v)->update(['value'=>$imgpath]);
                     }
                }
            }
            $this->success('配置修改成功!');
        }
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
