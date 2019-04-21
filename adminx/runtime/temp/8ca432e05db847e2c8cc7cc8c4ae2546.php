<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"F:\wwwroot\2019\kfht.net/app/adminx\view\category\add.html";i:1540640682;s:52:"F:\wwwroot\2019\kfht.net\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
	<form class="layui-form">
	<div class="layui-form-item">
		<label class="layui-form-label">父栏目</label>
		<div class="layui-input-block">
			<select name="fid" id="fid" default="<?php echo $fid; ?>,<?php echo $path; ?>" lay-filter="fid" lay-verify="required">
			<option value=",">根栏目</option>
	        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	        <option value="<?php echo $vo['id']; ?>,<?php echo $vo['path']; ?>"><?php 
	            for($i=0; $i<$vo['count']*2; $i++){
	               echo '&nbsp;&nbsp;';            
	            }
	         ?><?php echo $vo['name']; ?></option>
	        <?php endforeach; endif; else: echo "" ;endif; ?>
	        </select>
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">名称</label>
		<div class="layui-input-block">
			<input type="text" name="name" lay-verify="required" class="layui-input" placeholder="必填">
		</div>
	</div>		
	
	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">外链</label>
		<div class="layui-input-block">
			<input type="text" name="url" class="layui-input" lay-verify="_url">
		</div>
	</div>

	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">图片地址</label>
		<div class="layui-input-inline" style="width:400px">
			<input type="text" id="picname" name="picname" class="layui-input">
		</div>
		<div class="layui-inline">
			<button type="button"  class="layui-btn" function="upload" fileElem="#picname" srcElem="#picname_src" fileAccept="images" fileExts="jpg|png|gif|jpeg" fileSize="5120" inputs="type:test">上传图片</button>
		</div>
	</div>

	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">排序</label>
		<div class="layui-input-block">
			<input type="text" name="sort" class="layui-input" value="50" placeholder="必填" lay-verify="number">
		</div>
	</div>

	<hr/>

	<div class="layui-form-item">
		<label class="layui-form-label"></label>
	    <button class="layui-btn" lay-submit="" lay-filter="save" url="<?php echo url('Category/add'); ?>">新增</button>
	    <button type="button" class="layui-btn layui-btn-primary" function="close">关闭</button>
	</div>
	<input type="hidden" name="model" value="<?php echo $mid; ?>">
</form>
	</div>
</body>
</html>