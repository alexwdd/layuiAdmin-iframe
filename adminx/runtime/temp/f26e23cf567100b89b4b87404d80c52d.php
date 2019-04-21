<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:54:"F:\wwwroot\2018\zhentan/app/www\view\mobile\index.html";i:1544685853;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php echo config('site.name'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo RES; ?>/mui/css/mui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo RES; ?>/css/mobile.css" />
<script src="<?php echo RES; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES; ?>/mui/js/mui.min.js" charset="utf-8"></script>
</head>
<body>

<nav class="mui-bar mui-bar-tab">
    <a href="tel:<?php echo config('site.tel'); ?>" class="mui-tab-item">
        <span class="mui-icon mui-icon-phone"></span>
        <span class="mui-tab-label">电话咨询</span>
    </a>

    <a href="#about" class="mui-tab-item">
        <span class="mui-icon mui-icon-person"></span>
        <span class="mui-tab-label">关于我们</span>
    </a>

    <a href="#contact" class="mui-tab-item">
        <span class="mui-icon mui-icon-paperplane"></span>
        <span class="mui-tab-label">联系方式</span>
    </a>
</nav>

<div class="mui-content">
    <div class="logo"><img src="<?php echo RES; ?>/image/wapLogo.png"></div>
    <div class="menu">
        <li><a href="#about">公司简介</a></li>
        <li><a href="#server">服务项目</a></li>
        <li><a href="#yinsi">隐私保护</a></li>
        <li><a href="#contact">联系我们</a></li>
    </div>

    <div class="mui-slider">
        <div class="mui-slider-group mui-slider-loop">
            <div class="mui-slider-item">
            <img src="<?php echo RES; ?>/image/banner3.jpg" style="display:block">
            </div>
            <div class="mui-slider-item">
            <img src="<?php echo RES; ?>/image/banner1.jpg" style="display:block">
            </div>
            <div class="mui-slider-item">
            <img src="<?php echo RES; ?>/image/banner2.jpg" style="display:block">
            </div>
            <div class="mui-slider-item">
            <img src="<?php echo RES; ?>/image/banner3.jpg" style="display:block">
            </div>
            <div class="mui-slider-item">
            <img src="<?php echo RES; ?>/image/banner1.jpg" style="display:block">
            </div>
        </div>
        
        <div class="mui-slider-indicator">
            <div class='mui-indicator'></div>
            <div class='mui-indicator'></div>
            <div class='mui-indicator'></div>
        </div>
    </div>

    <div class="title" id="about">
        <img src="<?php echo RES; ?>/image/title.png">
        <p>公司简介</p>
    </div>
    <div class="about"><?php echo htmlspecialchars_decode($about['content']); ?></div>

    <div class="title" id="server">
        <img src="<?php echo RES; ?>/image/title.png">
        <p>服务项目</p>
    </div>
    
    <div class="img">
        <?php if(is_array($news1) || $news1 instanceof \think\Collection || $news1 instanceof \think\Paginator): $i = 0; $__LIST__ = $news1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li><img src="<?php echo (getThumb($vo['picname'],240,170) ?: RES.'/image/noimg.jpg'); ?>"><p><?php echo $vo['title']; ?></p></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    <div class="title" id="yinsi">
        <img src="<?php echo RES; ?>/image/title.png">
        <p>隐私保护</p>
    </div>
    <div class="about"><?php echo htmlspecialchars_decode($yinsi['content']); ?></div>

    <div class="title" id="contact">
        <img src="<?php echo RES; ?>/image/title.png">
        <p>联系我们</p>
    </div>
    <div class="contact">
        <img src="<?php echo config('site.logo'); ?>" />
        <p>识别二维码联系我们</p>
        <li>联系人：<?php echo config('site.linkman'); ?></li>
        <li>联系电话：<?php echo config('site.tel'); ?></li>
    </div>
</div>
<script>
mui.ready(function(){
    mui('.mui-bar-tab').on('tap','a',function(){
        document.location.href=this.href;}
    );
})
</script>
</body>
</html>