<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"F:\wwwroot\2019\kfht.net/app/adminx\view\article\trash.html";i:1541420558;s:52:"F:\wwwroot\2019\kfht.net\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
	    	<a href="<?php echo url('Article/index'); ?>" class="layui-btn layui-btn-sm">
				<i class="layui-icon">&#xe603;</i> 返回列表
			</a>

			<button class="layui-btn layui-btn-sm" function="submit" method="post" url="<?php echo url("Article/restore"); ?>" isMutiDml="1" isConfirm="1" confirmMsg="是否确定还原选中的数据？" inputs="id:">
			  <i class="layui-icon">&#xe628;</i>还原
			</button>	

			<button class="layui-btn layui-btn-sm" function="refresh">
			  <i class="layui-icon">&#xe669;</i>刷新
			</button>

			<button class="layui-btn layui-btn-sm layui-btn-danger" function="submit" method="post" url="<?php echo url("Article/truedel"); ?>" isMutiDml="1" isConfirm="1" confirmMsg="是否确定删除选中的数据？" inputs="id:">
			  <i class="layui-icon">&#xe640;</i>彻底删除
			</button>
	    </div>

		<div class="layui-col-md12">
	        <table id="fsDatagrid" lay-filter="fsDatagrid" class="fsDatagrid" isLoad="1" url="<?php echo url('Article/trash'); ?>" isPage="1" sortType="1" pageSize="20" defaultForm="query_form" height="full-108"></table>	
	        <div class="fsDatagridCols">
				<p checkbox="true"/>	
				<p field="title" title="标题" width="40%"/>		
				<p title="图片" templet="#imageTpl" width="60"/>	
				<p field="cate" title="分类" width="100"/>	
				<p field="editer" title="作者" width="80"/>	
				<p field="hit" title="浏览量" width="80"/>		
				<p field="sort" title="排序值" width="80"/>
				<p title="属性" width="120" templet="#flagTpl"/>
				<p field="createTime" title="发布日期" width="180" sort="true"/>
				<p field="updateTime" title="更新日期" width="180" sort="true"/>
				<p fixed="right" align="left" toolbar="#barDemo" title="操作" width="80"/>
			</div>

			<script type="text/html" id="imageTpl">
				{{# if(d.picname == ''){ }}
				-
				{{# }else{ }}
				<a href="{{d.picname}}" target="_blank"><i class="layui-icon">&#xe64a;</i></a>
				{{# } }}				
			</script>

			<script type="text/html" id="flagTpl">
				{{# if(d.flash == 1){ }}
				<span style="color:green">幻</span>		
				{{# } }}
				{{# if(d.comm == 1){ }}
				<span style="color:blue">荐</span>		
				{{# } }}
				{{# if(d.top == 1){ }}
				<span style="color:#0099FF">顶</span>		
				{{# } }}
				{{# if(d.bold == 1){ }}
				<span style="color:#black">粗</span>		
				{{# } }}
				{{# if(d.red == 1){ }}
				<span style="color:red">红</span>		
				{{# } }}				
			</script>

			<script type="text/html" id="barDemo">								
 				<a class="layui-btn layui-btn-xs" lay-event="top" topUrl="<?php echo url("Article/edit"); ?>?id={{d.id}}" topWidth="80%" topHeight="80%" topTitle="编辑">编辑</a>
			</script>
	    </div>
	</div>
</div>
	</div>
</body>
</html>