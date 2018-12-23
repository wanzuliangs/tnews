<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:100:"C:\Users\Administrator\Desktop\work\WWW\tnews\public/../application/admin\view\model_fields\add.html";i:1545577093;s:85:"C:\Users\Administrator\Desktop\work\WWW\tnews\application\admin\view\common\head.html";i:1545483136;s:85:"C:\Users\Administrator\Desktop\work\WWW\tnews\application\admin\view\common\left.html";i:1545573465;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ThinkPHP5.0</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/tnews/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/tnews/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/tnews/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/tnews/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/tnews/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/tnews/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/tnews/public/static/admin/style/animate.css" rel="stylesheet">

</head>

<body>
    <!-- 头部 -->
    <!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="/tnews/public/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/tnews/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

    <!-- /头部 -->

    <!-- /头部 -->

    <div class="main-container container-fluid">
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li <?php if($contrname == 'Config'): ?>class="open" <?php endif; ?>> <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-asterisk"></i>
            <span class="menu-text">网站配置</span>
            <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('config/configlst'); ?>">
                        <span class="menu-text">
                            配置列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('config/lst'); ?>">
                        <span class="menu-text">
                            配置管理 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            管理列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li <?php if($contrname == 'Cate'): ?>class="open" <?php endif; ?>> <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-tasks"></i>
            <span class="menu-text">栏目管理</span>
            <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/index'); ?>">
                        <span class="menu-text">
                            栏目列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('cate/add'); ?>">
                        <span class="menu-text">
                            栏目添加 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文档</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            文章列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li <?php if($contrname == 'Cate'): ?>class="open" <?php endif; ?>> <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-tasks"></i>
            <span class="menu-text">模块管理</span>
            <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('model/index'); ?>">
                        <span class="menu-text">
                            模块列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('model/add'); ?>">
                        <span class="menu-text">
                            模块添加 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li <?php if($contrname == 'ModelField'): ?>class="open" <?php endif; ?>> <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-pagelines"></i>
            <span class="menu-text">模型字段管理</span>
            <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('ModelFields/index'); ?>">
                        <span class="menu-text">
                            模型字段列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('ModelFields/add'); ?>">
                        <span class="menu-text">
                            模型字段添加 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            配置 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>



    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">字段管理</a>
                        </li>
                        <li class="active">添加字段</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">新增字段</span>
                                </div>
                                <div class="widget-body">
                                    <div id="horizontal-form">
                                        <form class="form-horizontal" role="form" action="" method="post">
                                            <div class="form-group">
                                                <label for="field_cname" class="col-sm-2 control-label no-padding-right">中文名</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="field_cname" placeholder="" name="field_cname"
                                                        required="" type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="field_ename" class="col-sm-2 control-label no-padding-right">英文名</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="field_ename" placeholder="" name="field_ename"
                                                        required="" type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="field_type" class="col-sm-2 control-label no-padding-right">字段类型</label>
                                                <div class="col-sm-6">
                                                    <select name="field_type" style="width: 100%;">
                                                        <option selected="selected" value="1">文本框</option>
                                                        <option value="2">单选框</option>
                                                        <option value="3">复选框</option>
                                                        <option value="4">下拉菜单</option>
                                                        <option value="5">文本域</option>
                                                        <option value="6">浮点型</option>
                                                        <option value="7">整型</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="field_value" class="col-sm-2 control-label no-padding-right">可选值</label>
                                                <div class="col-sm-6">
                                                    <textarea name="field_value" id="" style="width:530px;height:101px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="model_id" class="col-sm-2 control-label no-padding-right">所属模块</label>
                                                <div class="col-sm-6">
                                                    <select name="model_id" style="width: 100%;">
                                                        <?php if(is_array($model) || $model instanceof \think\Collection || $model instanceof \think\Paginator): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$model): $mod = ($i % 2 );++$i;?>
                                                        <option  value="<?php echo $model['id']; ?>"><?php echo $model['modelname']; ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default">保存信息</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="/tnews/public/static/admin/style/jquery_002.js"></script>
    <script src="/tnews/public/static/admin/style/bootstrap.js"></script>
    <script src="/tnews/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/tnews/public/static/admin/style/beyond.js"></script>



</body>

</html>