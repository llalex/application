<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="plate">
    <div class="plate-header">
        <h4>邮箱验证</h4>
    </div>
    <div class="plate-content">
        <div>
            <form class="form-horizontal" method="post" action="<?php echo URL::site('user/avatar');?>">

                <input type="file" name="avatar" placeholder="上传新头像">
                <?php if(isset($message)):?>
                <label class="label label-important help-inline"><?php echo $message;?></label>
                <?php endif;?>
                <div>
                    <button type="submit" class="btn btn-primary">提 交</button>
                    <button type="reset" class="btn btn-danger">取 消</button>
                </div>
            </form>
        </div>
    </div>
</div>