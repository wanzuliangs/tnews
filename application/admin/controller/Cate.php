<?php
namespace app\admin\controller;

class Cate extends Common
{
    public function index()
    {
        // 获取栏目
        $catlist = model('cat')->getCateTree();
        // dump(collection($catlist)->toArray());die;
        $this->assign('catlist',$catlist);
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

    /**
     * ajax改变栏目属性显示或隐藏
     * @return [type] [description]
     */
    public function changestatus()
    {
        if (request()->isAjax()) {
            $catid = input('catid');
            $status = db('cat')->field('status')->where('id',$catid)->find();
            $sta = $status['status'];
            if ($sta == 0) {
                $res = db('cat')->where('id',$catid)->update(['status'=>1]);
                echo '1'; // 隐藏变为显示
            } elseif ($sta == 1) {
                $res = db('cat')->where('id',$catid)->update(['status'=>0]);
                echo '2'; // 显示变为隐藏
            }
        }
    }

    /**
     * 分类排序、批量删除分类
     * @return [type] [description]
     */
    public function sort_del()
    {
        $data = input('post.');
        // 更新分类排序
        foreach ($data['sort'] as $k => $v) {
            db('cat')->where('id',$k)->update(['sort'=>$v]);
        }
        $this->success('更新成功!',url('index'));
    }
}
