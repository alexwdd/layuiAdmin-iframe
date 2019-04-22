<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"F:\layuiAdmin-iframe\adminx/application/view\login\index.html";i:1555914408;s:56:"F:\layuiAdmin-iframe\adminx\application\view\layout.html";i:1555899834;}*/ ?>
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
<link rel="stylesheet" href="<?php echo RES; ?>/style/login.css" media="all">
</head>
<body>
<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
    <div class="layadmin-user-login-main">

        <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2><?php echo config('site.name'); ?></h2>
        </div>

        <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-username"></label>
                <input type="text" name="username" id="LAY-user-login-username" lay-verify="required" placeholder="用户名" class="layui-input">
            </div>

            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
                <input type="password" name="password" id="LAY-user-login-password" lay-verify="required" placeholder="密码" class="layui-input">
            </div>

            <div class="layui-form-item">
                <div class="layui-row">
                    <div class="layui-col-xs7">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="LAY-user-login-vercode"></label>
                        <input type="text" name="checkcode" id="LAY-user-login-vercode" lay-verify="required" placeholder="图形验证码" class="layui-input">
                    </div>
                    <div class="layui-col-xs5">
                        <div style="margin-left: 10px;"><img src="<?php echo url('Login/verify'); ?>" class="layadmin-user-login-codeimg" id="LAY-get-vercode" url="<?php echo url('Login/verify'); ?>"></div>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <button class="layui-btn layui-btn-fluid" lay-submit lay-filter="LAY-common-submit" url="<?php echo url('Login/doLogin'); ?>">登 入</button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo RES; ?>/layui/layui.js"></script>
<script>
layui.config({
    base: '<?php echo RES; ?>/' //静态资源所在路径
}).extend({
    index: 'lib/index' //主入口模块
}).use(['index', 'user'], function() {
    var $ = layui.$,
        setter = layui.setter,
        admin = layui.admin,
        form = layui.form,
        router = layui.router(),
        search = router.search;

    form.render();
});
</script>
</body>

</html>
</div>
</body>
</html>