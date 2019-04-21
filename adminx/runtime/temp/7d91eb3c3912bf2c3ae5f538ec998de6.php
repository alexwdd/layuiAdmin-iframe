<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"F:\wwwroot\2019\kfht.net/app/adminx\view\onepage\index.html";i:1541420560;s:52:"F:\wwwroot\2019\kfht.net\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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

<div class="layui-col-md12">
	<div class="layui-row grid-demo">
	    <div class="layui-col-md12">
        	<button class="layui-btn layui-btn-sm" function="top" topUrl="<?php echo url('Onepage/add'); ?>" topWidth="80%" isMaximize="0" topHeight="80%" topTitle="新增">
			  <i class="layui-icon">&#xe654;</i>新增
			</button>
			<button class="layui-btn layui-btn-sm layui-btn-danger" function="submit" method="post" url="<?php echo url("Onepage/del"); ?>" isMutiDml="1" isConfirm="1" confirmMsg="是否确定删除选中的数据？" inputs="id:">
			  <i class="layui-icon">&#xe640;</i>批量删除
			</button>
			<button class="layui-btn layui-btn-sm" function="refresh">
			  <i class="layui-icon">&#xe669;</i>刷新
			</button>
	    </div>


		<div class="layui-col-md12">
	        <table id="fsDatagrid" lay-filter="fsDatagrid" class="fsDatagrid" isLoad="1" url="<?php echo url('Onepage/index'); ?>" isPage="1" sortType="1" pageSize="20" defaultForm="query_form" height="full-60"></table>

	        <div class="fsDatagridCols">
				<p checkbox="true"/>				
				<p field="id" title="ID" width="80"/>
				<p field="title" title="名称" width="300"/>
				<p field="createTime" title="添加日期" width="180"/>
				<p field="updateTime" title="更新日期" width="180"/>
				<p fixed="right" align="center" toolbar="#barDemo" title="操作" width="80"/>
			</div>

			<script type="text/html" id="barDemo">
 				<a class="layui-btn layui-btn-xs" lay-event="top" topUrl="<?php echo url("Onepage/edit"); ?>?id={{d.id}}" topWidth="80%" topHeight="80%" topTitle="编辑">编辑</a>
			</script>
	    </div>
	</div>
</div>
	</div>
</body>
</html>