<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"F:\wwwroot\2019\kfht.net/app/adminx\view\article\index.html";i:1544604928;s:52:"F:\wwwroot\2019\kfht.net\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
		<form class="layui-form" style="margin-bottom:10px">
			<div class="layui-inline">
				<div class="layui-input-inline">
					<input type="text" name="keyword" autocomplete="off" placeholder="标题" class="layui-input"/>
				</div>
			</div>
			<div class="layui-inline">
				<label class="layui-form-mid">分类</label>
				<div class="layui-input-inline">
					<select name="path" id="path">
						<option value="0">全部</option>
						<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<option value='<?php echo $vo['path']; ?>'><?php 
				            for($i=0; $i<$vo['count']*2; $i++){
				               echo '&nbsp;&nbsp;';            
				            }
				         ?><?php echo $vo['name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>				
				</div>
			</div>
	
			<div class="layui-inline">
				<label class="layui-form-mid">状态</label>
				<div class="layui-input-inline">
					<select name="del">
						<option value="">--请选择--</option>
						<option value="1">正常</option>
						<option value="0">草稿</option>
						</volist>
					</select>
				</div>
			</div>
		</form>
		
	    <div class="layui-col-md12">
	    	<button class="layui-btn layui-btn-sm" function="top" topUrl="<?php echo url('Article/add'); ?>" topWidth="80%" isMaximize="0" topHeight="80%" topTitle="新增">
			  <i class="layui-icon">&#xe654;</i>新增
			</button>

			<button class="layui-btn layui-btn-sm layui-btn-danger" function="submit" method="post" url="<?php echo url("Article/del"); ?>" isMutiDml="1" isConfirm="1" confirmMsg="是否确定删除选中的数据？" inputs="id:">
			  <i class="layui-icon">&#xe640;</i>批量删除
			</button>

			<button class="layui-btn layui-btn-sm" function="articleMove" url="<?php echo url("Article/move"); ?>" topWidth="600px" isMaximize="0" topHeight="300px" isMutiDml="1" topTitle="文章批量移动" inputs="id">
			  <i class="layui-icon">&#xe609;</i>批量移动
			</button>

			<button class="layui-btn layui-btn-sm" function="refresh">
			  <i class="layui-icon">&#xe669;</i>刷新
			</button>

			<a href="<?php echo url('Article/trash'); ?>" class="layui-btn layui-btn-sm">
			<i class="layui-icon">&#xe640;</i>回收站</a>

			<button class="layui-btn layui-btn-sm" type="button" function="query"><i class="layui-icon">&#xe615;</i>查询</button>
	    </div>

		<div class="layui-col-md12">
	        <table id="fsDatagrid" lay-filter="fsDatagrid" class="fsDatagrid" isLoad="1" url="<?php echo url('Article/index'); ?>" isPage="1" sortType="1" pageSize="20" defaultForm="query_form" height="full-108"></table>	
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
				<p fixed="right" align="left" toolbar="#barDemo" title="操作" width="130"/>
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
				<input type="checkbox" name="status" value="{{d.id}}" lay-skin="switch" lay-text="正常|草稿" lay-filter="status" {{ d.status == 1 ? 'checked' : ''}} />				
 				<a class="layui-btn layui-btn-xs" lay-event="top" topUrl="<?php echo url("Article/edit"); ?>?id={{d.id}}" topWidth="80%" topHeight="80%" topTitle="编辑">编辑</a>
			</script>
	    </div>
	</div>
</div>
<script>
layui.use('table', function(){
	form = layui.form; 
	//监听性别操作
	form.on('switch(status)', function(obj){
		url = '<?php echo url('Article/status'); ?>';
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