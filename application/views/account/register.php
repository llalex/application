<div class="account">
    <div class="register-title">新用户注册</div>
    <div class="register-content">
        <form method="post" class="form-horizontal" autocomplete="off" action="<?php echo URL::site('/account/register');?>">
            <?php if(isset($message) AND !is_array($message)):?>
            <div class="alert alert-error">
                <?php echo $message;?>
            </div>
            <?php endif;?>
            <div class="control-group">
                <label class="control-label" for="username">用 &nbsp;户&nbsp;名：</label>
                <div class="controls">
                    <input type="text" class="{required:true, byteRangeLength:[4,32], remote:'<?php echo URL::site('/account/unique_username')?>'}" id="username" name="username" placeholder="用户名">
                    <?php if(isset($message['username'])):?>
                    <label class="label label-important input-large help-inline"><?php echo $message['username'];?></label>
                    <?php endif;?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password">设置密码：</label>
                <div class="controls">
                    <input type="password" class="required" id="password" name="password" placeholder="设置密码">
                    <?php if(isset($message['password'])):?>
                    <label class="label label-important input-large help-inline"><?php echo $message['password'];?></label>
                    <?php endif;?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password_confirm">确认密码：</label>
                <div class="controls">
                    <input type="password" class="required {equalTo:password}" id="password_confirm" name="password_confirm" placeholder="确认密码">
                    <?php if(isset($message['password_confirm'])):?>
                    <label class="label label-important input-large help-inline"><?php echo $message['password_confirm'];?></label>
                    <?php endif;?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="email">电子邮箱：</label>
                <div class="controls">
                    <input type="text" class="{required:true, email:true, remote:'<?php echo URL::site('/account/unique_email');?>'}" id="email" name="email" placeholder="电子邮箱">
                    <?php if(isset($message['email'])):?>
                    <label class="label label-important input-large help-inline"><?php echo $message['email'];?></label>
                    <?php endif;?>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        我已阅读并同意注册协议<input type="checkbox" class="required" name="agreement" checked="checked">
                    </label>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="hidden" name="referrer" value="<?php echo Request::$current->referrer();?>">
                    <button type="submit" class="register-btn"></button>
                </div>
            </div>
        </form>
    </div>
</div>