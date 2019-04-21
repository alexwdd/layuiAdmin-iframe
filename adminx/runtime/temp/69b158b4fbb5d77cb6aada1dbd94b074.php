<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"F:\wwwroot\2019\kfht.net/app/adminx\view\feedback\index.html";i:1555481417;s:52:"F:\wwwroot\2019\kfht.net\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
	<div class="layui-row grid-demo">
	
	    <div class="layui-col-md12">

			<button class="layui-btn layui-btn-sm layui-btn-danger" function="submit" method="post" url="<?php echo url("Feedback/del"); ?>" isMutiDml="1" isConfirm="1" confirmMsg="是否确定删除选中的数据？" inputs="id:">
			  <i class="layui-icon">&#xe640;</i>批量删除
			</button>

			<button class="layui-btn layui-btn-sm" function="refresh">
			  <i class="layui-icon">&#xe669;</i>刷新
			</button>


			<button class="layui-btn layui-btn-sm" type="button" function="query"><i class="layui-icon">&#xe615;</i>查询</button>
	    </div>

		<div class="layui-col-md12">
	        <table id="fsDatagrid" lay-filter="fsDatagrid" class="fsDatagrid" isLoad="1" url="<?php echo url('Feedback/index'); ?>" isPage="1" sortType="1" pageSize="20" defaultForm="query_form" height="full-108"></table>	
	        <div class="fsDatagridCols">
				<p checkbox="true"/>	
				<p field="name" title="姓名" width="150"/>	
				<p field="mobile" title="电话" width="150"/>	
				<p field="content" title="留言" width="50%"/>	
				<p field="createTime" title="发布日期" sort="true" width="200"/>
			</div>
	    </div>
	</div>
</div>
<script>
layui.use('table', function(){
	form = layui.form; 
	//监听性别操作
	form.on('switch(status)', function(obj){
		url = '<?php echo url('Feedback/status'); ?>';
		var id = this.value;
		var v = 0
		if (obj.elem.checked){
			v = 1;
		} 
		$.post(url, {id: this.value,field:"status",val:v}, function (data) {console.log(data);}, "json");
	});
});
</script>
	</div>
</body>
</html>