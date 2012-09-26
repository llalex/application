<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="main pull-left">
    <div class="coach-property">
        <h2><?php echo $model->title;?></h2>
        <h3>[<?php echo $model->meta_title;?>]</h3>
        <div class="row-fluid">
            <div class="span4">
                <img width="200" height="200" src="<?php echo Model_User::avatar($model->user_id);?>" alt="">
                <div><a href="#">消息</a></div>
            </div>
            <div class="span8">
                <table>
                    <tr>
                        <th>老师编号：</th>
                        <td><?php echo $model->pk();?></td>
                    </tr>
                    <tr>
                        <th>教练姓名：</th>
                        <td><?php echo $model->realname;?></td>
                    </tr>
                    <tr>
                        <th>性别：</th>
                        <td><?php echo Model_User::$gender_arr[$model->user->gender];?></td>
                    </tr>
                    <tr>
                        <th>出生年份：</th>
                        <td><?php echo date('Y', $model->user->birthday);?>年</td>
                    </tr>
                    <tr>
                        <th>地区：</th>
                        <td>北京->海淀</td>
                    </tr>
                    <tr>
                        <th>培训费用：</th>
                        <td><?php echo $model->train_price;?>元/小时</td>
                    </tr>
                    <tr>
                        <th>培训场所：</th>
                        <td>学员指定场所/教练提供场所</td>
                    </tr>
                    <tr>
                        <th>培训时间：</th>
                        <td>晚上/下午/周六周日</td>
                    </tr>
                    <tr>
                        <th>教练身份：</th>
                        <td>专职</td>
                    </tr>
                    <tr>
                        <th>教学年限：</th>
                        <td><?php echo $model->teach_year;?>年</td>
                    </tr>
                    <tr>
                        <th>班级人数：</th>
                        <td>6人内班</td>
                    </tr>
                    <tr>
                        <th>联系方式：</th>
                        <td><?php echo $model->user->phone;?></td>
                    </tr>
                    <tr>
                        <th>联系QQ：</th>
                        <td><?php echo $model->user->QQ;?></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
    <div class="detail">
        <h3>详细说明<span class="pull-right"><a href="#">more>></a></span></h3>
        <div>
            <?php echo $model->content;?>
        </div>
        <h3>发布的教学文章<span class="pull-right"><a href="#">more>></a></span></h3>
        <div class="row">
            <div class="span4"><a href="#">网球接发球的四个动作助你领先一步</a></div>
            <div class="span4"><a href="#">网球接发球的四个动作助你领先一步</a></div>
            <div class="span4"><a href="#">网球接发球的四个动作助你领先一步</a></div>
            <div class="span4"><a href="#">网球接发球的四个动作助你领先一步</a></div>
            <div class="span4"><a href="#">网球接发球的四个动作助你领先一步</a></div>
            <div class="span4"><a href="#">网球接发球的四个动作助你领先一步</a></div>
        </div>
        <h3>相关信息</h3>
        <div class="row">
            <div class="span4"><a href="#">username创建的俱乐部</a></div>
            <div class="span4"><a href="#">username创建的俱乐部</a></div>
        </div>
        <div class="comment">
            <h3>用户留言</h3>
            <div class="comment-list">
                <dl id="commont_1">
                    <dt><span><a href="#">游客</a></span>2012-9-20 13:37<span class="pull-right"><a href="#">删除</a></span></dt>
                    <dd>这是一条评论这是一条评论这是一条评论这是一条评论这是一条评论这是一条评论这是一条评论这是一条评论这是一条评论这是一条评论</dd>
                </dl>
            </div>
            <form>
                <label>留言：</label>
                <textarea name="content" id="content" class="span8" rows="6"></textarea>
                <span class="help-block">Example block-level help text here.</span>
                <button type="submit" class="btn btn-primary">提&nbsp;&nbsp;&nbsp;交</button>
            </form>
        </div>
    </div>
</div>
<div class="sider-bar pull-right">
    <div class="plate">
        <div class="plate-header">
            <h4>北京海淀网球培训推荐教练</h4>
        </div>
        <div class="plate-content item-list">
            <div class="row-fluid item">
                <div class="span4">
                    <a href="#"><img width="56" height="56" src="asset/avatar_big.gif"></a>
                    <a href="#">username</a>
                </div>
                <div class="span8">
                    <h4>游泳高手教你学蛙泳</h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：120元/小时</div>
                </div>
            </div>
            <div class="row-fluid item">
                <div class="span4">
                    <a href="#"><img width="56" height="56" src="asset/avatar_big.gif"></a>
                    <a href="#">username</a>
                </div>
                <div class="span8">
                    <h4>游泳高手教你学蛙泳</h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：120元/小时</div>
                </div>
            </div>
            <div class="row-fluid item">
                <div class="span4">
                    <a href="#"><img width="56" height="56" src="asset/avatar_big.gif"></a>
                    <a href="#">username</a>
                </div>
                <div class="span8">
                    <h4>游泳高手教你学蛙泳</h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：120元/小时</div>
                </div>
            </div>
            <div class="row-fluid item">
                <div class="span4">
                    <a href="#"><img width="56" height="56" src="asset/avatar_big.gif"></a>
                    <a href="#">username</a>
                </div>
                <div class="span8">
                    <h4>游泳高手教你学蛙泳</h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：120元/小时</div>
                </div>
            </div>
            <div class="row-fluid item">
                <div class="span4">
                    <a href="#"><img width="56" height="56" src="asset/avatar_big.gif"></a>
                    <a href="#">username</a>
                </div>
                <div class="span8">
                    <h4>游泳高手教你学蛙泳</h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：120元/小时</div>
                </div>
            </div>
        </div>
    </div>
    <div class="plate">
        <div class="plate-header">
            <h4>北京海淀网球培训人气教练</h4>
        </div>
        <div class="plate-content item-list">
            <div class="row-fluid item">
                <div class="span4">
                    <a href="#"><img width="56" height="56" src="asset/avatar_big.gif"></a>
                    <a href="#">username</a>
                </div>
                <div class="span8">
                    <h4>游泳高手教你学蛙泳</h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：120元/小时</div>
                </div>
            </div>
            <div class="row-fluid item">
                <div class="span4">
                    <a href="#"><img width="56" height="56" src="asset/avatar_big.gif"></a>
                    <a href="#">username</a>
                </div>
                <div class="span8">
                    <h4>游泳高手教你学蛙泳</h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：120元/小时</div>
                </div>
            </div>
            <div class="row-fluid item">
                <div class="span4">
                    <a href="#"><img width="56" height="56" src="asset/avatar_big.gif"></a>
                    <a href="#">username</a>
                </div>
                <div class="span8">
                    <h4>游泳高手教你学蛙泳</h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：120元/小时</div>
                </div>
            </div>
            <div class="row-fluid item">
                <div class="span4">
                    <a href="#"><img width="56" height="56" src="asset/avatar_big.gif"></a>
                    <a href="#">username</a>
                </div>
                <div class="span8">
                    <h4>游泳高手教你学蛙泳</h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：120元/小时</div>
                </div>
            </div>
            <div class="row-fluid item">
                <div class="span4">
                    <a href="#"><img width="56" height="56" src="asset/avatar_big.gif"></a>
                    <a href="#">username</a>
                </div>
                <div class="span8">
                    <h4>游泳高手教你学蛙泳</h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：120元/小时</div>
                </div>
            </div>
        </div>
    </div>
</div>