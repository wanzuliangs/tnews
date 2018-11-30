<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:99:"C:\Users\Administrator\Desktop\web\WWW\tnews\public/../application/admin\view\config\configlst.html";i:1543566167;s:84:"C:\Users\Administrator\Desktop\web\WWW\tnews\application\admin\view\common\head.html";i:1543367187;s:84:"C:\Users\Administrator\Desktop\web\WWW\tnews\application\admin\view\common\left.html";i:1543374904;}*/ ?>
<!DOCTYPE html>
<html><head>
        <meta charset="utf-8">
    <title>newscms</title>

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
    
    <div class="main-container container-fluid">
        <div class="page-container">
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
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-asterisk"></i>
                            <span class="menu-text">网站配置</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('config/configlst'); ?>">
                                    <span class="menu-text">
                                        配置列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                             <li>
                                <a href="<?php echo url('config/lst'); ?>">
                                    <span class="menu-text">
                                        配置管理                                    </span>
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
                                        管理列表                                    </span>
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
                                        文章列表                                    </span>
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
                                        配置                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>                        
                    
                                   
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                      
                        <li>
                            <a href="#">网站配置</a>
                        </li>
                        <li class="active">配置列表</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget-body">
            <div class="widget-main ">
                <div class="tabbable">
                    <ul class="nav nav-tabs  tabs-flat">
                        <li class="active ">
                            <a data-toggle="tab" href="#FlatTab-1">基本设置</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#FlatTab-2">联系方式</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#FlatTab-3">SEO设置</a>
                        </li>
                    </ul>
