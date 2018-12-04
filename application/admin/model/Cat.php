<?php
namespace app\admin\model;
use think\Model;
class Cat extends Model
{
    // 获取分类树
    public function getCateTree() {
        $catlist = $this->order('sort desc')->select();
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

    // 获取子类id
    public function getChildrenIds($id) {
        $catlist = $this->field('id,pid')->select();
        return $this->_getChildrenIds($catlist,$id);
    }

    public function _getChildrenIds($data,$pid) {
        static $arr = array();
        foreach ($data as  $v) {
            if ($v['pid'] == $pid) {
                $arr[] = $v['id'];
                $this->_getChildrenIds($data,$v['id']);
            }
        }
        return $arr;
    }

    // 批量删除
    public function pdel($data)
    {
        foreach ($data['item'] as $k => $v) {
            $catChildrenIds[] = $this->getChildrenIds($v);
            $catChildrenIds[] = $v;
        }
        $ids = array();
        foreach ($catChildrenIds as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    $ids[] = $v2;
                }
            } else {
                $ids[] = $v;
            }
        }
        $ids = array_unique($ids);
        self::destroy($ids);
    }
}