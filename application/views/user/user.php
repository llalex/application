<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="user row-fluid">
    <div class="user-bar span3">
        <div class="user-bar-title">个人中心</div>
        <ul class="unstyled user-bar-group">
            <li>
                <div>个人信息管理</div>
                <ul class="user-bar-item">
                    <li><a href="<?php echo URL::site('/user/profile');?>">基本资料</a></li>
                    <li><a href="<?php echo URL::site('/user/avatar');?>">修改头像</a></li>
                    <li><a href="<?php echo URL::site('/user/password')?>">修改密码</a></li>
                    <li><a href="<?php echo URL::site('/user/email')?>">邮箱认证</a></li>
                </ul>
            </li>
            <li>
                <div>教练信息管理</div>
                <ul class="user-bar-item">
                    <li><a href="<?php echo URL::site('coach/publish')?>">发布教练信息</a></li>
                    <li><a href="<?php echo URL::site('coach/manage')?>">管理教练信息</a></li>
                </ul>
            </li>
            <li>
                <div>教学文章管理</div>
                <ul class="user-bar-item">
                    <li><a href="<?php echo URL::site('article/publish');?>">发布教学文章</a></li>
                    <li><a href="<?php echo URL::site('acticle/manage')?>">管理教学文章</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="user-content span9">
        <?php echo $content;?>
    </div>
</div>