<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"F:\wwwroot\2019\kfht.net/app/adminx\view\user\password.html";i:1527337442;s:52:"F:\wwwroot\2019\kfht.net\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
	<layout name='layout' />
<form class="layui-form">		
	<div class="layui-form-item">
		<label class="layui-form-label">原始密码</label>
		<div class="layui-input-inline">
			<input type="password" name="oldpwd" lay-verify="required" class="layui-input" placeholder="必填">
		</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label">新密码</label>
		<div class="layui-input-inline">
			<input type="password" name="password" id="password" lay-verify="__password" class="layui-input" placeholder="必填">
		</div>
	</div>	
	<div class="layui-form-item">
		<label class="layui-form-label">重复密码</label>
		<div class="layui-input-inline">
			<input type="password" name="repassword" lay-verify="__repassword" class="layui-input" placeholder="必填">
		</div>
	</div>		

	<input type="hidden" name="dosubmit">
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit="" lay-filter="edit" method="post" url="<?php echo url('User/password'); ?>"><i class="layui-icon">&#xe642;</i>提交</button>
		</div>
	</div>
</form>

	</div>
</body>
</html>