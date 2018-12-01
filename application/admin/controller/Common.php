<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
   public function _initialize()
   {
   		$request = Request::instance();
   		// 得到当前控制器名
   		$contrname = $request->controller();
   		$this->assign("contrname",$contrname);
   }
}