<form class="form-horizontal" role="form" action="" method="post">
                    <div class="tab-content  tabs-flat">
                        <div class="active tab-pane" id="FlatTab-1">

                            <?php foreach ($confList as $conf): if ($conf['cf_type'] == 1): ?>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $conf['cname'] ?></label>
                                <div class="col-sm-6">
                                    <?php if ($conf['dt_type'] == 1): ?>
                                        <input class="form-control" placeholder="" name="<?php echo $conf['ename'] ?>"  type="text" value="<?php echo !empty($conf['value'])?$conf['value']:''; ?>">
                                    <?php elseif ($conf['dt_type'] == 2): ?>
                                        <div class="row">
                                            <?php 
                                                $valuesArr = explode(',',$conf['values']);
                                                foreach($valuesArr as $v):
                                             ?>
                                            <div class="radio col-md-2">
                                                <label>
                                                    <input <?php if($v == $conf['value']): ?>checked<?php endif; ?> class="colored-blue" name="<?php echo $conf['ename']; ?>" type="radio" value="<?php echo $v ?>">                                        
                                                    <span class="text"><?php echo $v ?></span>
                                                </label>
                                            </div>
                                           <?php endforeach; ?>
                                        </div>
                                    <?php elseif ($conf['dt_type'] == 3): ?>
                                        <div class="row">
                                            <?php 
                                                $valuesArr = explode(',',$conf['values']);
                                                $valueArr = explode(',',$conf['value']);
                                                foreach($valuesArr as $v):
                                             ?>
                                            <div class="checkbox col-md-2">
                                                <label>
                                                    <input <?php if(in_array($v,  $valueArr)){echo 'checked';}?> class="colored-blue" id="form-field-checkbox" name="<?php echo $conf['ename']; ?>[]" type="checkbox" value="<?php echo $v; ?>">                                        
                                                                                           
                                                    <span class="text"><?php echo $v ?></span>
                                                </label>
                                            </div>
                                           <?php endforeach; ?>
                                        </div>
                                    <?php elseif ($conf['dt_type'] == 4): ?>
                                        <select  name="<?php echo $conf['ename'] ?>">
                                            <?php 
                                                $valuesArr = explode(',',$conf['values']);
                                                foreach($valuesArr as $v):
                                             ?>
                                            <option <?php if ($v == $conf['value']) { echo "selected"; } ?> value="<?php echo $v ?>"><?php echo $v ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    <?php elseif ($conf['dt_type'] == 5): ?>
                                        <textarea name="<?php echo $conf['ename'] ?>"  class="form-control"><?php echo !empty($conf['value'])?$conf['value']:''; ?></textarea>
                                    <?php elseif ($conf['dt_type'] == 6): ?>
                                        <input  type="file" name="<?php echo $conf['ename'] ?>">
                                    <?php endif; ?>

                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>
                            <?php endif; endforeach; ?>

                        
                        </div>
                        <div class="tab-pane" id="FlatTab-2">
                             <?php foreach ($confList as $conf): if ($conf['cf_type'] == 2): ?>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $conf['cname'] ?></label>
                                <div class="col-sm-6">
                                    <?php if ($conf['dt_type'] == 1): ?>
                                        <input class="form-control" placeholder="" name="<?php echo $conf['ename'] ?>"  type="text" value="<?php echo !empty($conf['value'])?$conf['value']:''; ?>">
                                    <?php elseif ($conf['dt_type'] == 2): ?>
                                        <div class="row">
                                            <?php 
                                                $valuesArr = explode(',',$conf['values']);
                                                foreach($valuesArr as $v):
                                             ?>
                                            <div class="radio col-md-2">
                                                <label>
                                                    <input <?php if($v == $conf['value']): ?>checked<?php endif; ?> class="colored-blue" name="<?php echo $conf['ename']; ?>" type="radio" value="<?php echo $v ?>">                                        
                                                    <span class="text"><?php echo $v ?></span>
                                                </label>
                                            </div>
                                           <?php endforeach; ?>
                                        </div>
                                    <?php elseif ($conf['dt_type'] == 3): ?>
                                        <div class="row">
                                            <?php 
                                                $valuesArr = explode(',',$conf['values']);
                                                $valueArr = explode(',',$conf['value']);
                                                foreach($valuesArr as $v):
                                             ?>
                                            <div class="checkbox col-md-2">
                                                <label>
                                                    <input <?php if(in_array($v,  $valueArr)){echo 'checked';}?> class="colored-blue" id="form-field-checkbox" name="<?php echo $conf['ename']; ?>[]" type="checkbox" value="<?php echo $v; ?>">                                        
                                                                                           
                                                    <span class="text"><?php echo $v ?></span>
                                                </label>
                                            </div>
                                           <?php endforeach; ?>
                                        </div>
                                    <?php elseif ($conf['dt_type'] == 4): ?>
                                        <select  name="<?php echo $conf['ename'] ?>">
                                            <?php 
                                                $valuesArr = explode(',',$conf['values']);
                                                foreach($valuesArr as $v):
                                             ?>
                                            <option <?php if ($v == $conf['value']) { echo "selected"; } ?> value="<?php echo $v ?>"><?php echo $v ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    <?php elseif ($conf['dt_type'] == 5): ?>
                                        <textarea name="<?php echo $conf['ename'] ?>"  class="form-control"><?php echo !empty($conf['value'])?$conf['value']:''; ?></textarea>
                                    <?php elseif ($conf['dt_type'] == 6): ?>
                                        <input  type="file" name="<?php echo $conf['ename'] ?>">
                                    <?php endif; ?>

                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>
                            <?php endif; endforeach; ?>
                            
                        </div>
                        <div class="tab-pane" id="FlatTab-3">
                             <?php foreach ($confList as $conf): if ($conf['cf_type'] == 3): ?>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $conf['cname'] ?></label>
                                <div class="col-sm-6">
                                    <?php if ($conf['dt_type'] == 1): ?>
                                        <input class="form-control" placeholder="" name="<?php echo $conf['ename'] ?>"  type="text" value="<?php echo !empty($conf['value'])?$conf['value']:''; ?>">
                                    <?php elseif ($conf['dt_type'] == 2): ?>
                                        <div class="row">
                                            <?php 
                                                $valuesArr = explode(',',$conf['values']);
                                                foreach($valuesArr as $v):
                                             ?>
                                            <div class="radio col-md-2">
                                                <label>
                                                    <input <?php if($v == $conf['value']): ?>checked<?php endif; ?> class="colored-blue" name="<?php echo $conf['ename']; ?>" type="radio" value="<?php echo $v ?>">                                        
                                                    <span class="text"><?php echo $v ?></span>
                                                </label>
                                            </div>
                                           <?php endforeach; ?>
                                        </div>
                                    <?php elseif ($conf['dt_type'] == 3): ?>
                                        <div class="row">
                                            <?php 
                                                $valuesArr = explode(',',$conf['values']);
                                                $valueArr = explode(',',$conf['value']);
                                                foreach($valuesArr as $v):
                                             ?>
                                            <div class="checkbox col-md-2">
                                                <label>
                                                    <input <?php if(in_array($v,  $valueArr)){echo 'checked';}?> class="colored-blue"  name="<?php echo $conf['ename']; ?>[]" type="checkbox" value="<?php echo $v; ?>">                                        
                                                                                           
                                                    <span class="text"><?php echo $v ?></span>
                                                </label>
                                            </div>
                                           <?php endforeach; ?>
                                        </div>
                                    <?php elseif ($conf['dt_type'] == 4): ?>
                                        <select  name="<?php echo $conf['ename'] ?>">
                                            <?php 
                                                $valuesArr = explode(',',$conf['values']);
                                                foreach($valuesArr as $v):
                                             ?>
                                            <option <?php if ($v == $conf['value']) { echo "selected"; } ?> value="<?php echo $v ?>"><?php echo $v ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    <?php elseif ($conf['dt_type'] == 5): ?>
                                        <textarea name="<?php echo $conf['ename'] ?>"  class="form-control"><?php echo !empty($conf['value'])?$conf['value']:''; ?></textarea>
                                    <?php elseif ($conf['dt_type'] == 6): ?>
                                        <input  type="file" name="<?php echo $conf['ename'] ?>">
                                    <?php endif; ?>

                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>
                            <?php endif; endforeach; ?>
                        </div>
                         <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
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
    


</body></html>