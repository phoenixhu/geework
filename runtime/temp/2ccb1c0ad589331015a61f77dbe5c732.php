<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\phpStudy\WWW\geework\public/../application/index\view\daily\add.html";i:1508753639;s:72:"D:\phpStudy\WWW\geework\public/../application/index\view\common\top.html";i:1508746869;s:73:"D:\phpStudy\WWW\geework\public/../application/index\view\common\left.html";i:1508749639;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>后台管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__INDEX__/css/bootstrap.min.css" rel="stylesheet">
    <link href="__INDEX__/css/font-awesome.css" rel="stylesheet">
    <link href="__INDEX__/css/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__INDEX__/css/beyond.css" rel="stylesheet" type="text/css">
    <link href="__INDEX__/css/demo.css" rel="stylesheet">
    <link href="__INDEX__/css/typicons.css" rel="stylesheet">
    <link href="__INDEX__/css/animate.css" rel="stylesheet">

    <!--引入UEditor编辑器-->
    <script type="text/javascript" src="__INDEX__/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="__INDEX__/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="__INDEX__/ueditor/lang/zh-cn/zh-cn.js"></script>

</head>
<body>
<!--头部引入-->
<!-- 头部分离 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="__IINDEX__/images/logo.png" alt="">
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
                                    <img src="__INDEX__/images/manager.png">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><!--<?php echo \think\Request::instance()->session('username'); ?>--></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="#">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">
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

<div class="main-container container-fluid">
    <div class="page-container">
<!--左侧引入-->
<!--左侧分离分离-->
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
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-text"></i>
                        <span class="menu-text">日报</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('daily/lst'); ?>">
                                    <span class="menu-text">
                                        我的日报                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="menu-text">
                                        收到的日报                                    </span>
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
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="<?php echo url('lst'); ?>">我的日报</a>
                    </li>
                    <li class="active">添加日报</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
                <!-- Page Body -->
                <div class="page-body">

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">添加日报</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">作者</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" placeholder="" name="author" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">创建日期</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="author" placeholder="" name="creadate" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">报送</label>
                            <div class="col-sm-6">
                                <select name="cc">
                                    <option value="">请选择报送人</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">上传附件</label>
                            <div class="col-sm-6">
                                <input id="pic" placeholder="" name="attachment" type="file">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">文章内容</label>
                            <div class="col-sm-6">
                                <textarea id="content" name="content"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">提交</button>
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
<script src="__INDEX__/js/jquery_002.js"></script>
<script src="__INDEX__/js/bootstrap.js"></script>
<script src="__INDEX__/js/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__INDEX__/js/beyond.js"></script>
<!--实例化UEditor编辑器-->
<script type="text/javascript">
    UE.getEditor('content',{initialFrameWidth:1000, initialFrameHeight:400,});
</script>



</body></html>