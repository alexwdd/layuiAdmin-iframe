<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:54:"F:\wwwroot\2019\kfht.net/app/www\view\index\index.html";i:1555479863;s:55:"F:\wwwroot\2019\kfht.net\app\www\view\public\cssjs.html";i:1555479545;s:56:"F:\wwwroot\2019\kfht.net\app\www\view\public\header.html";i:1555313358;s:56:"F:\wwwroot\2019\kfht.net\app\www\view\public\footer.html";i:1555480617;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo config('site.name'); ?></title>
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
<div class="indexBanner">
    <div class="layui-carousel" id="banner">
        <div carousel-item>
            <div class="item" style="background-image: url(<?php echo RES; ?>/image/banner1.jpg);"></div>
            <div class="item" style="background-image: url(<?php echo RES; ?>/image/banner2.jpg);"></div>
            <div class="item" style="background: url(<?php echo RES; ?>/image/banner3.jpg);"></div>
        </div>
    </div>
    <script>
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
        elem: '#banner'
        ,width: '100%' //设置容器宽度
        ,height: '500px' //设置容器宽度
        ,arrow: 'always' //始终显示箭头
        ,interval:6000
        //,anim: 'updown' //切换动画方式
        });
    });
    </script>
</div>

<div class="main wow bounceInUp" style="margin-top: -50px">
    <div class="videoBox">
        <div id="video" style="width: 100%; height:320px;max-width:500px;">
        </div>
        <script type="text/javascript" src="/ckplayer/ckplayer.min.js" charset="UTF-8"></script>
        <script type="text/javascript">
            var videoObject = {
                container: '#video',//“#”代表容器的ID，“.”或“”代表容器的class
                variable: 'player',//该属性必需设置，值等于下面的new chplayer()的对象
                flashplayer:false,//如果强制使用flashplayer则设置成true
                video:'/video/01.flv'//视频地址
            };
            var player=new ckplayer(videoObject);
        </script>
    </div>
    <div class="indexContact">
        <li><i class="iconfont icon-dizhi"></i> <?php echo config('site.address'); ?></li>
        <li><i class="iconfont icon-dianhua"></i> <?php echo config('site.tel'); ?></li>
        <li><i class="iconfont icon-qq"></i> <?php echo config('site.qq'); ?></li>
        <li><i class="iconfont icon-guanjiaowangtubiao13"></i> <?php echo config('site.email'); ?></li>
        <li><i class="iconfont icon-chuanzhen"></i> <?php echo config('site.fax'); ?></li>
        <li><i class="iconfont icon-wangzhi"></i> <?php echo config('site.domain'); ?></li>
    </div>

    <div class="clearfix"></div>
</div>

<div class="aboutBox wow fadeIn">
    <div class="main">
        <div class="aboutTitle"><?php echo config('site.name'); ?></div>
        <div class="aboutIntr">开封市华通成套开关有限公司创建于1970年，是原国家电力部、机械工业部定点企业，专门研制核电站控制设备的国家大中型骨干企业，是为大型发电厂、变电所、城乡电网、石油、化工、钢铁铁路及大型建筑提供无污染成套电器开关设备的制造厂家，获有国家高、低压开关柜生产许可证。现为国家经贸委城乡电网...</div>
        <div class="more"><a href="<?php echo url('index/about'); ?>">了解更多</a></div>
    </div>
</div>

<div class="main wow bounceInUp" style="margin-top: -50px">
    <div class="indexCate">
        <li><div class="item p1"><a href="<?php echo url('index/product','cid=8'); ?>"><span>01</span><p>高压开关</p></a></div></li>
        <li><div class="item p2"><a href="<?php echo url('index/product','cid=9'); ?>"><span>02</span><p>低压开关</p></a></div></li>
        <li><div class="item p3"><a href="<?php echo url('index/product','cid=10'); ?>"><span>03</span><p>母线槽</p></a></div></li>
        <li><div class="item p4"><a href="<?php echo url('index/product','cid=11'); ?>"><span>04</span><p>YBM9-12箱式变电</p></a></div></li>
    </div>

    <div class="indexProduct">
        <?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li><div class="item"><a href="<?php echo url('index/info','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><img src="<?php echo $vo['picname']; ?>" alt="<?php echo $vo['title']; ?>"><p><?php echo $vo['title']; ?></p></a></div></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    <div class="more more1" style="margin-bottom: 50px"><a href="<?php echo url('index/product'); ?>">更多产品</a></div>
</div>

<div class="orgBox">
    <div class="main">
        <div class="hd">六大优势让华通成为您的最佳选择</div>
        <div class="orgLeft wow bounceInLeft">
            <li>
                <p>1、国家规划布局内定点企业</p>
                <span>原国家电力部、机械工业部定点企业，专门研制核电站控制设备的国家大中型骨干企业，国家经贸委城乡电网建设与改造推荐厂家之一。</span>
            </li>
            <li style="margin-top: 130px">
                <p>3、河南省首批获得3C认证证书的厂家</p>
                <span>企业设有专门科研机构，引进了许多国外先进科研设备，并建立了现代科技发展和高度竞争的管理体系，严格的标准化体系和可靠的质量保证体系。</span>
            </li>
            <li style="margin-top: 130px">
                <p>5、持续优化、不断进取、锐意创新</p>
                <span>华通人以势不可挡的铁骨雄风傲然崛起，不断推出新技术、新产品，以满足国内外客户的需求，为电力、港口、铁路、矿山、能源、航天、电子以及机械制造领域研制了成套电气设备。</span>
            </li>
        </div>
        <div class="orgLine">
            <div class="dot"></div>
            <div class="line"></div>
            <div class="dot"></div>
            <div class="line"></div>
            <div class="dot"></div>
            <div class="line"></div>
            <div class="dot"></div>
            <div class="line"></div>
            <div class="dot"></div>
            <div class="line"></div>
            <div class="dot"></div>
        </div>
        <div class="orgRight wow bounceInRight">
            <li style="margin-top: 100px">
                <p>2、团队合作的、训练有素的专业人才队伍​​​​</p>
                <span>公司经过数十年的发展，有着丰富的制造经验，已形成为技术力量雄厚，生产、检测设备先进齐全，生产规模庞大的龙头制造企业。</span>
            </li>
            <li style="margin-top: 130px">
                <p>4、长期坚持客户第一积累的客户满意度和品牌形象</p>
                <span>公司重合同、讲信誉，连年被上级政府评为“重点保护企业”、“明星企业”；荣获“全国电器行业质量放心、国家标准合格产品”荣誉证书。</span>
            </li>
            <li style="margin-top: 130px">
                <p>6、高效的管理机制和以人为本的人才策略</p>
                <span>公司拥有一批经验丰富，从事多年高低压电器成套设备研究、设计及制造的工程技术员，大中专毕业生占职工总数的50%以上。</span>
            </li>
        </div>
    </div>
</div>

<div class="main wow bounceInUp">
    <div class="indexTitle">新闻中心</div>

    <div class="indexNews">
        <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li><div class="item"><a href="<?php echo url('index/detail','id='.$vo['id']); ?>" title="<?php echo $vo['title']; ?>"><img src="<?php echo (getThumb($vo['picname'],240,170) ?: RES.'/image/noimg.jpg'); ?>"><p><?php echo $vo['title']; ?></p><span><?php echo $vo['intr']; ?></span></a></div></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    <div class="more more1"><a href="<?php echo url('index/news'); ?>">更多新闻</a></div>
</div>

<input type="hidden" id="activeMenu" value="home" />
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