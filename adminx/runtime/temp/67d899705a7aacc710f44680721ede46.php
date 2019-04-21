<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:53:"F:\wwwroot\2018\zhentan/app/www\view\index\index.html";i:1544753155;s:54:"F:\wwwroot\2018\zhentan\app\www\view\public\cssjs.html";i:1544410778;s:55:"F:\wwwroot\2018\zhentan\app\www\view\public\header.html";i:1544752543;s:55:"F:\wwwroot\2018\zhentan\app\www\view\public\footer.html";i:1544685286;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo config('site.name'); ?></title>
<meta name="keywords" content="<?php echo config('site.keyword'); ?>">
<meta name="description" content="<?php echo config('site.content'); ?>">
<link href="<?php echo RES; ?>/layui/css/layui.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES; ?>/css/comm.css?v=1.00" rel="stylesheet" type="text/css" />
<link href="<?php echo RES; ?>/css/app.css?v=1.00" rel="stylesheet" type="text/css" />

<script src="<?php echo RES; ?>/js/jquery.min.js" type="text/javascript" ></script>
<script src="<?php echo RES; ?>/layui/layui.js" type="text/javascript" ></script>
<script src="<?php echo RES; ?>/js/public.js" type="text/javascript" ></script>
</head>
<script type="text/javascript">
$(function(){
    if (!IsPC()){
        window.location.href = 'http://www.kfzhentan.com/www/mobile';
    }
})
function IsPC() {
   var userAgentInfo = navigator.userAgent;
   var Agents = ["Android", "iPhone",
      "SymbianOS", "Windows Phone",
      "iPad", "iPod"];
   var flag = true;
   for (var v = 0; v < Agents.length; v++) {
      if (userAgentInfo.indexOf(Agents[v]) > 0) {
         flag = false;
         break;
      }
   }
   return flag;
}
</script>
<body>
<div class="topBar">
    <div class="welcome">欢迎访问<a href="http://www.kfzhentan.com">开封真相侦探社</a></div>
    <div class="topTel">
        一条龙私家侦探服务，帮助客户排忧解难！服务热线：<?php echo config('site.tel'); ?>
    </div>
</div>

