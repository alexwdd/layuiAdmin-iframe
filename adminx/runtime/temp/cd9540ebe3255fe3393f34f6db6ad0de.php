<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:56:"F:\wwwroot\2019\kfht.net/app/www\view\index\contact.html";i:1555481246;s:55:"F:\wwwroot\2019\kfht.net\app\www\view\public\cssjs.html";i:1555479545;s:56:"F:\wwwroot\2019\kfht.net\app\www\view\public\header.html";i:1555313358;s:56:"F:\wwwroot\2019\kfht.net\app\www\view\public\footer.html";i:1555480617;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>联系我们-<?php echo config('site.name'); ?></title>
<meta name="keywords" content="<?php echo config('site.keyword'); ?>">
<meta name="description" content="<?php echo config('site.content'); ?>">
<link href="<?php echo RES; ?>/layui/css/layui.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES; ?>/css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES; ?>/fonts/iconfont.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES; ?>/css/comm.css?v=1.00" rel="stylesheet" type="text/css" />
<link href="<?php echo RES; ?>/css/app.css?v=1.00" rel="stylesheet" type="text/css" />

<script src="<?php echo RES; ?>/js/jquery.min.js" type="text/javascript" ></script>
<script src="<?php echo RES; ?>/js/wow.min.js" type="text/javascript"></script>
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

<div class="inBanner in2">
    <div class="inHeader">
        <div class="pageName wow bounceInRight">联系我们</div>
    </div>
</div>

<div class="guide">
    <div class="main">
        <span class="layui-breadcrumb">
            <a href="/">首页</a>
            <a><cite>联系我们</cite></a>
        </span>
    </div>
</div>

<div class="main">
    <div class="contactLeft">
        <div class="cTitle">联系方式</div>
        <div class="contact"><?php echo htmlspecialchars_decode($list['content']); ?></div>
        <div class="map" id="map"></div>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=37f5e0eb64651c2889953a1e53e7bc5b"></script>
        <script>
            $(function(){
                var sContent ="<p><?php echo config('site.address'); ?></p><p><?php echo config('site.tel'); ?></p>";
                var map = new BMap.Map("map");       // 创建地图实例
                point = new BMap.Point(116.39169,39.929648);
                map.centerAndZoom(point, 17);
                map.enableScrollWheelZoom(true);
                var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
                map.openInfoWindow(infoWindow,point); //开启信息窗口
                marker = new BMap.Marker(point);  // 创建标注
                map.addOverlay(marker);
                marker.addEventListener("click", function(){          
                   this.openInfoWindow(infoWindow);
                });
            })
        </script>
    </div>
    <div class="contactRight">
        <div class="cTitle">在线留言</div>
        <form class="layui-form" method="post">
            <div class="layui-form-item">                
                <input type="text" name="name" id="name" required lay-verify="required" placeholder="您的姓名" autocomplete="off" class="layui-input">               
            </div>

            <div class="layui-form-item">
                <input type="number" name="mobile" id="mobile" required lay-verify="required" placeholder="您的手机号码" autocomplete="off" class="layui-input">
            </div>

            <div class="layui-form-item">
                <textarea name="content" lay-verify="required" class="layui-textarea" placeholder="留言内容..."></textarea>
            </div>

            <div class="layui-form-item">
                <button class="layui-btn" lay-submit lay-filter="go" url="<?php echo url('index/feedback'); ?>">提交留言</button>                 
            </div>
        </form>
    </div>

    <div class="clearfix"></div>
</div>

<input type="hidden" id="activeMenu" value="contact" />
<div class="footerBg">
	<div class="footer">
		<li>
			<div class="hd">关于我们</div>
			<div class="bd">
				<a href="<?php echo url('index/about','id=1'); ?>">公司概况</a>
				<a href="<?php echo url('index/about','id=2'); ?>">发展历程</a>
				<a href="<?php echo url('index/about','id=3'); ?>">企业文化</a>
				<a href="<?php echo url('index/honor'); ?>">资质荣誉</a>
			</div>
		</li>
		<li>
			<div class="hd">产品展示</div>
			<div class="bd">
				<a href="<?php echo url('index/product','cid=8'); ?>">高压开关</a>
				<a href="<?php echo url('index/product','cid=9'); ?>">低压开关</a>
				<a href="<?php echo url('index/product','cid=10'); ?>">母线槽</a>
				<a href="<?php echo url('index/product','cid=11'); ?>">YBM9-12箱式变电</a>
			</div>
		</li>
		<li>
			<div class="hd">工程案例</div>
			<div class="bd">
				<a href="<?php echo url('index/project'); ?>">案例展示</a>
				<a href="<?php echo url('index/yjb'); ?>">业绩表</a>
			</div>
		</li>
		<li>
			<div class="hd">新闻中心</div>
			<div class="bd">
				<?php if(is_array($footerNews) || $footerNews instanceof \think\Collection || $footerNews instanceof \think\Paginator): $i = 0; $__LIST__ = $footerNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>" class="layui-elip"><?php echo $vo['title']; ?></a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</li>
		<li>
			<div class="hd">联系我们</div>
			<div class="bd">
				<a href="<?php echo url('index/contact'); ?>">联系方式</a>
				<a href="<?php echo url('index/contact'); ?>">在线留言</a>
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
<script>
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
    new WOW().init();
};
</script>
</body>
</html>