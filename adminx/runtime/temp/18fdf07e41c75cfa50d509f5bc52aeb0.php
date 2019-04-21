<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"I:\wwwroot\layuiAdmin-iframe\adminx/application/view\category\index.html";i:1555859382;s:64:"I:\wwwroot\layuiAdmin-iframe\adminx\application\view\layout.html";i:1555852192;}*/ ?>
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
   <div class="layui-card">
    <div class="layui-form layui-card-header layuiadmin-card-header-auto">
    	<div class="layui-col-md12">
	    	<?php $model=config("TABLE_MODEL"); if(is_array($model) || $model instanceof \think\Collection || $model instanceof \think\Paginator): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['show'] == '1'): ?>
			<a href="<?php echo url('Category/index',array('mid'=>$vo['id'])); ?>" class="layui-btn layui-btn-sm <?php if($mid!=$vo['id']){echo 'layui-btn-primary';} ?>"><?php echo $vo['name']; ?></a>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>

			<button class="layui-btn layui-btn-sm layui-btn-normal" function="top" topUrl="<?php echo url('Category/add',array('mid'=>$mid)); ?>" topWidth="80%" isMaximize="0" topHeight="80%" topTitle="添加根栏目">
			  <i class="layui-icon">&#xe654;</i>添加根栏目
			</button>
	    </div>
    </div>

    <div class="layui-card-body">
        <table id="LAY-app-content-list" lay-filter="LAY-app-content-list"></table>
        <script type="text/html" id="buttonTpl">
            {{#  if(d.status){ }}
            <button class="layui-btn layui-btn-xs">已发布</button>
          {{#  } else { }}
            <button class="layui-btn layui-btn-primary layui-btn-xs">待修改</button>
          {{#  } }}
        </script>
        <script type="text/html" id="table-content-list">
            <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
          <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
        </script>
    </div>
</div>
<script>
layui.config({
    base: '<?php echo RES; ?>/' //静态资源所在路径
}).extend({
    index: 'lib/index' //主入口模块
}).use(['index', 'contlist', 'table'], function() {
    var table = layui.table,
        form = layui.form;
    var $ = layui.$,
        active = {
            batchdel: function() {
                var checkStatus = table.checkStatus('LAY-app-content-list'),
                    checkData = checkStatus.data; //得到选中的数据

                if (checkData.length === 0) {
                    return layer.msg('请选择数据');
                }

                layer.confirm('确定删除吗？', function(index) {

                    //执行 Ajax 后重载
                    /*
                    admin.req({
                      url: 'xxx'
                      //,……
                    });
                    */
                    table.reload('LAY-app-content-list');
                    layer.msg('已删除');
                });
            },
            add: function() {
                layer.open({
                    type: 2,
                    title: '添加文章',
                    content: 'listform.html',
                    maxmin: true,
                    area: ['550px', '550px'],
                    btn: ['确定', '取消'],
                    yes: function(index, layero) {
                        //点击确认触发 iframe 内容中的按钮提交
                        var submit = layero.find('iframe').contents().find("#layuiadmin-app-form-submit");
                        submit.click();
                    }
                });
            }
        };

    $('.layui-btn.layuiadmin-btn-list').on('click', function() {
        var type = $(this).data('type');
        active[type] ? active[type].call(this) : '';
    });

});
</script>
</div>
</body>
</html>