<?php 
namespace app\admin\validate;

use think\Validate;

class Conf extends Validate
{
    protected $rule =   [
        'cname'  => 'require|max:25',
        'ename'   => 'require|max:25',
        'dt_type' => 'require|number',
        'cf_type' => 'require|number',
    ];
    
    protected $message  =   [
        'cname.require' => '中文名称必填',
        'cname.max'     => '中文名称最多不能超过25个字符',
        'ename.require'   => '英文名称必填',
        'ename.max'  => '英文名称最多不能超过25个字符',
    ];
    
    // protected $scene = [
    //     'edit'  =>  ['name','age'=>'require|number|between:1,120'],
    // ];
    
}