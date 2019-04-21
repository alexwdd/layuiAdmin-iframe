<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:56:"F:\wwwroot\2018\zhentan/app/adminx\view\login\index.html";i:1533562684;s:51:"F:\wwwroot\2018\zhentan\app\adminx\view\layout.html";i:1542594412;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo config("site.name"); ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta http-equiv ="Pragma" content = "no-cache"/>
	<meta http-equiv="Cache-Control" content="no cache" />
	<meta http-equiv="Expires" content="0" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="format-detection" content="telephone=no"/>
	<link rel="icon" href="data:;base64,=">

	<script src="<?php echo RES; ?>/js/pace.min.js"></script>
	<link href="<?php echo RES; ?>/js/pace-theme-flash.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo RES; ?>/layui/css/layui.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="<?php echo RES; ?>/css/fs.css" media="all"/>
	<script type="text/javascript" src="<?php echo RES; ?>/layui/layui.js"></script>
	<script type="text/javascript" src="<?php echo RES; ?>/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo RES; ?>/frame/js/fsDict.js?v=<?php echo time();?>"></script>
	<script type="text/javascript" src="<?php echo RES; ?>/frame/js/fs.js?v=<?php echo time();?>"></script>
	<script type="text/javascript" src="<?php echo RES; ?>/frame/js/frame.js?v=<?php echo time();?>"></script>
	<script type="text/javascript" src="<?php echo RES; ?>/js/regExp.js?v=1.0.1"></script>
</head>
<body>
	<div class="layui-fluid">
	<div class="layui-col-md12">
	<div class="beg-login-box">
		<header>
			<h1>后台登录</h1>
		</header>
		<div class="beg-login-main">
			<form class="layui-form" method="post">
				<div class="layui-form-item">
					<label class="beg-login-icon">
                        <i class="layui-icon">&#xe612;</i>
                    </label>
					<input type="text" name="username" lay-verify="required" autocomplete="off" placeholder="请输入登录名" class="layui-input">
				</div>
				<div class="layui-form-item">
					<label class="beg-login-icon">
                        <i class="layui-icon">&#xe642;</i>
                    </label>
					<input type="password" name="password" lay-verify="required" autocomplete="off" placeholder="请输入密码" class="layui-input">
				</div>
				<div class="layui-form-item">
					<label class="beg-login-icon">
                        <i class="layui-icon">&#xe64a;</i>
                    </label>
					<input type="text" name="checkcode" id="checkcode" lay-verify="required" autocomplete="off" placeholder="请输入验证码" class="layui-input">
				</div>
				<div class="layui-form-item">
					<div class="beg-pull-left beg-login-remember">
						<img id="verifyImg" SRC="<?php echo url('Login/verify'); ?>" onClick="fleshVerify()" style="cursor:pointer" align="absmiddle" />
					</div>
					<div class="beg-pull-right">
						<button class="layui-btn layui-btn-primary" lay-submit url="<?php echo url('Login/doLogin'); ?>" lay-filter="save">
                        <i class="layui-icon">&#xe650;</i> 登录
                    </button>
					</div>
					<div class="beg-clear"></div>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
$(function(){
	$("html").css("background","#393D49");
	$("body").css("background","#393D49");
})
</script>
	</div>
</body>
</html>