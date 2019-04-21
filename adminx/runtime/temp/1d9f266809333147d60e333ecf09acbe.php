<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"F:\wwwroot\2019\kfht.net/app/adminx\view\article\add.html";i:1527337442;s:52:"F:\wwwroot\2019\kfht.net\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
		<label class="layui-form-label">标题</label>
		<div class="layui-input-block">
			<input type="text" name="title" lay-verify="required" placeholder="请输入标题" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">短标题</label>
		<div class="layui-input-block">
			<input type="text" name="short" placeholder="短标题" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">分类</label>
		<div class="layui-input-inline">
			<select name="cid" id="cid" lay-verify="required">
	    	<option value="">==请选择==</option>
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
		<label class="layui-form-label">站外链接</label>
		<div class="layui-input-block">
			<input type="text" name="url" lay-verify="_url" class="layui-input">
		</div>
	</div>	

	<div class="layui-form-item">
		<label class="layui-form-label">缩略图</label>
		<div class="layui-inline">
			<img class="thumb" id="picname_src" src="<?php echo RES; ?>/image/image.jpg" />
			<input type="hidden" name="picname" id="picname" />	
		</div>
		<div class="layui-inline">
			<button type="button"  class="layui-btn" function="upload" fileElem="#picname" srcElem="#picname_src" fileAccept="images" fileExts="jpg|png|gif|jpeg" fileSize="5120" inputs="type:test">上传图片</button>

			<input type="button" value="删除" class="layui-btn layui-btn-small" onclick="delImage('picname')"/>
		</div>
		<div class="layui-inline">
			<input type="checkbox" lay-skin="primary" name="exp" id="exp" value="1" title="以正文第一张为缩略图">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">属性</label>
		<div class="layui-input-block">
			<input type="checkbox" name="flash" id="flash" value="1" title="幻灯">
			<input type="checkbox" name="comm" value="1" title="推荐">
			<input type="checkbox" name="top" value="1" title="置顶">
			<input type="checkbox" name="bold" value="1" title="加粗">
			<input type="checkbox" name="red" value="1" title="套红">
		</div>
	</div>

	<div class="layui-form-item">
		<div class="layui-inline">
			<label class="layui-form-label">发布日期</label>
			<div class="layui-input-inline">
				<input type="text" name="createTime" value="<?php echo $date; ?>" lay-verify="date" placeholder="yyyy-mm-dd" autocomplete="off" class="layui-input" />
			</div>
		</div>
		<div class="layui-inline">
			<label class="layui-form-label">来源</label>
			<div class="layui-input-block">
				<input type="text" name="from" value="<?php echo config('site.name'); ?>" autocomplete="off" class="layui-input" />
			</div>
		</div>
		<div class="layui-inline">
			<label class="layui-form-label">作者</label>
			<div class="layui-input-block">
				<input type="text" name="author" class="layui-input" lay-verify="required" value="<?php echo $admin['username']; ?>" />
			</div>
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">关键词</label>
		<div class="layui-input-block">
			<input type="text" name="keyword" class="layui-input">
		</div>
	</div>	

	<div class="layui-form-item">
		<label class="layui-form-label">排序</label>
		<div class="layui-input-block">
			<input type="text" name="sort" id="sort" value="0" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">描述</label>
		<div class="layui-input-block">
			<textarea name="intr" class="layui-textarea"></textarea>
		</div>
	</div>

	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">正文</label>
		<div class="layui-input-block">
			<textarea name="content" id="container" lay-verify="content">文章正文</textarea>
			<script type="text/javascript" src="<?php echo config('UE_CONFIG.uedir'); ?>/my.config.js"></script>
			<script type="text/javascript" src="<?php echo config('UE_CONFIG.uedir'); ?>/ueditor.all.min.js"></script>
			<script type="text/javascript" src="<?php echo config('UE_CONFIG.uedir'); ?>/lang/zh-cn/zh-cn.js"></script>
			<script type="text/javascript">
			var editor = UE.getEditor('container');
			</script>
		</div>
	</div>

	<hr>

	<div class="layui-form-item">
		<label class="layui-form-label"></label>
	    <button id="subBtn" class="layui-btn" lay-submit="" lay-filter="save" url="<?php echo url('Article/add'); ?>">新增</button>

	    <button type="button" class="layui-btn layui-btn-primary" id="tempBtn">保存为草稿</button>

	    <button type="button" class="layui-btn layui-btn-primary" function="close">关闭</button>
	</div>
	<input type="hidden" name="status" id="status" value="1">
</form>
<script src="<?php echo RES; ?>/js/upload.js"></script>
<script>
$(function(){
	$("#tempBtn").click(function(){
		$("#status").val("0");
		$("#subBtn").click();
	});
})
</script>
	</div>
</body>
</html>