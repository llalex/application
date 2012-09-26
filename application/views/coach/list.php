<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="main pull-left">
    <div class="panel list-category">

        <div class="child">
            <form class="form-inline">
                <h4 class="pull-left">选择地区:</h4>
                <span><a href="#">不限</a></span>
                <span class="active"><a href="#">北京</a></span>
                <select name="city" class="input-small">
                    <option>--请选择--</option>
                    <option>东城区</option>
                    <option>西城区</option>
                    <option>崇文区</option>
                    <option>宣武区</option>
                </select>
            </form>
        </div>

        <div class="child">
            <h4 class="pull-left">选择性别:</h4>
            <span class="active"><a href="#">不限</a></span>
            <span><a href="#">男</a></span>
            <span><a href="#">女</a></span>
        </div>

    </div>

    <div class="plate">
        <div class="plate-header">
            <h4>北京网球培训教练</h4>
        </div>
        <div class="plate-content item-list">
            <?php foreach ($coach_list as $item):?>
            <div class="row-fluid item">
                <div class="span2 item-left avatar">
                    <a href="#"><img width="56" height="56" src="<?php echo Model_User::avatar($item->user_id);?>" /></a>
                    <a href="#"><?php echo $item->realname;?></a>
                </div>
                <div class="span7 item-center">
                    <div class="item-title">
                        [<?php echo $item->meta_title;?>] <a href="<?php echo URL::site('/coach/detail/'.$item->pk());?>"><?php echo $item->title;?></a>
                    </div>
                    <div><?php echo UTF8::substr($item->content, 0, 140);?></div>
                </div>
                <div class="span3 item-right">
                    <div>培训费用:<span><?php echo $item->train_price;?></span>元/小时</div>
                    <div>浏览次数：<span><?php echo $item->view_num;?></span>次</div>
                </div>
            </div>
        <?php endforeach;?>
        </div>
        <?php echo $pagination;?>
    </div>

    <div class="plate">
        <div class="plate-header">
            <h4>北京网球培训推荐教练</h4>
        </div>
        <div class="plate-content clearfix">
            <ul class="image-list">
                <?php $i = 0; foreach($recommend as $item): $i++;?>
                <li>
                    <div class="avatar">
                        <a href="#"><img width="56" height="56" src="<?php echo Model_User::avatar($item->user_id);?>" /></a>
                        <a href="#"><?php echo $item->realname;?></a>
                    </div>
                    <span><a href="<?php echo URL::site('coach/detail/'.$item->pk());?>"><?php echo $item->meta_title;?></a></span>
                    <span><a href="<?php echo URL::site('coach/detail/'.$item->pk());?>"><?php echo $item->title;?></a></span>
                </li>
                <?php if($i === 6):?>
                <div class="hr clearfix"></div>
                <?php endif;?>
                <?php endforeach;?>
            </ul>
        </div>
    </div>

    <div class="plate">
        <div class="plate-header">
            <h4>北京网球培训教练区域导航</h4>
        </div>
        <div class="plate-content district">
            <div>
                <span class="title">北京市:</span>
                <span><a href="#" title="东城区网球培训教练">东城区</a></span>
                <span><a href="#" title="西城区网球培训教练">西城区</a></span>
                <span><a href="#">崇文区</a></span>
                <span><a href="#">宣武区</a></span>
                <span><a href="#">朝阳区</a></span>
                <span><a href="#">丰台区</a></span>
                <span><a href="#">石景山区</a></span>
                <span><a href="#">海淀区</a></span>
                <span><a href="#">门头沟区</a></span>
                <span><a href="#">房山区</a></span>
                <span><a href="#">通州区</a></span>
                <span><a href="#">顺义区</a></span>
            </div>
        </div>
    </div>
</div>

<div class="sider-bar pull-right">
    <div class="plate">
        <div class="plate-header">
            <h4>北京网球培训推荐教练</h4>
        </div>
        <div class="plate-content item-list">
            <?php $i = 0; foreach($recommend as $item): $i++;?>
            <div class="row-fluid item">
                <div class="span4 avatar">
                    <a href="#"><img width="56" height="56" src="<?php echo Model_User::avatar($item->user_id);?>" /></a>
                    <a href="#"><?php echo $item->realname;?></a>
                </div>
                <div class="span8">
                    <h4><a href="<?php echo URL::site('/coach/detai/'.$item->pk());?>"><?php echo $item->title;?></a></h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：<?php echo $item->train_price?>元/小时</div>
                </div>
            </div>
            <?php if($i === 6){
                break;
            }?>
            <?php endforeach;?>
        </div>
    </div>
    <div class="plate">
        <div class="plate-header">
            <h4>北京网球培训人气教练</h4>
        </div>
        <div class="plate-content item-list">
            <?php foreach($new_coaches as $item):?>
            <div class="row-fluid item">
                <div class="span4 avatar">
                    <a href="#"><img width="56" height="56" src="<?php echo Model_User::avatar($item->user_id);?>"></a>
                    <a href="#"><?php echo $item->realname;?></a>
                </div>
                <div class="span8">
                    <h4><a href="<?php echo URL::site('/coach/detai/'.$item->pk());?>"><?php echo $item->title;?></a></h4>
                    <div>项目：游泳</div>
                    <div>地区：北京</div>
                    <div>费用：<?php echo $item->train_price?>元/小时</div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>