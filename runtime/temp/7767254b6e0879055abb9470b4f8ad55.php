<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\phpStudy\WWW\geework\public/../application/panel\view\user\list.html";i:1508839429;s:72:"D:\phpStudy\WWW\geework\public/../application/panel\view\common\top.html";i:1508919447;s:73:"D:\phpStudy\WWW\geework\public/../application/panel\view\common\left.html";i:1508812171;}*/ ?>
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
                                        <li class="active">员工管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->
            
                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="增加员工" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">UID</th>
                                <th class="text-center">员工名称</th>
                                <th class="text-center">性别</th>
                                <th class="text-center">手机</th>
                                <th class="text-center">座机</th>
                                <th class="text-center">邮箱</th>
                                <th class="text-center">职位</th>
                                <th class="text-center">创建时间</th>
                                <th class="text-center">状态</th>
                                <th class="text-center" width="14%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($userres) || $userres instanceof \think\Collection || $userres instanceof \think\Paginator): $i = 0; $__LIST__ = $userres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td align="center"><?php echo $vo['id']; ?></td>
                                <td align="center"><?php echo $vo['uid']; ?></td>
                                <td align="center"><?php echo $vo['username']; ?></td>
                                <td align="center">
                                    <?php if($vo['sex'] == 1): ?>
                                    男
                                    <?php else: ?>
                                    女
                                    <?php endif; ?>
                                </td>
                                <td align="center"><?php echo $vo['phone']; ?></td>
                                <td align="center"><?php echo $vo['tel']; ?></td>
                                <td align="center"><?php echo $vo['mail']; ?></td>
                                <td align="center"><?php echo $vo['position']; ?></td>
                                <td align="center"><?php echo date("Y-m-d h:i",$vo['creat_time']); ?></td>
                                <td align="center">
                                    <?php if($vo['state'] == 1): ?>
                                    有效
                                    <?php else: ?>
                                    无效
                                    <?php endif; ?>
                                </td>
                                <td align="center">
                                    <a href="<?php echo url('edit', array('id' => $vo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del', array('id' => $vo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                         </tbody>
                    </table>
                </div>
                <div style="text-align: right; margin-top: 10px;">
                    <!--分页-->
                    <?php echo $userres->render(); ?>
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
<script src="__PANEL__/js/jquery_002.js"></script>
<script src="__PANEL__/js/bootstrap.js"></script>
<script src="__PANEL__/js/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__PANEL__/js/beyond.js"></script>


</body></html>