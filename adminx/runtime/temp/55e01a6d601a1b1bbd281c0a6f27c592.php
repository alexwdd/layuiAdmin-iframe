<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"F:\wwwroot\2019\kfht.net/app/adminx\view\category\index.html";i:1555307930;s:52:"F:\wwwroot\2019\kfht.net\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
	<fieldset class="layui-elem-field">
		<legend>分类管理</legend>
		<div class="layui-field-box">
			<div class="layui-col-md12">
		    	<?php $model=config("TABLE_MODEL"); if(is_array($model) || $model instanceof \think\Collection || $model instanceof \think\Paginator): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['show'] == '1'): ?>
				<a href="<?php echo url('Category/index',array('mid'=>$vo['id'])); ?>" class="layui-btn layui-btn-sm <?php if($mid!=$vo['id']){echo 'layui-btn-primary';} ?>"><?php echo $vo['name']; ?></a>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>

				<button class="layui-btn layui-btn-sm layui-btn-normal" function="top" topUrl="<?php echo url('Category/add',array('mid'=>$mid)); ?>" topWidth="80%" isMaximize="0" topHeight="80%" topTitle="添加根栏目">
				  <i class="layui-icon">&#xe654;</i>添加根栏目
				</button>
		    </div>
			
			<div class="layui-col-md12">
		        <table id="fsDatagrid" lay-filter="fsDatagrid" class="fsDatagrid" isLoad="1" url="<?php echo url('Category/index',array('mid'=>$mid)); ?>" isPage="0" defaultForm="query_form" height="full-108"></table>

		        <div class="fsDatagridCols">
					<p checkbox="true"/>	
					<p field="id" title="ID" width="50"/>
					<p field="name" title="名称" width="150" templet="#nameTpl"/>
					<p field="picname" title="LOGO" width="150" templet="#picname"/>
					<p field="path" title="path" width="200"/>
					<p field="url" title="链接" width="200"/>
					<p field="sort" title="排序" width="150"/>
					<p fixed="right" align="center" toolbar="#barDemo" title="操作" width="160"/>
				</div>
				

				<script type="text/html" id="picname">
				{{# if(d.picname!=""){ }}
				<img src="{{d.picname}}" style="height:30px;"/>
				{{# } }}
				</script>

				<script type="text/html" id="nameTpl">
				{{# if(d.fid==0){ }}
				<strong style="color:#000">{{d.name}}</strong>
				{{# }else{ }}
				<span {{d.style}}>{{d.name}}</span>
				{{# } }}
				</script>

				<script type="text/html" id="barDemo">
					<a class="layui-btn layui-btn-xs" lay-event="top" topUrl="<?php echo url('Category/add' , array('mid'=>$mid)); ?>" topWidth="80%" topHeight="80%" inputs="id:,path:">添加</a>

	 				<a class="layui-btn layui-btn-xs" lay-event="top" topUrl="<?php echo url("Category/edit"); ?>?id={{d.id}}" topWidth="80%" topHeight="80%" topTitle="编辑">编辑</a>
	 				<a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="submit" url="<?php echo url('Category/del'); ?>" isConfirm="1" method="get" confirmMsg="是否确定删除当前记录？" inputs="id:">删除</a>
				</script>
		    </div>
		</div>
	</fieldset>
</div>
	</div>
</body>
</html>