<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"F:\wwwroot\2018\zhentan/app/adminx\view\onepage\edit.html";i:1527337442;s:51:"F:\wwwroot\2018\zhentan\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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

<form class="layui-form" id="edit_form" isLoad="1" method="post">
	<div class="layui-form-item">
	    <label class="layui-form-label">标题</label>
	    <div class="layui-input-block">
	    	<input type="text" name="title" value="<?php echo $list['title']; ?>" lay-verType="tips" lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input"/>
	    </div>
	</div>

	<div class="layui-form-item">
	    <label class="layui-form-label">关键词</label>
	    <div class="layui-input-block">
	    	<input type="text" name="keyword" value="<?php echo $list['keyword']; ?>" lay-verType="tips" autocomplete="off" class="layui-input"/>
	    </div>
	</div>

	<div class="layui-form-item">
	    <label class="layui-form-label">描述</label>
	    <div class="layui-input-block">
	    	<input type="text" name="description" value="<?php echo $list['description']; ?>" lay-verType="tips" autocomplete="off" class="layui-input"/>
	    </div>
	</div>

	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">正文</label>
		<div class="layui-input-block">
			<textarea name="content" id="container" lay-verify="required"><?php echo $list['content']; ?></textarea>
			<script type="text/javascript" src="<?php echo config('UE_CONFIG.uedir'); ?>/my.config.js"></script>
			<script type="text/javascript" src="<?php echo config('UE_CONFIG.uedir'); ?>/ueditor.all.min.js"></script>
			<script type="text/javascript" src="<?php echo config('UE_CONFIG.uedir'); ?>/lang/zh-cn/zh-cn.js"></script>
			<script type="text/javascript">
			var editor = UE.getEditor('container');
			</script>
		</div>
	</div>
	<hr/>
	<div class="layui-form-item">
		<label class="layui-form-label"></label>
	    <button class="layui-btn" lay-submit="" lay-filter="save" url="<?php echo url('Onepage/edit'); ?>">编辑</button>
	    <button type="button" class="layui-btn layui-btn-primary" function="close">关闭</button>
	</div>
	<input type="hidden" name="id" value="<?php echo $list['id']; ?>" />
</form>

	</div>
</body>
</html>