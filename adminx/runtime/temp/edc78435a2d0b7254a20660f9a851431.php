<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"F:\wwwroot\2019\kfht.net/app/adminx\view\upload\index.html";i:1527337442;s:52:"F:\wwwroot\2019\kfht.net\app\adminx\view\layout.html";i:1542594412;}*/ ?>
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
	<div class="layui-form-item">
		<div style="text-align: center;">
	    <div class="layui-upload-drag" style="width: 320px;">
			<i class="layui-icon">&#xe681;</i>
			<p id="fileName">点击上传，或将文件拖拽到此处</p>
		</div>
		</div>
</div>

<hr/>

<div class="layui-form-item">
    <div class="layui-input-block">
    	<button id="upload" class="layui-btn">开始上传</button>
    	<button type="button" class="layui-btn layui-btn-primary" function="close">关闭</button>
    </div>
</div>

<script>
layui.use(['upload','layer','fsConfig','fsCommon'], function(){

  var upload = layui.upload,
  fsConfig = layui.fsConfig,
  layer = layui.layer,
  fsCommon = layui.fsCommon,
  isSelectFile = false,//是否选择文件，默认false
  statusName = $.result(fsConfig,"global.result.statusName","errorNo"),
  msgName = $.result(fsConfig,"global.result.msgName","errorInfo"),
	successNo = $.result(fsConfig,"global.result.successNo","0"),
  uploadUrl = $.result(fsConfig,"global.uploadUrl",""),
  dataName = $.result(fsConfig,"global.result.dataName","results.data");
  
  var uploadFilePath = top.$('meta[name="uploadFilePath"]');
  if(uploadFilePath.length==0)
  {
	top.$('head').append("<meta name=\"uploadFilePath\" content=\"\"/>");
  }else{
 	uploadFilePath.attr("content","");
  }
  
  
  //获取参数
  var paramUrl = fsCommon.getUrlParam();
  
  var fileAccept,fileExts,fileSize;
  
  //获取业务参数绑定
  if(!$.isEmpty(paramUrl["fileParam"])){
  	var fileParam = JSON.parse(unescape(paramUrl["fileParam"]));
  	fileAccept = fileParam["fileAccept"];
  	fileExts = fileParam["fileExts"];
  	fileSize = fileParam["fileSize"];
  }
  delete paramUrl["fileParam"];
  
  //绑定默认按钮
  fsCommon.buttonEvent();
  
  var loadIndex;
  
  //选完文件后不自动上传
  upload.render({
    elem: '.layui-upload-drag'
    ,url: uploadUrl
    ,data: paramUrl
    ,accept :fileAccept
    ,exts :fileExts
    ,size :fileSize
    ,auto: false
    ,before: function(){
    	if(!isSelectFile){
    		fsCommon.warnMsg("请选择文件！");
    		return;
    	}
    	
    	loadIndex = layer.load(); //上传loading
    }
    //,multiple: true
    ,bindAction: '#upload'
    ,choose: function(obj){
    	isSelectFile = true;
    	obj.preview(function(index, file, result){
    		$("#fileName").html(file.name);
    	})
    }
    ,done: function(result){
		layer.closeAll(loadIndex); //关闭loading
		
		if(result[statusName] != successNo){
			var filters = fsConfig["filters"];
		   	if(!$.isEmpty(filters)){
	     	  var otherFunction = filters[result[statusName]];
	      	  if($.isFunction(otherFunction)){
	       	     otherFunction(result);
	      	      return;
	     	   }
		    }
	   		fsCommon.errorMsg(result[msgName]);
	   		return;
		}
		
		//上传成功后，返回文件路径
		var data = $.result(result,dataName);
		top.$('meta[name="uploadFilePath"]').attr("content",data["url"]);
		
		//关闭
		var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
		parent.layer.close(index);
		
    },
    error: function(index, upload){
		layer.closeAll(loadIndex); //关闭loading
    }
  });

});
</script>
</html>

	</div>
</body>
</html>