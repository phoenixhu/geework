<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\phpStudy\WWW\geework\public/../application/panel\view\daily\add.html";i:1508983305;s:72:"D:\phpStudy\WWW\geework\public/../application/panel\view\common\top.html";i:1508919447;s:73:"D:\phpStudy\WWW\geework\public/../application/panel\view\common\left.html";i:1508812171;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>后台管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__PANEL__/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PANEL__/css/font-awesome.css" rel="stylesheet">
    <link href="__PANEL__/css/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__PANEL__/css/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PANEL__/css/demo.css" rel="stylesheet">
    <link href="__PANEL__/css/typicons.css" rel="stylesheet">
    <link href="__PANEL__/css/animate.css" rel="stylesheet">

    <!--Basic Scripts-->
    <script src="__PANEL__/js/jquery_002.js"></script>
    <script src="__PANEL__/js/bootstrap.js"></script>
    <script src="__PANEL__/js/jquery.js"></script>

    <!--引入UEditor编辑器-->
    <script type="text/javascript" src="__PANEL__/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="__PANEL__/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="__PANEL__/ueditor/lang/zh-cn/zh-cn.js"></script>
    <style type="text/css">
        *{margin:0;padding:0;list-style-type:none;outline:none;}
        a,img{border:0;}
        body{font:12px/normal "microsoft yahei";}
        .selectbox div{float:left;}
        .selectbox .select-bar{padding:0 5px;}
        .selectbox .select-bar select{width:150px;height:200px;border:1px #A0A0A4 solid;padding:4px;font-size:14px;font-family:"microsoft yahei";}
        .btn-bar{}
        .btn-bar p{margin-top:16px;}
        .btn-bar p .btn{width:50px;height:30px;cursor:pointer;font-family:simsun;font-size:14px;}
    </style>
    <script type="text/javascript">
        $(function(){
            //移到右边
            $('#add').click(function(){
                //先判断是否有选中
                if(!$("#select1 option").is(":selected")){
                    alert("请选择需要移动的选项")
                }
                //获取选中的选项，删除并追加给对方
                else{
                    $('#select1 option:selected').appendTo('#select2');
                }
            });

            //移到左边
            $('#remove').click(function(){
                //先判断是否有选中
                if(!$("#select2 option").is(":selected")){
                    alert("请选择需要移动的选项")
                }
                else{
                    $('#select2 option:selected').appendTo('#select1');
                }
            });

            //全部移到右边
            $('#add_all').click(function(){
                //获取全部的选项,删除并追加给对方
                $('#select1 option').appendTo('#select2');
            });

            //全部移到左边
            $('#remove_all').click(function(){
                $('#select2 option').appendTo('#select1');
            });

            //双击选项
            $('#select1').dblclick(function(){ //绑定双击事件
                //获取全部的选项,删除并追加给对方
                $("option:selected",this).appendTo('#select2'); //追加给对方
            });

            //双击选项
            $('#select2').dblclick(function(){
                $("option:selected",this).appendTo('#select1');
            });

        });
    </script>


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
                        <img src="__PANEL__/images/logo.png" alt="">
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
                                    <img src="__PANEL__/images/manager.png">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('user/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('user/edit', array('id'=>\think\Request::instance()->session('id'))); ?>">
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
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text">员工管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('user/lst'); ?>">
                                    <span class="menu-text">
                                        员工列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-list"></i>
                        <span class="menu-text">职位管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('position/lst'); ?>">
                                    <span class="menu-text">
                                        职位列表
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>
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
                        <input type="hidden" name="author" value="<?php echo \think\Request::instance()->session('username'); ?>">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">日报标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" name="title" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">报送</label>
                            <div class="col-sm-6">
                                <div class="selectbox">
                                    <div class="select-bar">
                                        <select multiple="multiple" id="select1">
                                            <?php if(is_array($userres) || $userres instanceof \think\Collection || $userres instanceof \think\Paginator): $i = 0; $__LIST__ = $userres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['username']; ?>"><?php echo $vo['username']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>

                                    <div class="btn-bar">
                                        <p><span id="add"><input type="button" class="btn" value=">" title="移动选择项到右侧"/></span></p>
                                        <p><span id="add_all"><input type="button" class="btn" value=">>" title="全部移到右侧"/></span></p>
                                        <p><span id="remove"><input type="button" class="btn" value="<" title="移动选择项到左侧"/></span></p>
                                        <p><span id="remove_all"><input type="button" class="btn" value="<<" title="全部移到左侧"/></span></p>
                                    </div>

                                    <div class="select-bar">
                                        <select multiple="multiple" id="select2"></select>
                                    </div>
                                </div>
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
                                <button type="submit" class="btn btn-primary">提交</button>
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


<!--Beyond Scripts-->
<script src="__PANEL__/js/beyond.js"></script>
<!--实例化UEditor编辑器-->
<script type="text/javascript">
    UE.getEditor('content',{initialFrameWidth:1000, initialFrameHeight:400,});
</script>



</body></html>