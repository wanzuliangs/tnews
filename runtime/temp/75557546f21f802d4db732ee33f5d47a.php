<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:92:"C:\Users\Administrator\Desktop\work\WWW\tnews\public/../application/admin\view\cate\add.html";i:1543741837;s:85:"C:\Users\Administrator\Desktop\work\WWW\tnews\application\admin\view\common\head.html";i:1543722520;s:85:"C:\Users\Administrator\Desktop\work\WWW\tnews\application\admin\view\common\left.html";i:1543722520;}*/ ?>
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
    <!-- <link href="/tnews/public/static/admin/plus/uploadify/uploadify.css" rel="stylesheet"> -->
    <script src="/tnews/public/static/admin/style/jquery_002.js"></script>
    <script src="/tnews/public/static/admin/plus/uploadify/jquery.uploadify.min.js"></script>
    <script>
        $(function () {
            $("#uploadify").uploadify({
                //指定swf文件
                'swf': '/tnews/public/static/admin/plus/uploadify/uploadify.swf',
                //后台处理的页面
                'uploader': '<?php echo url("cate/uploadImg"); ?>',
                'progressData' : 'speed',
                //按钮显示的文字
                'buttonText': '上传文件',
                'buttonClass': 'btn btn-blue btn-sm',
                //显示的高度和宽度，默认 height 30；width 120
                //'height': 15,
                //'width': 80,
                //上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
                //在浏览窗口底部的文件类型下拉菜单中显示的文本
                'fileTypeDesc': 'Image Files',
                // 设置发送数据的name值
                'fileObjName': 'img',
                'onUploadSuccess' : function(file,data,response) {
                    var img_url = "/tnews/public/static/admin/uploads/cateimg/" + data;
                    if (img_url != '') {
                        $('input[name="img"]').val(data);
                        $('#catimg').html('<img style="height:120px;" src="' + img_url + '">');
                    };

                }
            });
            $('#uploadify-button').removeAttr('style').css({'margin-left':'10px'});
        });
    </script>
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
                                        <li class="active">添加栏目</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
            <div class="widget-body">
                <div class="widget-main ">
                    <div class="tabbable">
                        <ul class="nav nav-tabs  tabs-flat">
                            <li class="active">
                                <a data-toggle="tab" href="#FlatTab-1" aria-expanded="true">栏目基本信息</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#FlatTab-2" aria-expanded="false">SEO信息</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#FlatTab-3" aria-expanded="false">栏目内容</a>
                            </li>
                        </ul>
                        <div class="tab-content  tabs-flat">
                            <div class="tab-pane active" id="FlatTab-1">
                                <div class="form-group">
                                    <label for="mode_id" class="col-sm-2 control-label no-padding-right">栏目模型</label>
                                    <div class="col-sm-6">
                                        <select name="mode_id">
                                            <option value="1">文章模型</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pid" class="col-sm-2 control-label no-padding-right">上级栏目</label>
                                    <div class="col-sm-6">
                                        <select name="pid">
                                            <option value="0">顶级栏目</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cate_name" class="col-sm-2 control-label no-padding-right">分类名称</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="" name="cate_name" type="text" value=""></div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label no-padding-right">是否隐藏</label>
                                   <div class="col-sm-6" style="padding-top:4px;">
                                        <label><input  class="colored-blue" name="status" type="radio"><span class="text"> 是</span></label>　
                                         <label><input checked="checked" class="colored-blue" name="status" type="radio"><span class="text"> 否</span></label>
                                   </div>
                                </div>


                                <div class="form-group">
                                    <input type="hidden" name="img" value="">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">栏目图片</label>
                                    <div class="row" style="padding-top:6px;">
                                        <div class="col-md-1">
                                            <label>
                                                <span id="uploadify"  class="colored-blue"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2" id="catimg"></div>
                                </div>

                                <div class="form-group">
                                    <label for="list_tmp" class="col-sm-2 control-label no-padding-right">列表页模版</label>
                                   <div class="col-sm-6" style="padding-top:4px;">
                                        <label><input class="form-control" placeholder="" name="list_tmp" type="text" value="list_article.htm"></label>　
                                   </div>
                                </div>

                                <div class="form-group">
                                    <label for="index_tmp" class="col-sm-2 control-label no-padding-right">频道页模版</label>
                                   <div class="col-sm-6" style="padding-top:4px;">
                                        <label><input class="form-control" placeholder="" name="index_tmp" type="text" value="index_article.htm"></label>　
                                   </div>
                                </div>

                                <div class="form-group">
                                    <label for="article_tmp" class="col-sm-2 control-label no-padding-right">内容页模版</label>
                                   <div class="col-sm-6" style="padding-top:4px;">
                                        <label><input class="form-control" placeholder="" name="article_tmp" type="text" value="article_article.htm"></label>　
                                   </div>
                                </div>


                            </div>
                            <div class="tab-pane" id="FlatTab-2">
                                 <div class="form-group">
                                     <label for="seotitle" class="col-sm-2 control-label no-padding-right">标题</label>
                                     <div class="col-sm-6">
                                         <input class="form-control" placeholder="" name="seotitle" type="text" value=""></div>
                                 </div>

                                 <div class="form-group">
                                     <label for="kewords" class="col-sm-2 control-label no-padding-right">关键词</label>
                                     <div class="col-sm-6">
                                         <input class="form-control" placeholder="" name="kewords" type="text" value=""></div>
                                 </div>

                                 <div class="form-group">
                                     <label for="des" class="col-sm-2 control-label no-padding-right">描述</label>
                                     <div class="col-sm-6">
                                        <textarea name="des" class="form-control"></textarea>
                                     </div>
                                 </div>
                            </div>
                            <div class="tab-pane" id="FlatTab-3">
                                <div class="widget-main no-padding">
                                    <div id="summernote"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-2">
                                    <button type="submit" class="btn btn-default">添加分类</button>
                                </div>
                            </div>
                        </div>
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
    <script src="/tnews/public/static/admin/style/bootstrap.js"></script>
    <!--Beyond Scripts-->
    <script src="/tnews/public/static/admin/style/beyond.js"></script>
     <script src="/tnews/public/static/admin/style/summernote.js"></script>
    <script>
        $('#summernote').summernote({ height: 300 });
    </script>
    


</body></html>