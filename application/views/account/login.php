<div class="account">
    <div class="login-title"></div>
    <div class="login-content clearfix">
        <div class="login-form">
            <div class="login-form-title"></div>
            <div class="login-form-bottom"></div>
            <form method="post" class="form-horizontal" action="<?php echo URL::site('/account/login');?>">
                <?php if(isset($message)):?>
                <div class="alert alert-error">
                    <?php echo $message;?>
                </div>
                <?php endif;?>
                <div class="control-group">
                    <label class="control-label" for="username">用户名：</label>
                    <div class="controls">
                        <input type="text" class="{required:true, byteRangeLength:[4,32]}" id="username" name="username" placeholder="用户名">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="password">密&nbsp;&nbsp;&nbsp;码：</label>
                    <div class="controls">
                        <input type="password" class="required" id="password" name="password" placeholder="密码">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox inline">
                            <input type="checkbox" name="remember" value="true" checked="checked">下次自动登录
                        </label>
                        <input type="hidden" name="referrer" value="<?php echo Request::$current->referrer();?>">
                        <button type="submit" class="login-btn"></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="login-pic">
            没有账号？
            <a href="<?php echo URL::site('/account/register')?>" title="立即注册">立即注册</a>
        </div>
    </div>
</div>