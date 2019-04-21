<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:53:"F:\wwwroot\2019\kfht.net/app/www\view\index\info.html";i:1555466011;s:55:"F:\wwwroot\2019\kfht.net\app\www\view\public\cssjs.html";i:1555314977;s:56:"F:\wwwroot\2019\kfht.net\app\www\view\public\header.html";i:1555313358;s:56:"F:\wwwroot\2019\kfht.net\app\www\view\public\footer.html";i:1555311987;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $list['title']; ?>-产品展示-<?php echo config('site.name'); ?></title>
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

<div class="inBanner in6">
    <div class="inHeader">
        <div class="pageName">产品展示</div>
        <div class="inMenu">
            <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li <?php if($list['cid'] == $vo['id']): ?>class="active"<?php endif; ?>><a href="<?php echo url('index/product','cid='.$vo['id']); ?>"><?php echo $vo['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>    
</div>

<div class="guide">
    <div class="main">
        <span class="layui-breadcrumb">
            <a href="/">首页</a>
            <a href="<?php echo url('index/product'); ?>">产品中心</a>
            <a><cite><?php echo $list['title']; ?></cite></a>
        </span>
    </div>
</div>

<div class="main">
    <div class="newsInfo">
        <h1><?php echo $list['title']; ?></h1>
        <div class="date">
            <span>时间：<?php echo date("Y-m-d",$list['createTime']); ?></span>
            <span>阅读：<?php echo $list['hit']; ?></span>
        </div>
        <?php if(!(empty($list['picname']) || (($list['picname'] instanceof \think\Collection || $list['picname'] instanceof \think\Paginator ) && $list['picname']->isEmpty()))): ?>
        <div class="proImg"><img src="<?php echo $list['picname']; ?>" alt="<?php echo $list['title']; ?>"></div>
        <?php endif; ?>
        <div class="newsContent"><?php echo htmlspecialchars_decode($list['content']); ?></div>
        <div class="share">
            <div class="bdsharebuttonbox">
                <a href="#" class="bds_more" data-cmd="more"></a>
                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
            </div>                
        </div>
        <script>
        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
        </script>

        <div class="topNews">
            <div class="hd">相关产品</div>
            <?php if(is_array($about) || $about instanceof \think\Collection || $about instanceof \think\Paginator): $i = 0; $__LIST__ = $about;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="layui-elip"><a href="<?php echo url('index/info','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><i class="layui-icon layui-icon-triangle-r"></i><?php echo $vo['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>

<input type="hidden" id="activeMenu" value="product" />
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