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
