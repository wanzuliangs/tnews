<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:93:"C:\Users\Administrator\Desktop\web\WWW\tnews\public/../application/admin\view\cate\index.html";i:1544063115;s:84:"C:\Users\Administrator\Desktop\web\WWW\tnews\application\admin\view\common\head.html";i:1543367187;s:84:"C:\Users\Administrator\Desktop\web\WWW\tnews\application\admin\view\common\left.html";i:1543631803;}*/ ?>
<!DOCTYPE html>
<html><head>
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
                    <li <?php if($contrname == 'Config'): ?>class="open"<?php endif; ?>>
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

                     <li <?php if($contrname == 'Cate'): ?>class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa  fa-tasks"></i>
                            <span class="menu-text">栏目管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('cate/index'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('cate/add'); ?>">
                                    <span class="menu-text">
                                        栏目添加                                    </span>
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
            <!-- /Page Sidebar -->
            <!-- Page Content -->
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">栏目管理</a>
            </li>
            <li class="active">栏目列表</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">
    
        <button type="button" tooltip="添加栏目" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href='<?php echo url('cate/add'); ?>'">
            <i class="fa fa-plus"></i> Add
        </button>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <form action="<?php echo url('cate/sort_del'); ?>" method="post">
                <div class="widget">
                    <div class="widget-body">
                        <div class="flip-scroll">
                            <table class="table table-bordered table-hover">
                                <thead class="">
                                   <tr>
                                        <th style="width:2%;" class="text-center"><label><input id="checkall" type="checkbox"><span class="text"></span></label></th>
                                        <th class="text-center" style="width:2%">ID</th>
                                        <th class="text-center" style="width:8%">栏目</th>
                                        <th class="text-center" style="width:2%">状态</th>
                                        <th class="text-center" style="width:6%">属性</th>
                                        <th class="text-center" style="width:4%">所属模型</th>
                                        <th class="text-center" style="width:4%">排序</th>
                                        <th style="width:4%" class="text-center">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($catlist) || $catlist instanceof \think\Collection || $catlist instanceof \think\Paginator): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td align="center"><label><input name="item[]"  class="colored-blue" type="checkbox" value="<?php echo $cat['id']; ?>"><span class="text"></span></label></td>
                                        <td align="center"><?php echo $cat['id']; ?></td>
                                        <td align="left"><?php echo str_repeat('-', $cat['lev']*8) ?><a href="javascript:;"><?php echo $cat['cate_name']; ?></a><button type="button" style="float:right;" tooltip="添加栏目" class="btn btn-sm btn-azure btn-addon" onclick="javascript:window.location.href='<?php echo url('add',array('id'=>$cat['id'])); ?>'">
             添加栏目
        </button></td>
                                        <td align="center"><button catid="<?php echo $cat['id']; ?>" onclick="changestatus(this);" class="btn <?php if($cat['status'] == 1): ?>btn-info<?php else: ?>btn-danger<?php endif; ?>" type="button"><?php echo !empty($cat['status'])?'显示':'隐藏'; ?></button></td>
                                        <td align="center"><?php if($cat['cat_attr'] == 1): ?>列表栏目<?php else: ?>频道栏目<?php endif; ?></td>
                                        <td align="center">test</td>
                                        <td align="center"><input type="text" name="sort[<?php echo $cat['id']; ?>]" value="<?php echo $cat['sort']; ?>" style="width:40px;text-align:center;"></td>
                                        <td align="center">
                                            <a href="<?php echo url('edit',array('id'=>$cat['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 编辑
                                            </a>
                                            <a href="javascript:;" onClick="warning('确实要删除吗', '<?php echo url('cate/delete',array('id'=>$cat['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                                <i class="fa fa-trash-o"></i> 删除
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                            <div class="row" style="margin-top:10px;">
                                <div class="col-md-1 col-md-offset-8"><button type="submit" class="btn btn-default">批量删除分类</button></div>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                   
                </div>
                </form>
                

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
    <script>
        function changestatus(o) {
            var catid = $(o).attr('catid');
            $.ajax({
                url: "<?php echo url('cate/changestatus'); ?>",
                type: 'post',
                dataType: "json",
                data: {catid: catid},
                success: function(data) {
                    if (data == '1') {
                        $(o).attr('class','btn btn-info').text('显示');
                    } else if (data == '2') {
                        $(o).attr('class','btn btn-danger').text('隐藏');
                    }
                }
            })
            
        }

        $('#checkall').click(function() {
            if ($('.colored-blue').prop('checked')) {
                $('.colored-blue').prop('checked',false);
            } else {
                $('.colored-blue').prop('checked',true);
            }
        })
    </script>
</body></html>