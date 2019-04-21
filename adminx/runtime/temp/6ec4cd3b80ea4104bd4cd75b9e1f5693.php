<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:54:"F:\wwwroot\2018\zhentan/app/www\view\index\search.html";i:1544684330;s:54:"F:\wwwroot\2018\zhentan\app\www\view\public\cssjs.html";i:1544410778;s:55:"F:\wwwroot\2018\zhentan\app\www\view\public\header.html";i:1544683586;s:54:"F:\wwwroot\2018\zhentan\app\www\view\public\right.html";i:1544684510;s:55:"F:\wwwroot\2018\zhentan\app\www\view\public\footer.html";i:1544531662;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $keyword; ?>-<?php echo config('site.name'); ?></title>
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
            <li><a href="<?php echo url('index/news','cid=1'); ?>">服务项目</a></li>
            <li><a href="<?php echo url('index/news','cid=2'); ?>">新闻动态</a></li>
            <li><a href="<?php echo url('index/news','cid=3'); ?>">成功案例</a></li>
            <li><a href="<?php echo url('index/news','cid=4'); ?>">婚姻调查</a></li>
            <li><a href="<?php echo url('index/news','cid=5'); ?>">商务调查</a></li>
            <li><a href="<?php echo url('index/news','cid=6'); ?>">财产调查</a></li>
            <li><a href="<?php echo url('index/about','id=2'); ?>" title="关于真相侦探社">隐私保密</a></li>
            <li><a href="<?php echo url('index/about','id=3'); ?>" title="关于真相侦探社">联系我们</a></li>
        </div>
    </div>
</div>

<div class="guide">
    <div class="main">
        <span class="layui-breadcrumb">
            <a href="<?php echo url('index/index'); ?>">首页</a>
            <a><cite>关键词：<?php echo $keyword; ?></cite></a>
        </span>
    </div>
</div>

<div class="main">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-xs9">
            <div class="layui-card">
                <div class="layui-card-header">关键词：<?php echo $keyword; ?></div>
                <div class="layui-card-body">
                    <div class="newsList">
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <div class="img"><a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><img src="<?php echo (getThumb($vo['picname'],240,170) ?: RES.'/image/noimg.jpg'); ?>" alt="<?php echo $vo['title']; ?>"></a></div>
                            <div class="info">
                                <h1><a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a></h1>
                                <div class="intr"><?php echo $vo['intr']; ?></div>
                                <div class="date">
                                    <span><i class="layui-icon layui-icon-log"></i> <?php echo date("Y-m-d",$vo['createTime']); ?></span>
                                    <span><i class="layui-icon layui-icon-list"></i> <a href="<?php echo url('index/news','cid='.$cate['id']); ?>" title="<?php echo $cate['name']; ?>"><?php echo $cate['name']; ?></a></span>
                                    <span><i class="layui-icon layui-icon-read"></i> <?php echo $vo['hit']; ?></span>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "$empty" ;endif; ?>
                    </div>

                    <?php echo $page; ?>
                </div>
            </div>
        </div>

        <div class="layui-col-xs3">
            <div class="layui-tab layui-tab-card my-card">
    <ul class="layui-tab-title">
        <li class="layui-this">随机</li>
        <li>最新</li>
        <li>热门</li>
    </ul>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <div class="topNews">
                <?php if(is_array($rnd) || $rnd instanceof \think\Collection || $rnd instanceof \think\Paginator): $i = 0; $__LIST__ = $rnd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="layui-elip"><a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="layui-tab-item">
            <div class="topNews">
                <?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="layui-elip"><a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="layui-tab-item">
            <div class="topNews">
                <?php if(is_array($hit) || $hit instanceof \think\Collection || $hit instanceof \think\Paginator): $i = 0; $__LIST__ = $hit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="layui-elip"><a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="layui-card">
    <div class="layui-card-header">
    标签
    </div>
    <div class="layui-card-body">
        <a href="<?php echo url('index/search','keyword=婚外情调查'); ?>"><span class="layui-badge">婚外情调查</span></a>
        <a href="<?php echo url('index/search','keyword=开封婚姻出轨调查'); ?>"><span class="layui-badge layui-bg-orange">开封婚姻出轨调查</span></a>
        <a href="<?php echo url('index/search','keyword=开封外遇取证'); ?>"><span class="layui-badge layui-bg-green">开封外遇取证</span></a>
        <a href="<?php echo url('index/search','keyword=开封私家侦探'); ?>"><span class="layui-badge layui-bg-cyan">开封私家侦探</span></a>
        <a href="<?php echo url('index/search','keyword=开封债务追讨'); ?>"><span class="layui-badge layui-bg-blue">开封债务追讨</span></a>
        <a href="<?php echo url('index/search','keyword=开封寻人寻址'); ?>"><span class="layui-badge layui-bg-badge">开封寻人寻址</span></a>
        <a href="<?php echo url('index/search','keyword=开封商业调查'); ?>"><span class="layui-badge layui-bg-black">开封商业调查</span></a>
        <a href="<?php echo url('index/search','keyword=背景调查咨询'); ?>"><span class="layui-badge layui-bg-gray">背景调查咨询</span></a>
    </div>
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