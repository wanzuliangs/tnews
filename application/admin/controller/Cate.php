<?php
namespace app\admin\controller;

class Cate extends Common
{
    public function index()
    {

        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res = db('cat')->insert($data);
            if ($res) {
                $this->success('添加栏目成功!',url('index'));
            } else {
                $this->error('添加栏目失败!');
            }
            return;
        }
        // 获取栏目
        $catlist = model('cat')->getCateTree();
        //dump(collection($catlist)->toArray());die;
        $this->assign('catlist',$catlist);
    	return view();
    }

    public function uploadImg()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('img');
        // 移动到框架应用根目录/public/static/admin/uploads/cateimg 目录下
        $info = $file->move(ROOT_PATH . 'public/static/admin/uploads/cateimg');
        if ($info) {
            echo $info->getSaveName();
        } else {
            echo $file->getError();
        }
    }
}
