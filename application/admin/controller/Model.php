<?php 
namespace app\admin\controller;
use think\Db;

class Model extends Common
{
	public function index()
	{
		$model_list = db('model')->order('id desc')->select();
		$this->assign('model_list',$model_list);
		return view();
	}

	public function add()
	{
		if (request()->isAjax()) {
			$data['modelname'] = trim(input('post.modelname'));
			$data['tablename'] = trim(input('post.tablename'));
			$data['status'] = trim(input('post.status'));
			$res = db('model')->insert($data);
			$sql = "CREATE TABLE `" . config('database.prefix') . "{$data['tablename']}` (";
			$sql .= "`id` int(10) unsigned NOT NULL AUTO_INCREMENT,";
			$sql .= "`mname` varchar(120) NOT NULL,";
			$sql .= "PRIMARY KEY (`id`)";
			$sql .= ") ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8";
			Db::execute($sql);
			if ($res) {
				exit(json_encode(array('code'=>0,'msg'=>'模块添加成功!')));
			}
			return;
		}
		return view();
	}

	public function edit($id)
	{
		if (request()->isAjax()) {
			$data['modelname'] = trim(input('post.modelname'));
			$data['tablename'] = trim(input('post.tablename'));
			$data['status'] = trim(input('post.status'));
			$data['id'] = (int)input('post.id');
			$prefix = config('database.prefix');
			$old_tablename = trim(input('post.oldtablename'));
			if (empty($data['modelname']) || empty($data['tablename'])  ) {
				exit(json_encode(array('code'=>1, 'msg'=>'必填项不能为空!')));
			}
			if ($old_tablename != $data['tablename']) {
				Db::execute('rename table ' . $prefix . $old_tablename . ' to ' . $prefix . $data['tablename']);
			}
			$res = db('model')->update($data);
			if ($res !== false) {
				exit(json_encode(array('code' => 0, 'msg' => '修改模型成功!')));
			}
			return;
		}
		$modelInfo = db('model')->find($id);
		$this->assign('modelInfo',$modelInfo);
		return view();
	}

	public function delete()
	{
		if (request()->isAjax()) {
			$id = input('post.id');
			if ((int)$id <= 0) {
				exit(json_encode(array('code' => 1, 'msg' => '参数错误!')));	
			}
			// 获取附加表名
			$_tabname = db('model')->field('tablename')->find($id);
			$tabname = config('database.prefix') . $_tabname['tablename'];
			Db::execute("drop table {$tabname}");
			
			$res = db('model')->delete($id);
			if ($res) {
				exit(json_encode(array('code' => 0, 'msg' => '模块删除成功!')));
			}
		}
	}
}