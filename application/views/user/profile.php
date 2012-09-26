<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="plate">
    <div class="plate-header">
        <h4>个人资料</h4>
    </div>
    <div class="plate-content clearfix">
        <form method="post" action="<?php echo URL::site('/user/profile')?>" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="realname">真实姓名</label>
                <div class="controls">
                    <input type="text" id="realname" name="realname" placeholder="请输入真实姓名" value="<?php echo $login_user->realname;?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="teach_type">教练身份</label>
                <div class="controls">
                    <?php echo $login_user->teach_type_showselect();?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="gender">教练性别</label>
                <div class="controls">
                    <?php echo $login_user->gender_showselect();?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="birthday">出生日期</label>
                <div class="controls">
                    <?php echo $login_user->birthday_showselect();?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="phone">联系电话</label>
                <div class="controls">
                    <input type="text" id="phone" name="phone" placeholder="请输入联系电话" value="<?php echo $login_user->phone;?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="QQ">联系QQ</label>
                <div class="controls">
                    <input type="text" id="QQ" name="QQ" placeholder="请输入QQ号码" value="<?php echo $login_user->QQ;?>">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary">提 交</button>
                    <button type="reset" class="btn btn-danger">取 消</button>
                </div>
            </div>
        </form>
    </div>
</div>