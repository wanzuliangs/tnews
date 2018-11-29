<?php 
namespace app\admin\validate;

use think\Validate;

class Conf extends Validate
{
    protected $rule =   [
        'cname'  => 'require|max:25|unique:conf',
        'ename'   => 'require|max:25|unique:conf',
        'dt_type' => 'require|number',
        'cf_type' => 'require|number',
    ];
    
    protected $message  =   [
        'cname.require' => '中文名称必填',
        'cname.unique' => '中文名称不能重复',
        'cname.max'     => '中文名称最多不能超过25个字符',
        'ename.require'   => '英文名称必填',
        'ename.max'  => '英文名称最多不能超过25个字符',
        'ename.unique' => '英文名称不能重复',
    ];
    
    protected $scene = [
        'edit'  =>  [
            'cname'  => 'require|max:25',
            'ename'   => 'require|max:25',
            'dt_type',
            'cf_type'
        ],
    ];
    
}