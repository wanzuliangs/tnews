<?php

namespace app\admin\controller;

class ModelFields extends Common
{
    public function index() 
    {
        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $model = db('model')->where(array('id'=>$data['model_id']))->find();
            $tableName = $model['tablename'];
            $tableName = config('database.prefix') . $tableName;
            $res = db('model_fields')->insert($data);
            if ($res) {
                $this->success('添加字段成功!','index');
            } else {
                $this->error('添加字段失败!');
            }
            return;
        }
        $model= db('model')->select();
        $this->assign('model',$model);
        return view();
    }
}