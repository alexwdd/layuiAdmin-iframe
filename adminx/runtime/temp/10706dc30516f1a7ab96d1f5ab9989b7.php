<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"F:\layuiAdmin-iframe\adminx/application/view\article\index.html";i:1555915977;s:56:"F:\layuiAdmin-iframe\adminx\application\view\layout.html";i:1555899834;}*/ ?>
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
        <div class="layui-form-item">
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

            <div class="layui-inline">
                <button class="layui-btn layuiadmin-btn-list" lay-submit lay-filter="LAY-app-contlist-search" style="display: block;">
                    <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="layui-card-body">
        <div style="padding-bottom: 10px;">
            <button class="layui-btn layuiadmin-btn-list" data-type="batchdel">删除</button>
            <button class="layui-btn layuiadmin-btn-list" data-type="add">添加</button>
        </div>
        <table id="LAY-app-content-list" class="LAY-common-table" lay-method="post" lay-url="<?php echo url('article/index'); ?>" lay-filter="LAY-app-content-list"></table>
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
            <p fixed="right" align="left" toolbar="#barDemo" title="操作" width="120"/>
        </div>
            
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

    //监听搜索
    form.on('submit(LAY-app-contlist-search)', function(data) {
        var field = data.field;

        //执行重载
        table.reload('LAY-app-content-list', {
            where: field
        });
    });

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