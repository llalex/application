<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="showmessage">
    <div class="alert alert-<?php echo $type;?>">
        <p><?php echo $message;?>！页面将在<span id="show">3</span>秒后为您跳转</p>
        <p><a id="url" href="<?php echo $url;?>">如果你的浏览器没有自动跳转，请点击此链接</a></p>
    </div>
    <script language="javascript" type="text/javascript">
        //每1秒钟调用redirect()方法一次
        setInterval(function(){
            (function(second){
                if (second <= 1)
                {
                    location.href = document.getElementById('url').href;
                }
            })(document.getElementById('show').innerHTML--)
        }, 1000);
    </script>
</div>