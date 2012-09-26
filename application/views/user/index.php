<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="plate">
    <div class="plate-header">
        <h4>基本资料</h4>
    </div>
    <div class="plate-content clearfix">
        <div></div>
        <div class="span5">注册名：<?php echo $login_user->username;?></div>
        <div class="span5">邮箱：<?php echo $login_user->email;?></div>
        <div class="span5">会员级别：普通会员</div>
        <div class="span5">开通时间：<?php echo date('Y-m-d H:i', $login_user->regdate);?></div>
    </div>
</div>