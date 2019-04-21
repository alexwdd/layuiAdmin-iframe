<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"F:\wwwroot\2018\zhentan/app/adminx\view\index\index.html";i:1542594748;}*/ ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta content="text/html;charset=UTF-8" />
<title><?php echo config("site.name"); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no cache" />
<meta http-equiv="Expires" content="0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no" />

<!--页面加载进度条-->
<script src="<?php echo RES; ?>/js/pace.min.js"></script>
    <link href="<?php echo RES; ?>/js/pace-theme-flash.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="<?php echo RES; ?>/layui/css/layui.css" media="all" />
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo RES; ?>/jquery/jquery.min.js"></script>

<!--右键菜单插件-->
<link href="<?php echo RES; ?>/contextMenu/jquery.contextMenu.min.css" rel="stylesheet">
<script src="<?php echo RES; ?>/contextMenu/jquery.contextMenu.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo RES; ?>/css/fs.css?v=1.8.0" media="all" />
<script type="text/javascript" src="<?php echo RES; ?>/layui/layui.js"></script>
<script type="text/javascript" src="<?php echo RES; ?>/frame/js/fsDict.js?v=1.8.0"></script>
<script type="text/javascript" src="<?php echo RES; ?>/frame/js/fs.js?v=1.8.0"></script>
<script type="text/javascript" src="<?php echo RES; ?>/frame/js/main.js?v=1.8.0"></script>
</head>
<body>
<div class="layui-layout layui-layout-admin">

    <!-- 顶部 -->
    <div class="layui-header">
        <a href="<?php echo url('Index/index'); ?>" class="layui-hide-xs">
            <div class="layui-logo">后台管理</div>
        </a>
        <a href="javascript:;" class="layui-hide-xs">
            <div class="fsSwitchMenu"><i class="fa fa-bars"></i></div>
        </a>

        <!-- 顶部菜单 -->
        <ul class="layui-nav layui-layout-left fsTopMenu" id="fsTopMenu" lay-filter="fsTopMenu">
        </ul>

        <ul class="layui-nav layui-layout-right">
        	<li class="layui-nav-item layui-hide-xs">
				<a href="javascript:;" id="clearCache">清除缓存</a>
			</li>
			<li class="layui-nav-item layui-hide-xs">
				<a href="<?php echo config('site.domain'); ?>" target="_blank">浏览网站</a>
			</li>				
            <li class="layui-nav-item layui-hide-xs">
                <a href="javascript:;">
                    <img src="<?php echo RES; ?>/image/admin.jpg" class="layui-nav-img"> <?php echo $admin['name']; ?>
                </a>
                <dl class="layui-nav-child">
                    <dd>
                        <a href="javascript:;" id="changePwd" url="<?php echo url("User/password"); ?>"><i class="fa fa-key"></i> 修改密码</a>
                    </dd>
                    <dd>
                        <a href="javascript:;" id="signout"><i class="fa fa-sign-out"></i> 退出</a>
                    </dd>
                </dl>
            </li>
        </ul>
    </div>

    <!-- 左边菜单 -->
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree fsLeftMenu" lay-filter="fsLeftMenu" id="fsLeftMenu">
            </ul>
        </div>
    </div>

    <!-- 右边内容区域 -->
    <div class="layui-body layui-form">
        <div class="layui-tab layui-tab-card fsTab" lay-filter="fsTab" lay-allowClose="true">

            <!-- 菜单导航 -->
            <ul class="layui-tab-title" id="fsTabMenu">
                <li class="layui-this" lay-id="11"><cite>首页</cite>
                    <p class="layui-tab-close" style="display: none;"></p>
                </li>
            </ul <!-- 内容 -->
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show" lay-id="1">
                    <iframe src="<?php echo url('Index/main'); ?>"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 移动导航 -->
<div class="site-tree-mobile layui-hide">
    <i class="layui-icon">&#xe602;</i>
</div>
<div class="site-mobile-shade"></div>
</body>
</html>