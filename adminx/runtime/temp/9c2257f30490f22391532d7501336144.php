<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"F:\wwwroot\2018\zhentan/app/adminx\view\node\index.html";i:1527337442;s:51:"F:\wwwroot\2018\zhentan\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
	<div class="layui-row">
	<div class="layui-col-md4">
		<fieldset class="layui-elem-field">
			<legend>分组</legend>
			<div class="layui-field-box">
				<select name="group" id="group" class="node-select" SIZE="20">
					<?php if(is_array($node) || $node instanceof \think\Collection || $node instanceof \think\Paginator): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?>(<?php echo $vo['value']; ?>)</option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<p>
					<button class="layui-btn layui-btn-sm" onclick="addNode( '<?php echo url('Node/add',array('level'=>1,'pid'=>0,'o'=>'group')); ?>' , 'group' ,'添加分组')">添加</button>
					<button class="layui-btn layui-btn-sm" onclick="editNode( '<?php echo url('Node/edit',array('o'=>'group')); ?>' , 'group' , '编辑分组')">编辑</button>
					<button class="layui-btn layui-btn-sm" onclick="delNode(1)">删除</button>
				</p>
			</div>
		</fieldset>
	</div>
	<div class="layui-col-md4">
		<fieldset class="layui-elem-field">
			<legend>控制器</legend>
			<div class="layui-field-box">
				<select name="model" id="model" class="node-select" SIZE="10"></select>
				<p>
					<button class="layui-btn layui-btn-sm" onclick="addNode( '<?php echo url('Node/add',array('level'=>2,'o'=>'model')); ?>' , 'model' ,'添加分组')">添加</button>
					<button class="layui-btn layui-btn-sm" onclick="editNode( '<?php echo url('Node/edit',array('o'=>'model')); ?>' , 'model' , '编辑控制器')">编辑</button>
					<button class="layui-btn layui-btn-sm" onclick="delNode(2)">删除</button>
				</p>
			</div>
		</fieldset>
	</div>
	<div class="layui-col-md4">
		<fieldset class="layui-elem-field">
			<legend>方法</legend>
			<div class="layui-field-box">
				<select name="action" id="action" class="node-select" SIZE="20"></select>
				<p>
					<button class="layui-btn layui-btn-sm" onclick="addNode( '<?php echo url('Node/add',array('level'=>3,'o'=>'action')); ?>' , 'action' ,'添加方法')">添加</button>
					<button class="layui-btn layui-btn-sm" onclick="editNode( '<?php echo url('Node/edit',array('o'=>'action')); ?>' , 'action' , '编辑方法')">编辑</button>
					<button class="layui-btn layui-btn-sm" onclick="delNode(3)">删除</button>
				</p>
			</div>
		</fieldset>
	</div>
</div>

<script type="text/javascript">
$(function(){
	$("#group").change(function(){
		load = parent.layer.load(0,{shade: [0.7, '#000000']});
		var v = $(this).val();
		$.ajax({
			type : "GET",
			url :  "/index.php?s=Adminx/Node/getchild&pid="+v+"&temp="+new Date().getTime(),
			dataType : "json",
			success : function(RES) {
				parent.layer.close(load);
				data = RES;
				var _tmp_html = '';						
				$.each(data, function(x, y) {
					_tmp_html += '<option value="'+y.id+'">'+y.name+'('+y.value+')'+'</option>';
				});
				$('#model').html(_tmp_html);
				$("#action").html('');
			}
		});		
	})

	$("#model").change(function(){
		load = parent.layer.load(0,{shade: [0.7, '#000000']});
		var v = $(this).val();
		$.ajax({
			type : "GET",
			url : "/index.php?s=Adminx/Node/getChild&pid="+v+"&temp="+new Date().getTime(),
			dataType : "json",
			success : function(RES) {
				parent.layer.close(load);
				data = RES;
				var _tmp_html = '';						
				$.each(data, function(x, y) {
					_tmp_html += '<option value="'+y.id+'">'+y.name+'('+y.value+')'+'</option>';
				});
				$('#action').html(_tmp_html);
			}
		});
	})
})

function addNode(url , domid , title){
	if (domid=='model'){
		v= $("#group option:selected").val();
		if (v==undefined) {
			layer.msg("请选择上级分组");
			return false;
		}else{
			url = url + "?pid=" + v;
		}
	}

	if (domid=='action'){
		v= $("#model option:selected").val();
		if (v==undefined) {
			layer.msg("请选择上级控制器");
			return false;
		}else{
			url = url + "?pid=" + v;
		}
	}
	openModel (url,title,'800px','500px')
}

function editNode(url , domid , title){
	if (domid=='group') {
		name = '分组';
		selOpt = $("#group option:selected");	
	}else if(domid=='model'){
		name = '控制器';
		selOpt = $("#model option:selected");
	}else if(domid=='action'){
		name = '方法';
		selOpt = $("#action option:selected");
	}

	v = selOpt.val();
	if(v==undefined){
		alert("请选择要编辑的"+name);
		return false;
	}else{
		url = url + "?id=" + v;
	}

	openModel (url,title,'800px','500px')
}

function delNode(level){
	if (level==1) {
		name = '分组';
		selOpt = $("#group option:selected");	
	}else if(level==2){
		name = '控制器';
		selOpt = $("#model option:selected");
	}else if(level==3){
		name = '方法';
		selOpt = $("#action option:selected");
	}

	v = selOpt.val();
	if(v==undefined){
		layer.msg("请选择要删除的"+name);
		return false;
	}

	load = layer.load(0,{shade: [0.7, '#000000']});
	$.get("index.php?s=Adminx/Node/del&level="+level+"&nodeID="+v+"&temp="+new Date().getTime(),function(response){
		layer.close(load);
		if (response==1){
			layer.msg('操作成功');
			selOpt.remove();
		}else{
			layer.msg(response);
		} 
	});
 	
}

function openModel (url,title,width,height) {
	layui.use('layer',function(){
		layer = layui.layer;
		layer.open({
			type: 2,
			title: title,
			shadeClose: true,
			shade: 0.8,
			area: [width, height],
			content: url //iframe的url
		}); 
	})
}
</script>

	</div>
</body>
</html>