<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"I:\wwwroot\layuiAdmin-iframe\adminx/application/view\article\index.html";i:1555949904;s:64:"I:\wwwroot\layuiAdmin-iframe\adminx\application\view\layout.html";i:1555852192;}*/ ?>
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
    <form class="layui-form layui-card-header layuiadmin-card-header-auto" tableId="LAY-app-content-list">
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
                <button class="layui-btn" lay-submit lay-filter="tools-btn-search" style="display: block;">
                    <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="layui-card-body">
        <div style="padding-bottom: 10px;">            
            <button class="layui-btn layui-btn-primary tools-btn" data-type="add" data-tableId="LAY-app-content-list" url="<?php echo url('article/add'); ?>" topWidth="80%" topHeight="80%" topTitle="新增">添加</button>
            <button class="layui-btn layui-btn-primary tools-btn" data-type="refresh" data-tableId="LAY-app-content-list">刷新</button>
            <button class="layui-btn layui-btn-primary tools-btn" data-type="batchdel" data-tableId="LAY-app-content-list" url="<?php echo url('article/trash'); ?>">回收站</button>
            <button class="layui-btn layui-btn-primary tools-btn" data-type="move" data-tableId="LAY-app-content-list" url="<?php echo url('article/move'); ?>">移动</button>
            <button class="layui-btn layui-btn-danger tools-btn" data-type="batchdel" data-tableId="LAY-app-content-list" url="<?php echo url('article/del'); ?>">删除</button>
        </div>
        <table id="LAY-app-content-list" class="LAY-common-table" lay-method="post" lay-url="<?php echo url('article/index'); ?>" lay-filter="LAY-app-content-list"></table>
        <div class="fsDatagridCols">
            <p checkbox="true"/>    
            <p field="title" title="标题" width="40%"/>       
            <p title="图片" width="60" templet="#imageTpl"/>  
            <p field="cate" title="分类" width="100"/>    
            <p field="editer" title="作者" width="80"/>   
            <p field="hit" title="浏览量" width="80"/>     
            <p field="sort" title="排序值" width="80"/>
            <p title="属性" width="120" templet="#flagTpl"/>
            <p field="createTime" title="发布日期" width="180" sort="true"/>
            <p field="updateTime" title="更新日期" width="180" sort="true"/>
            <p fixed="right" align="left" toolbar="#barDemo" title="操作" width="140"/>
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
            <a class="layui-btn layui-btn-xs" lay-event="top" topUrl="<?php echo url('Article/edit'); ?>?id={{d.id}}" topWidth="80%" topHeight="80%" topTitle="编辑">编辑</a>
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
}).use(['index','table'],function(){
    var form = layui.form, $ = layui.$;
    //监听性别操作
    form.on('switch(status)', function(obj){
        url = '<?php echo url('article/status'); ?>';
        var id = this.value;
        var v = 0
        if (obj.elem.checked){
            v = 1;
        } 
        $.post(url, {id: this.value,field:"status",val:v});
    });
});
</script>
</div>
</body>
</html>