<?php
namespace app\admin\model;
use think\Model;
class Cat extends Model
{
    public function getCateTree() {
        $catlist = $this->order('id desc')->select();
        return $this->getCate($catlist);
    }

    public function getCate($data,$pid=0,$lev=0) {
        static $arr = array();
        foreach ($data as $v) {
            if ($v['pid'] == $pid) {
                $v['lev'] = $lev;
                $arr[] = $v;
                $this->getCate($data,$v['id'],$lev+1);
            }
        }
        return $arr;
    }
}