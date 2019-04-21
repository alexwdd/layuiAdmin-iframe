<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:53:"F:\wwwroot\2018\zhentan/app/www\view\index\about.html";i:1544531506;s:54:"F:\wwwroot\2018\zhentan\app\www\view\public\cssjs.html";i:1544410778;s:55:"F:\wwwroot\2018\zhentan\app\www\view\public\header.html";i:1544684860;s:55:"F:\wwwroot\2018\zhentan\app\www\view\public\footer.html";i:1544531662;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $list['title']; ?>-<?php echo config('site.name'); ?></title>
<meta name="keywords" content="<?php echo config('site.keyword'); ?>">
<meta name="description" content="<?php echo config('site.content'); ?>">
<link href="<?php echo RES; ?>/layui/css/layui.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES; ?>/css/comm.css?v=1.00" rel="stylesheet" type="text/css" />
<link href="<?php echo RES; ?>/css/app.css?v=1.00" rel="stylesheet" type="text/css" />

<script src="<?php echo RES; ?>/js/jquery.min.js" type="text/javascript" ></script>
<script src="<?php echo RES; ?>/layui/layui.js" type="text/javascript" ></script>
<script src="<?php echo RES; ?>/js/public.js" type="text/javascript" ></script>
<style type="text/css">
body,html{height: auto; overflow: auto;}
</style>
</head>
<body>
<div class="topBar">
    <div class="welcome">欢迎访问<?php echo config('site.name'); ?></div>
    <div class="topTel">
        一条龙私家侦探服务，帮助客户排忧解难！服务热线：<?php echo config('site.tel'); ?>
    </div>
</div>

<div class="header">
    <div class="main">    
        <div class="logo"><a href=""><img src="<?php echo RES; ?>/image/logo.jpg" /></a></div>

        <div class="topSearch">
            <div class="box">    
                <form action="<?php echo url('index/search'); ?>" id="searchForm" method="post">
                <input type="text" name="keyword" id="keyword" placeholder="关键词">
                <button type="button" id="searchBtn"><i class="layui-icon layui-icon-search"></i></button>
                </form>
            </div>   
        </div>

        <script type="text/javascript">
        $(function(){
            $("#searchBtn").click(function(){
                if ($("#keyword").val()!=""){
                    $("#searchForm").submit();
                }
            });
        })
        </script>

        <div class="headerTel"><i class="layui-icon layui-icon-cellphone-fine"></i><?php echo config('site.tel'); ?></div>
    </div>
</div>

<div class="navBox">
    <div class="main">
        <div class="nav">
            <li class="active"><a href="<?php echo url('index/index'); ?>" title="开封私家侦探首页">首页</a></li>
            <li><a href="<?php echo url('index/about','id=1'); ?>" title="关于真相侦探社">公司简介</a></li>
            <li><a href="<?php echo url('index/news','cid=1'); ?>" title="服务项目">服务项目</a></li>
            <li><a href="<?php echo url('index/news','cid=2'); ?>" title="新闻动态">新闻动态</a></li>
            <li><a href="<?php echo url('index/news','cid=3'); ?>" title="成功案例">成功案例</a></li>
            <li><a href="<?php echo url('index/news','cid=4'); ?>" title="开封婚姻调查">婚姻调查</a></li>
            <li><a href="<?php echo url('index/news','cid=5'); ?>" title="开封商务调查">商务调查</a></li>
            <li><a href="<?php echo url('index/news','cid=6'); ?>" title="开封财产调查">财产调查</a></li>
            <li><a href="<?php echo url('index/about','id=2'); ?>" title="开封隐私保密">隐私保密</a></li>
            <li><a href="<?php echo url('index/about','id=3'); ?>" title="联系我们">联系我们</a></li>
        </div>
    </div>
</div>

<div class="guide">
    <div class="main">
        <span class="layui-breadcrumb">
            <a href="<?php echo url('index/index'); ?>">首页</a>
            <a><cite><?php echo $list['title']; ?></cite></a>
        </span>
    </div>
</div>

<div class="main">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-xs9">
            <div class="aboutContent">
                <h3><?php echo $list['title']; ?></h3>
                <div class="content"><?php echo htmlspecialchars_decode($list['content']); ?></div>
            </div>
        </div>

        <div class="layui-col-xs3">
            <div class="aboutMenu">
                <h4>关于<?php echo config('site.name'); ?></h4>
                <li><i class="layui-icon layui-icon-right"></i> <a href="<?php echo url('index/about','id=1'); ?>">关于我们</a></li>
                <li><i class="layui-icon layui-icon-right"></i> <a href="<?php echo url('index/about','id=2'); ?>">隐私保密</a></li>             
                <li><i class="layui-icon layui-icon-right"></i> <a href="<?php echo url('index/about','id=3'); ?>">联系我们</a></li>                         
            </div>
        </div>
    </div>
</div>
<div class="footer-contact">
	<div class="footerMenu">
		<a href="<?php echo url('index/about',array('id'=>1)); ?>">公司简介</a>
		<a href="<?php echo url('index/news','cid=1'); ?>">服务项目</a>
		<a href="<?php echo url('index/news','cid=2'); ?>">新闻动态</a>
		<a href="<?php echo url('index/about',array('id'=>2)); ?>">隐私保密</a>
		<a href="<?php echo url('index/about',array('id'=>3)); ?>">联系我们</a>
	</div>
</div>
<div class="copyright">版权所有：<?php echo config('site.copyright'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;咨询电话：<?php echo config('site.tel'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系人：<?php echo config('site.linkman'); ?></div>
</body>
</html>