<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:53:"F:\wwwroot\2018\zhentan/app/www\view\public\jump.html";i:1530767564;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>系统提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background: #fff; font-family: "Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif; color: #333; font-size: 16px;background: #f2f2f2}
        .system-message{ background: #fff; clear: both; margin: 30px 5%; box-shadow: 0 0 10px #999}
        .system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
        .system-message .jump{ padding-top: 10px; }
        .system-message .jump a{ color: #333; }
        .system-message .success,.system-message .error{padding: 10px; text-align: center;}
        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display: none; text-align: center; }
        .system-message .jump{ padding: 10px; font-size: 12px; text-align: center; }
    </style>
</head>
<body>
    <div class="system-message">
        <?php switch ($code) {case 1:?> 
            <p class="success"><?php echo(strip_tags($msg));?></p>
            <?php break;case 0:?>
            <p class="error"><?php echo(strip_tags($msg));?></p>
            <?php break;} ?>
        <p class="detail"></p>
        <p class="jump">
            页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
        </p>
    </div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