<div class="header">
    <div class="main">    
        <div class="logo"><a href="http://www.kfzhentan.com" title="开封真相侦探社"><img src="<?php echo RES; ?>/image/logo.jpg" alt="开封私家侦探" /></a></div>

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
<div class="main">
	<div class="focus">
        <div class="layui-carousel" id="banner">
            <div carousel-item>
                <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div><img src="<?php echo $vo['picname']; ?>" alt="<?php echo $vo['name']; ?>" /></div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>   
    </div>
    <script>
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
        elem: '#banner'
        ,width: '100%' //设置容器宽度
        ,height: '300px' //设置容器宽度
        ,arrow: 'always' //始终显示箭头
        //,anim: 'updown' //切换动画方式
        });
    });
    </script>

    <div class="layui-row layui-col-space10 mt20">
        <div class="layui-col-xs6">
            <div class="layui-card">
                <div class="layui-card-header">
                公司简介
                <span class="more"><a href="<?php echo url('index/about','cid=1'); ?>">更多</a></span>
                </div>
                <div class="layui-card-body">
                    <div class="about">
                        <img src="<?php echo RES; ?>/image/about.jpg">开封真相侦探社是一家专业的开封私家侦探公司。专业从事开封婚姻调查，开封外遇调查，开封找人等业务。本公司本着“诚信、专业、保密”的原则，为个人和公司解决发展中的实际问题。，经十五年运作已承办案件累计上万个，提供开封外遇取证，开封婚姻出轨调查等服务。为挽救您婚姻或在做最后打算离婚时最大限度维护维护您的合法权益，非常有必要对您的另一半做一个详尽的婚姻调查肯定他（她）能否曾经有了婚外情或者是外遇，为捍卫婚姻中自我的权益而效劳下列若干项目：对第三者（小三、情人、二奶等）插足的信息作调查、摆脱不幸福婚姻的方案及辅佐实施、婚外爱情调查取证、专业权威律师法律咨询效劳、婚姻家庭财富下落取证。
                    </div>
                </div>
            </div>
        </div>

        <div class="layui-col-xs6">
            <div class="layui-card">
                <div class="layui-card-header">
                新闻动态
                <span class="more"><a href="<?php echo url('index/news','cid=2'); ?>">更多</a></span>
                </div>
                <div class="layui-card-body">
                    <div class="topNews indexNews">
                        <?php if(is_array($news2) || $news2 instanceof \think\Collection || $news2 instanceof \think\Paginator): $i = 0; $__LIST__ = $news2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="layui-elip"><a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><i class="layui-icon layui-icon-triangle-r"></i><?php echo $vo['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="layui-row mt10">
		<div class="layui-col-xs12">
			<div class="layui-card">
                <div class="layui-card-header">
                服务项目
                <span class="more"><a href="<?php echo url('index/news','cid=1'); ?>">更多</a></span>
            	</div>
                <div class="layui-card-body">
                    <div class="layui-row layui-col-space10">
                        <?php if(is_array($news1) || $news1 instanceof \think\Collection || $news1 instanceof \think\Paginator): $i = 0; $__LIST__ = $news1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="layui-col-xs2">
                            <a href="<?php echo url('index/detail','id='.$vo['id']); ?>" class="imgLink" title="<?php echo $vo['title']; ?>">
                                <img src="<?php echo (getThumb($vo['picname'],240,170) ?: RES.'/image/noimg.jpg'); ?>" alt="<?php echo $vo['title']; ?>">
                                <p class="layui-elip"><?php echo $vo['title']; ?></p>
                            </a>
                        </div>                      
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
		</div>
	</div>

	<div class="layui-row layui-col-space10 mt10">
		<div class="layui-col-xs12">
			<div class="layui-card">
                <div class="layui-card-header">
                成功案例
                <span class="more"><a href="<?php echo url('index/news','cid=3'); ?>">更多</a></span>
            	</div>
                <div class="layui-card-body">
                    <div class="layui-row layui-col-space10">
                        <?php if(is_array($news3) || $news3 instanceof \think\Collection || $news3 instanceof \think\Paginator): $i = 0; $__LIST__ = $news3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="layui-col-xs2">
                            <a href="<?php echo url('index/detail','id='.$vo['id']); ?>" class="imgLink" title="<?php echo $vo['title']; ?>">
                                <img src="<?php echo (getThumb($vo['picname'],240,170) ?: RES.'/image/noimg.jpg'); ?>" alt="<?php echo $vo['title']; ?>">
                                <p class="layui-elip"><?php echo $vo['title']; ?></p>
                            </a>
                        </div>                      
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
		</div>
	</div>

	<div class="layui-row layui-col-space10 mt10">
		<div class="layui-col-xs4">
			<div class="layui-card">
                <div class="layui-card-header">
                婚姻调查
                <span class="more"><a href="<?php echo url('index/news','cid=4'); ?>" title="开封婚姻调查">更多</a></span>
            	</div>
                <div class="layui-card-body">
                    <div class="topNews">
                        <?php if(is_array($news4) || $news4 instanceof \think\Collection || $news4 instanceof \think\Paginator): $i = 0; $__LIST__ = $news4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="layui-elip"><a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><i class="layui-icon layui-icon-triangle-r"></i><?php echo $vo['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
		</div>

		<div class="layui-col-xs4">
			<div class="layui-card">
                <div class="layui-card-header">
                商务调查
                <span class="more"><a href="<?php echo url('index/news','cid=5'); ?>" title="开封商务调查">更多</a></span>
                </div>
                <div class="layui-card-body">
                    <div class="topNews">
                        <?php if(is_array($news5) || $news5 instanceof \think\Collection || $news5 instanceof \think\Paginator): $i = 0; $__LIST__ = $news5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="layui-elip"><a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><i class="layui-icon layui-icon-triangle-r"></i><?php echo $vo['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
		</div>

		<div class="layui-col-xs4">
			<div class="layui-card">
                <div class="layui-card-header">
                财产调查
                <span class="more"><a href="<?php echo url('index/news','cid=6'); ?>" title="开封财产调查">更多</a></span>
                </div>
                <div class="layui-card-body">
                    <div class="topNews">
                        <?php if(is_array($news6) || $news6 instanceof \think\Collection || $news6 instanceof \think\Paginator): $i = 0; $__LIST__ = $news6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="layui-elip"><a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><i class="layui-icon layui-icon-triangle-r"></i><?php echo $vo['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
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

<div class="kefuBox">
	<div class="kefu" id="kefu">
		<img src="<?php echo RES; ?>/image/icon4.png">
		<span><img src="<?php echo config('site.logo'); ?>"></span>
	</div>
</div>
<script type="text/javascript">
$(function () {
    $("#kefu").hover(function(){
    	$(this).find("span").stop().fadeIn(10).animate({top:0},200);
    },function(){
    	$(this).find("span").stop().animate({top:20},200).fadeOut(10);
    });
});
</script>
</body>
</html>