<?php
namespace app\admin\validate;

use think\Validate;

class Model extends Validate
{
    protected $rule =   [
        'modelname'  => 'require',
        'tablename'   => 'require',
    ];
    
    protected $message  =   [
        'modelname.require' => '模块名不能为空',
        'tablename.require'     => '附加表名不能为空',
    ];
}