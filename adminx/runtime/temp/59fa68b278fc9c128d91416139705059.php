<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:52:"F:\wwwroot\2019\kfht.net/app/www\view\index\yjb.html";i:1555399223;s:55:"F:\wwwroot\2019\kfht.net\app\www\view\public\cssjs.html";i:1555314977;s:56:"F:\wwwroot\2019\kfht.net\app\www\view\public\header.html";i:1555313358;s:56:"F:\wwwroot\2019\kfht.net\app\www\view\public\footer.html";i:1555311987;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>工程案例-<?php echo config('site.name'); ?></title>
<meta name="keywords" content="<?php echo config('site.keyword'); ?>">
<meta name="description" content="<?php echo config('site.content'); ?>">
<link href="<?php echo RES; ?>/layui/css/layui.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES; ?>/fonts/iconfont.css" rel="stylesheet" type="text/css" />
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
<div class="top">  
    <div class="topBar">
        <div class="date">今天是：<?php echo date("Y年m月d日")?></div>
        <div class="fav">
            <a href="">设为首页</a>
            |
            <a href="">加入收藏</a>
        </div>
        <div class="topTel">服务热线：<?php echo config('site.tel'); ?></div>
    </div>

    <div class="header">          
        <div class="logo"><a href="<?php echo config('site.domain'); ?>" title="<?php echo config('site.name'); ?>"><img src="<?php echo RES; ?>/image/logo.jpg" alt="<?php echo config('site.name'); ?>" /></a></div>
        
        <div class="nav">
            <li data="home"><a href="<?php echo url('index/index'); ?>" title="<?php echo config('site.name'); ?>">网站首页</a></li>
            <li data="about"><a href="<?php echo url('index/about'); ?>" title="<?php echo config('site.name'); ?>">关于我们</a></li>
            <li data="honor"><a href="<?php echo url('index/honor'); ?>" title="资质荣誉">资质荣誉</a></li>
            <li data="product"><a href="<?php echo url('index/product'); ?>" title="产品展示">产品展示</a></li>
            <li data="project"><a href="<?php echo url('index/project'); ?>" title="工程案例">工程案例</a></li>
            <li data="service"><a href="<?php echo url('index/service'); ?>" title="服务中心">服务中心</a></li>
            <li data="news"><a href="<?php echo url('index/news'); ?>" title="新闻中心">新闻中心</a></li>
            <li data="contact"><a href="<?php echo url('index/contact'); ?>" title="联系我们">联系我们</a></li>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
    var act = $("#activeMenu").val();
    $(".nav li").each(function(){
        if($(this).attr("data")==act){
            $(this).addClass("active");
        }
    })
})
</script>

<div class="inBanner in5">
    <div class="inHeader">
        <div class="pageName">工程案例</div>
        <div class="inMenu">
            <li><a href="<?php echo url('index/project'); ?>">案例展示</a></li>
            <li class="active"><a href="<?php echo url('index/yjb'); ?>">业绩表</a></li>
        </div>
    </div>    
</div>

<div class="guide">
    <div class="main">
        <span class="layui-breadcrumb">
            <a href="/">首页</a>
            <a><cite>业绩表</cite></a>
        </span>
    </div>
</div>

<div class="main">
    <div class="content"><?php echo htmlspecialchars_decode($list['content']); ?></div>
</div>

<input type="hidden" id="activeMenu" value="project" />
<div class="footerBg">
	<div class="footer">
		<li>
			<div class="hd">关于我们</div>
			<div class="bd">
				<a href="">公司概况</a>
				<a href="">发展历程</a>
				<a href="">企业文化</a>
			</div>
		</li>
		<li>
			<div class="hd">资质荣誉</div>
			<div class="bd">
				<a href="">公司简介</a>
				<a href="">发展历程</a>
				<a href="">企业文化</a>
			</div>
		</li>
		<li>
			<div class="hd">产品展示</div>
			<div class="bd">
				<a href="">公司简介</a>
				<a href="">发展历程</a>
				<a href="">企业文化</a>
			</div>
		</li>
		<li>
			<div class="hd">工程案例</div>
			<div class="bd">
				<a href="">公司简介</a>
				<a href="">发展历程</a>
				<a href="">企业文化</a>
			</div>
		</li>
		<li>
			<div class="hd">新闻中心</div>
			<div class="bd">
				<a href="">公司简介</a>
				<a href="">发展历程</a>
				<a href="">企业文化</a>
			</div>
		</li>
		<li>
			<div class="hd">联系我们</div>
			<div class="bd">
				<a href="">公司简介</a>
				<a href="">发展历程</a>
				<a href="">企业文化</a>
			</div>
		</li>
	</div>
</div>

<div class="copyright">
	<div class="main">
		<div class="left">版权所有：<?php echo config('site.copyright'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.miitbeian.gov.cn/" target="_black">豫ICP备11004586号-1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="http://www.kf01.com" target="_blank">中联网络</a></div>
		<div class="right">地址：<?php echo config('site.address'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;咨询电话：<?php echo config('site.tel'); ?></div>
	</div>
</div>
</body>
</html>