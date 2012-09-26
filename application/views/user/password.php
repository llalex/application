<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="plate">
    <div class="plate-header">
        <h4>修改密码</h4>
    </div>
    <div>
        <form autocomplete="off" class="form-horizontal" method="post" action="<?php echo URL::site('/user/password');?>">
            <div class="control-group">
                <label class="control-label" for="password">旧密码</label>
                <div class="controls">
                    <input class="required" type="password" id="password" name="password" placeholder="旧密码">
                    <?php if(isset($message['password'])):?>
                    <label class="label label-important help-inline"><?php echo $message['password'];?></label>
                    <?php endif;?>
                </div>
            </div>
            <div class="control-group">
                <label for="newpassword" class="control-label">新密码</label>
                <div class="controls">
                    <input class="required" type="password" id="newpassword" name="newpassword" placeholder="新密吗">
                    <?php if(isset($message['newpassword'])):?>
                    <label class="label label-important help-inline"><?php echo $message['newpassword'];?></label>
                    <?php endif;?>
                </div>
            </div>
            <div class="control-group">
                <label for="confirm" class="control-label">确认密码</label>
                <div class="controls">
                    <input class="required {equalTo:newpassword}" type="password" id="confirm" placeholder="确认密码">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-warning">提交</button>
                    <button type="reset" class="btn btn-info">取消</button>
                </div>
            </div>
        </form>
    </div>
</div>