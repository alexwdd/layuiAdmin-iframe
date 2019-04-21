<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"I:\wwwroot\layuiAdmin-iframe\adminx/application/view\user\password.html";i:1555852198;s:64:"I:\wwwroot\layuiAdmin-iframe\adminx\application\view\layout.html";i:1555852192;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo config('site.name'); ?></title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="<?php echo RES; ?>/layui/css/layui.css" media="all">
<link rel="stylesheet" href="<?php echo RES; ?>/style/admin.css" media="all">
<script src="<?php echo RES; ?>/layui/layui.js"></script>
</head>
<body>
<div class="layui-fluid">
   <div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
        <div class="layui-card">
            <div class="layui-card-header">修改密码</div>
            <div class="layui-card-body" pad15>
                <div class="layui-form" lay-filter="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">当前密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="oldpwd" lay-verify="required" lay-verType="tips" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">新密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password" lay-verify="pass" lay-verType="tips" autocomplete="off" id="LAY_password" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">6到16个字符</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">确认新密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="repassword" lay-verify="repass" lay-verType="tips" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="setmypass" url="<?php echo url('user/password'); ?>">确认修改</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
layui.config({
    base: '<?php echo RES; ?>/' //静态资源所在路径
}).extend({
    index: 'lib/index' //主入口模块
}).use(['index', 'set']);
</script>
</div>
</body>
</html>