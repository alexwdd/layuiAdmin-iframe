<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:54:"F:\wwwroot\2018\zhentan/app/adminx\view\node\edit.html";i:1527337442;s:51:"F:\wwwroot\2018\zhentan\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
	<?php if($list['pid']>0){ ?>
	<div class="layui-form-item">
		<label class="layui-form-label">父节点</label>
		<div class="layui-form-mid">
			<?php echo $pname; ?>
		</div>
	</div>
	<?php  }  ?>
	
	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label"><?php echo $nodeName; ?>描述</label>
		<div class="layui-input-inline">
			<input type="text" name="name" class="layui-input" lay-verify="required" value="<?php echo $list['name']; ?>"  placeholder="中文描述">
		</div>
		<label class="layui-form-label"><?php echo $nodeName; ?>值</label>
		<div class="layui-input-inline">
			<input type="text" name="value" class="layui-input" lay-verify="required" value="<?php echo $list['value']; ?>" placeholder="填写<?php echo $nodeName; ?>值">
		</div>			
	</div>

	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">状态</label>
		<div class="layui-input-inline">
			<input type="radio" name="status" value="1" title="开启" <?php if($list['status']=='1')echo 'checked'; ?>>
			<input type="radio" name="status" value="0" title="关闭" <?php if($list['status']=='0')echo 'checked'; ?>>
		</div>
	</div>
	
	<?php if($list['level']==2){ ?>
	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">归属</label>
		<div class="layui-input-inline">
			<select name="data" id="data" default="<?php echo $list['data']; ?>" lay-verify="required">
			<option value="">==请选择==</option>
			<?php if(is_array($leftMenu) || $leftMenu instanceof \think\Collection || $leftMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $leftMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<option value="<?php echo $vo['menuName']; ?>"><?php echo $vo['menuName']; ?></option>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
	</div>	
	<?php } ?>	

	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">菜单</label>
		<div class="layui-input-inline">
			<input type="radio" name="display" value="1" title="显示" <?php if($list['display']=='1')echo 'checked'; ?>>
			<input type="radio" name="display" value="0" title="隐藏" <?php if($list['display']=='0')echo 'checked'; ?>>
		</div>

		<label class="layui-form-label">图标</label>
		<div class="layui-input-inline">
			<input type="text" name="icon" value="<?php echo $list['icon']; ?>" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">备注</label>
		<div class="layui-input-block">
			<input type="text" name="remark" class="layui-input" value="<?php echo $list['remark']; ?>">
		</div>
	</div>

	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">排序</label>
		<div class="layui-input-inline">
			<input type="text" name="sort" class="layui-input" value="<?php echo $list['sort']; ?>" placeholder="必填" lay-verify="number">
		</div>
	</div>

	<hr>

	<div class="layui-form-item">
		<label class="layui-form-label"></label>
     	<button id="subBtn" class="layui-btn" lay-submit="" lay-filter="edit" url="<?php echo url('Node/edit'); ?>"><i class="layui-icon">&#xe642;</i>编辑</button>
     	<button type="button" class="layui-btn layui-btn-primary" function="close">关闭</button>
    </div>	

	<input type="hidden" name="pid" value="<?php echo $list['pid']; ?>" />
	<input type="hidden" name="level" value="<?php echo $list['level']; ?>" />
	<input type="hidden" name="id" value="<?php echo $list['id']; ?>" />
	<input type="hidden" name="dosubmit">
</form>
	</div>
</body>
</html>