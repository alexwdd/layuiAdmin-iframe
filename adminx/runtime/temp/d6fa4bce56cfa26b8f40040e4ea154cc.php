<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"F:\wwwroot\2019\kfht.net/app/adminx\view\setting\basic.html";i:1555297669;s:52:"F:\wwwroot\2019\kfht.net\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
	<div class="layui-tab">
		<ul class="layui-tab-title">
			<?php if(is_array($group_list) || $group_list instanceof \think\Collection || $group_list instanceof \think\Paginator): if( count($group_list)==0 ) : echo "" ;else: foreach($group_list as $k=>$vo): ?>
         		<a href="<?php echo url('Setting/index',array('inc_type'=>$k)); ?>"><li <?php if($k == 'basic'): ?>class="layui-this"<?php endif; ?>><?php echo $vo; ?></li></a>
         	<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">应用名称</label>
		<div class="layui-input-block">
			<input type="text" name="name" value="<?php echo $config['name']; ?>" lay-verify="required" placeholder="请输入网站名称" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">微信二维码</label>
		<div class="layui-inline">
			<img class="thumb" id="logo_src" src="<?php if($config['logo'] == ''): ?><?php echo RES; ?>/image/image.jpg<?php else: ?><?php echo $config['logo']; endif; ?>" />
			<input type="hidden" name="logo" id="logo" />	
		</div>
		<div class="layui-inline">
			<button type="button"  class="layui-btn" function="upload" fileElem="#logo" srcElem="#logo_src" fileAccept="images" fileExts="jpg|png|gif|jpeg" fileSize="5120" inputs="type:test">上传图片</button>
			<input type="button" value="删除" class="layui-btn layui-btn-small" onclick="delImage('logo')"/>
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">系统状态</label>
		<div class="layui-input-block">				
			<input type="radio" name="isClose" value="0" title="开启" <?php if($config['isClose']==='0')echo 'checked'; ?>>	
			<input type="radio" name="isClose" value="1" title="关闭" <?php if($config['isClose']==='1')echo 'checked'; ?>>			
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">关闭时信息</label>
		<div class="layui-input-block">
  			<input type="text" name="closeInfo" value="<?php echo $config['closeInfo']; ?>" lay-verify="required" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">网址</label>
		<div class="layui-input-block">
			<input type="text" name="domain" value="<?php echo $config['domain']; ?>" lay-verify="url" placeholder="请输入网址" class="layui-input">
		</div>
	</div>	

	<div class="layui-form-item">
		<label class="layui-form-label">版权所有</label>
		<div class="layui-input-block">
			<input type="text" name="copyright" value="<?php echo $config['copyright']; ?>" lay-verify="required" placeholder="请输入公司或单位名称" class="layui-input">
		</div>
	</div>	

	<div class="layui-form-item">
		<label class="layui-form-label">QQ</label>
		<div class="layui-input-block">
			<input type="text" name="qq" value="<?php echo $config['qq']; ?>" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">传真</label>
		<div class="layui-input-block">
			<input type="text" name="fax" value="<?php echo $config['fax']; ?>" class="layui-input">
		</div>
	</div>	

	<div class="layui-form-item">
		<label class="layui-form-label">电话</label>
		<div class="layui-input-block">
			<input type="text" name="tel" value="<?php echo $config['tel']; ?>" placeholder="请输入网址" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">联系人</label>
		<div class="layui-input-block">
			<input type="text" name="linkman" value="<?php echo $config['linkman']; ?>" placeholder="请输入联系人" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">地址</label>
		<div class="layui-input-block">
			<input type="text" name="address" value="<?php echo $config['address']; ?>" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">信箱</label>
		<div class="layui-input-block">
			<input type="text" name="email" value="<?php echo $config['email']; ?>" class="layui-input">
		</div>
	</div>	

	<div class="layui-form-item">
		<label class="layui-form-label">微信</label>
		<div class="layui-input-block">
			<input type="text" name="weixin" value="<?php echo $config['weixin']; ?>" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">微博</label>
		<div class="layui-input-block">
			<input type="text" name="weibo" value="<?php echo $config['weibo']; ?>" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">关键词</label>
		<div class="layui-input-block">
			<input type="text" name="keywords" value="<?php echo $config['keywords']; ?>" class="layui-input">
		</div>
	</div>

	<div class="layui-form-item">
		<label class="layui-form-label">描述</label>
		<div class="layui-input-block">
			<textarea name="description" class="layui-textarea"><?php echo $config['description']; ?></textarea>
			<p>一般不超过200个字</p>
		</div>
	</div>

	<hr/>

	<div class="layui-form-item">
		<label class="layui-form-label"></label>
     	<button class="layui-btn" lay-submit="" lay-filter="edit" url="<?php echo url('Setting/insert'); ?>"><i class="layui-icon">&#xe642;</i>保存</button>
    </div>
	<input type="hidden" name="inc_type" value="<?php echo $inc_type; ?>">
</form>
<script src="<?php echo RES; ?>/js/upload.js"></script>
	</div>
</body>
</html>