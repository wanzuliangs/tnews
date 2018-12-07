{__NOLAYOUT__}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>跳转提示</title>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
   <script src="__ADMIN__/plus/layer/layer.js"></script>
</head>
<body>
   <input type="hidden" id="msg" name="msg" value="<?php echo(strip_tags($msg));?>" />
   <input type="hidden" id="url" name="url" value="<?php echo($url);?>" />
   <input type="hidden" id="wait" name="wait" value="<?php echo($wait);?>" />
    <script type="text/javascript">

        (function(){
            var msg = document.getElementById('msg'),
                url = document.getElementById('url'),
                wait = document.getElementById('wait');
                layer.open({
                  content: msg.value,
                  time: 3000,
                  anim:4,
                  yes: function(index, layero){
                    location.href = url.value;
                    layer.close(index);
                  }
            });    
          
            var interval = setInterval(function(){
                var time = --wait.value;
                if(time <= 0) {
                    location.href = url.value;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
