<?php defined('SYSPATH') or die('No direct script access.');?>
<form class="form-horizontal" method="post" action="<?php echo URL::site('/coach/update');?>">
  <div class="control-group">
    <label class="control-label">信息类别</label>
    <div class="controls">
        <?php
        echo Form::select('parent', $parent_list, $model->parent, array(
            'class' => 'chain input-small',
            'data-chain_target' => 'child',
            'data-chain_url' => Route::url('admin', array('controller' => 'category', 'action' => 'child')),
        ));

        echo Form::select('child', $child_list, $model->child, array(
            'id' => 'child',
            'class' => 'chain input-small',
            'data-chain_target' => 'item',
            'data-chain_url' => Route::url('admin', array('controller' => 'category', 'action' => 'item')),
        ));

        echo Form::select('item', $item_list, $model->item, array(
            'id' => 'item',
            'class' => 'input-small',
        ));
        ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label">选择区域</label>
    <div class="controls">
        <?php
        echo Form::select('province', $province_list, $model->province, array(
            'class' => 'chain input-small',
            'data-chain_target' => 'city',
            'data-chain_url' => Route::url('admin', array('controller' => 'district', 'action' => 'city')),
        ));

        echo Form::select('city', $city_list, $model->city, array(
            'id' => 'city',
            'class' => 'chain input-small',
            'data-chain_target' => 'county',
            'data-chain_url' => Route::url('admin', array('controller' => 'district', 'action' => 'county')),
        ));

        echo Form::select('county', $county_list, $model->county, array(
            'id' => 'county',
            'class' => 'chain input-small',
            'data-chain_target' => 'towns',
            'data-chain_url' => Route::url('admin', array('controller' => 'district', 'action' => 'towns')),
        ));

        echo Form::select('towns', $towns_list, $model->towns, array(
            'id' => 'towns',
            'class' => 'input-small',
        ));
        ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="title">信息标题</label>
    <div class="controls">
      <input class="required" type="text" name="title" value="<?php echo $model->title;?>" id="title" placeholder="请输入信息标题">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="meta_title">站内描述</label>
    <div class="controls">
      <input type="text" id="meta_title" name="meta_title" value="<?php echo $model->meta_title;?>" placeholder="请输入站内描述">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label">培训时间</label>
    <div class="controls">
		<?php $train_times = $model->parse_bin_value('train_time');?>
        <?php foreach(Model_Coach::$train_time as $key=>$item){
        echo '<label class="checkbox inline" for="train_time'.$key.'">'.Form::checkbox('train_time['.$key.']', 1, $train_times[$key], array('id'=>'train_time['.$key.']', 'class'=>'inline')).$item.'</label>';
        }?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label">培训场所</label>
    <div class="controls">
		<?php $train_places = $model->parse_bin_value('train_place');?>
        <?php foreach(Model_Coach::$train_place as $key=>$item){
            echo '<label class="checkbox inline" for="train_place'.$key.'">'.Form::checkbox('train_place['.$key.']', 1, $train_places[$key], array('id'=>'train_place['.$key.']', 'class'=>'inline')).$item.'</label>';
        }?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="train_price">培训费用</label>
    <div class="controls">
        <div class="input-append">
          <input id="train_price" class="digits" type="text" name="train_price" value="<?php echo $model->train_price?>" placeholder="请输入金额" ><span class="add-on">元/小时</span>
        </div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="train_year">教学年限</label>
    <div class="controls">
        <div class="input-append">
            <input id="train_year" class="digits" type="text" name="teach_year" value="<?php echo $model->teach_year;?>" placeholder="请输入教学年限" ><span class="add-on">年</span>
        </div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="class_num">班级人数</label>
    <div class="controls">
        <?php echo Form::select('class_num', Model_Coach::$class_num, $model->class_num, array('id' => 'class_num'));?>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="content-edit">详细说明</label>
    <div class="controls">
        <textarea id="content-edit" name="content" class="span10" rows="10"><?php echo $model->content;?></textarea>
        <?php if(isset($message['content'])):?>
        <label class="label label-important input-large help-inline"><?php echo $message['content'];?></label>
        <?php endif;?>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
		<input type="hidden" name="coach_id" value="<?php echo $model->pk();?>">
      	<button type="submit" class="btn btn-primary">提交</button>
    </div>
  </div>
</form>
<script type="text/javascript">
    var UPLOAD_URL = "<?php echo Route::url('admin', array('controller' => 'resource', 'action' => 'upload'), TRUE);?>";
</script>