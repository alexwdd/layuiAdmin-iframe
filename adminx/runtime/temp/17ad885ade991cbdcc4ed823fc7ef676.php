<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"I:\wwwroot\layuiAdmin-iframe\adminx/application/view\login\index.html";i:1555837400;}*/ ?>
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
                        <div style="margin-left: 10px;"><img src="<?php echo url('Login/verify'); ?>" class="layadmin-user-login-codeimg" id="LAY-user-get-vercode" url="<?php echo url('Login/verify'); ?>"></div>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <button class="layui-btn layui-btn-fluid" lay-submit lay-filter="LAY-user-login-submit" url="<?php echo url('Login/doLogin'); ?>">登 入</button>
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

    //提交
    form.on('submit(LAY-user-login-submit)', function(obj) {
        //请求登入接口
        admin.req({
            url: $(obj.elem).attr('url'),
            data: obj.field,
            method:'post',
            done: function(res) {
                //登入成功的提示与跳转
                layer.msg('登入成功', {
                    offset: '15px',
                    icon: 1,
                    time: 1000
                }, function() {
                    location.href = '<?php echo url('index/index'); ?>'; //后台主页
                });
            }
        });
        $("#LAY-user-get-vercode").click();
    });
});
</script>
</body>

</html>